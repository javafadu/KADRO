<?php
session_start();
include "baglanti.php";


$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$bag=$_POST['bag'];

if(isset ($bag))
{
$bagcon=$bag;
}
else
{
$bagcon="a";
}


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih','$saat','$kisi','$baskan','Hat Bilgisi Girildi', '$ofis_sehir',  '$sehir_kod')  ");
		

$sql= mysql_query("INSERT INTO `ofislist` (`ofisid`, `ofisulke1`, `ofisulke`, `ofis_sehir`, `sehir_kod`,`ofisbolge`,baskan,tur,bag) VALUES (NULL, '$ofisulke1', '$ofisulke', '$ofis_sehir', '$sehir_kod', '$ofisbolge','$baskan','$tur','$bagcon')");
 
 $sql2=mysql_query("INSERT INTO `hatlar` (`id`, `hat`, `kod`) VALUES (NULL, '$ofis_sehir', '$sehir_kod')");



$kayit=mysql_query($sql);


if(isset ($kayit))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Veritananina Eklenmistir.<br> ......</b></font><br><br> <a href='hatedit.php'>DEVAM</a>";
}
else
{
echo "Kayit basarisiz";
}




?>  