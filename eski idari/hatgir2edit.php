<?php
session_start();
include "baglanti.php";


$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];




$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih','$saat','$kisi','$baskan','Hat Bilgisi Düzenlendi', '$ofis_sehir',  '$sehir_kod')  ");

$ofisbolge = $_POST['ofisbolge'];
 $ofisulke1 = $_POST['ofisulke1'];
  $ofisulke = $_POST['ofisulke'];
  $ofis_sehir = $_POST['ofis_sehir'];
  $sehir_kod = $_POST['sehir_kod'];
  $baskan=$_POST['baskan'];
	  $tur=$_POST['tur'];
	  
	    $bag=$_POST['bag'];

if(isset ($bag))
{
$bagcon=$bag;
}
else
{
$bagcon="a";
}
		


$sql=mysql_query("Update ofislist SET 
ofisbolge='$ofisbolge',
ofisulke1='$ofisulke1', 
ofisulke='$ofisulke', 
ofis_sehir='$ofis_sehir', 
sehir_kod='$sehir_kod',
baskan='$baskan',
tur='$tur',
bag='$bagcon'
where ofisid='$id' ");
 



$kayit=mysql_query($sql);




if(isset ($kayit))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Veritananina Eklenmistir.<br> ......</b></font><br><br> <a href='hatedit.php'>Hat Düzenleme Sayfasina Geri Dön";
}
else
{
echo "Kayit basarisiz";
}




?>  