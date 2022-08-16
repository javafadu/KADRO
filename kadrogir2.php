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


$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit) AND isset ($kayit2))
{
echo"Kaydiniz Basari Ile Girilmistir.<br>
<a href='$back.php?ofis=$ofis'>$ofis Sayfasina Gitmek Için Tiklayiniz</a>";
}
else
{
echo "Kayit basarisiz";
}




?>
