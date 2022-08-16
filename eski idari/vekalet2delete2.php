<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];



$sec = mysql_query("select * from vekalet where sicil='$onay' ");

while($liste=mysql_fetch_array($sec))
{
$ofis=$liste[ofis];
$baskan=$liste[baskan];
}


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Vekalet Bilgisi Silindi', '$onay',  '$ofis')  ");

		
$sql=mysql_query("DELETE FROM vekalet where sicil='$onay'");



if(isset ($sql))
{

$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Yok'
 where sicil=$onay ");
 
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Veritabanindan Basari ile Silinmistir<br> ......</b></font><br><br> <a href='index.php'>Anasayfa</a>";


}
else
{
echo "Islem basarisiz";
}


?>  