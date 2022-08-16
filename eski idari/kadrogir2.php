<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];


$unvan=$_POST['unvan'];
$ofis=$_POST['ofis'];
$kadro=$_POST['kadro'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$kadro Kadro Bilgisi Girildi', '$unvan',  '$ofis')  ");


			
    
$sql2=mysql_query("INSERT INTO kadro (id,ofis,unvan,kadro) VALUES (NULL,'$ofis','$unvan','$kadro')");




$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit) AND isset ($kayit2))
{

}
else
{
echo "Kayit basarisiz";
}




?>
