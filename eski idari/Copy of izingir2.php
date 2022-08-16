<?php
session_start();

include "baglanti.php";
include "header.php";
include "includes/datediff2.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];


$kontrol = mysql_query("select * from izingorev where sicil='$sicil' ");

while($lsk=mysql_fetch_array($kontrol))
{
$bu = $lsk['izinbit'];
}

if($izinbas<=$bu)
{
echo"Bu personel bu tarihler arasinda zaten izinli görünüyor<br>Izin tarihlerini kontrol etmek için <a href='izingir.php'>GERI gitmek için tiklayin</a>";
}
else
{
$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Izin Bilgisi Girildi', '$sicil',  '')  ");




			
        if(!isset($_GET['sicil']))
        { 

$sql=("INSERT INTO izingorev (id,sicil,izintur,izinneden,izinbas,izinbit) VALUES (NULL,'$sicil','$izintur','$izinneden','$izinbas','$izinbit')");



$t=date("Y");

$start2=strtotime($izinbas);
$end2=strtotime($izinbit);
$ara=($end2-$start2)/(60*60*24);



}
echo"<br><br>$sicil sicil numarali personele $izintur $izinneden bilgisi eklenmistir";
}



$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit))
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Izinli'
 where sicil=$sicil ");
}
else
{
echo "Kayit basarisiz";
}




?>
