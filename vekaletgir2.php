<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih2 = date("Y-m-d");
$kisi = $_SESSION['username'];

$unvan=$_POST['unvan'];
$ofis=$_POST['ofis'];
$sicil=$_POST['sicil'];


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih2', '$saat', '$kisi','Vekalet Bilgisi Girildi', '$sicil',  '$ofis')  ");







$sql=mysql_query("INSERT INTO vekalet (id,sicil,ofis,unvan,tarih,durum) VALUES (NULL,'$sicil','$ofis','$unvan','$tarih',1)");


$sql2=mysql_query("INSERT INTO ofisaciklama (id,kod,bilgi) VALUES (NULL,'$ofis','$bilgi')");



$kayit=mysql_query($sql);


$ulkeyebak=mysql_query("Select * from ofislist where sehir_kod='$ofis' ");

while($uu=mysql_fetch_array($ulkeyebak))
{
$ud=$uu[ofisulke1];
}

if($ud=="TURKEY")
{
$back="personelofistr";
}
else
{
$back="personelofise";
}


if(isset ($kayit) )
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Vekil'
 where sicil=$sicil ");
 
echo"<a href='$back.php?ofis=$ofis'>$ofis Sayfasina Gitmek Için Tiklayiniz</a>"; 
 
}
else
{
echo "Kayit basarisiz";
}




?>
