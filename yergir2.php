<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$yer = $_POST['yer'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Yer  Bilgisi Girildi', '$sicil',  '$yer')  ");



$sql=("INSERT INTO yerler (id,yer) VALUES (NULL,'$yer')");




$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit) AND isset ($kayit2))
{
echo"Ünvan Bilgisi Veritabanina kaydedilmistir.<br><br><a href='yeredit.php'><u>Yer Bilgileri Sayfasina dönmek için Tiklayin</u></a>";
}
else
{
echo "Kayit basarisiz";
}




?>
