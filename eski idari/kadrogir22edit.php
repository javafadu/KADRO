<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Kadro Bilgisi D�zenlendi', '$id',  '$ofis')  ");


$result = mysql_query("Update personel SET  
  bilgi = '$bilgi'  
where sicil='$id' ");

 




if(isset ($result) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz D�zenlenmistir.</b></font><br> ......<br><a href='index.php'>Anasayfa</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  