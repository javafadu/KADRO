<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$sec1=mysql_query("select * from vekalet where id ='$onay' ");
while($lss=mysql_fetch_array($sec1))
{
$onay2=$lss[sicil];
}


$sec = mysql_query("select * from vekalet where sicil='$onay2' ");

while($liste=mysql_fetch_array($sec))
{
$ofis=$liste[ofis];
}


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Vekalet Bilgisi Silindi', '$onay2',  '$ofis')  ");

		
$sql=mysql_query("DELETE FROM vekalet where id='$onay'");



if(isset ($sql))
{

$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Yok'
 where sicil=$onay2 ");
 
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Veritabanindan Basari ile Silinmistir<br> ......</b></font><br><br> <a href='index.php'>Anasayfa</a>";


}
else
{
echo "Islem basarisiz";
}


?>  