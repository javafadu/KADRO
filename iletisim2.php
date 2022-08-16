<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih2 = date("Y-m-d");
$kisi = $_SESSION['username'];

$unvan=$_POST['unvan'];

$deg=mysql_query("INSERT INTO iletisim (id,user,date,time,konu,icerik,kime) VALUES (NULL, '$kisi','$tarih2', '$saat', '$konu','$icerik', '$kime')  ");



if(isset ($deg) )
{
echo "Mesajiniz Basari Ile Iletilmistir";
}
else
{
echo "Kayit basarisiz";
}




?>
