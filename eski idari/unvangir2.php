<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$unvan = $_POST['unvan'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Unvan  Bilgisi Girildi', '$sicil',  '$ofis')  ");



$sql=("INSERT INTO unvanlar (id,unvan) VALUES (NULL,'$unvan')");




$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit) AND isset ($kayit2))
{
echo"Ünvan Bilgisi Veritabanina kaydedilmistir.<br><br><a href='unvanedit.php'><u>Ünvan Bilgileri Sayfasina dönmek için Tiklayin</u></a>";
}
else
{
echo "Kayit basarisiz";
}




?>
