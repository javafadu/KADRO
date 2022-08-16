<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];


$ktr=mysql_query(" select * from kadro where sicil='$id' ");
while($ktr1=mysql_fetch_array($ktr))
{
$ofis=$ktr1[ofis];
}


$sqlbilgi=mysql_query("INSERT INTO `ofisaciklama` (`id`, `kod`, `bilgi`) VALUES (NULL, '$ofis', '$id $bilgi')");






$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Personel Bilgisi Girildi', '$id',  '$bilgi')  ");



$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Bilgi'
 where sicil='$id' ");


$result = mysql_query("Update personel SET  
  bilgi = '$bilgi'  
where sicil='$id' ");

 




if(isset ($result) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='index.php'>Anasayfa</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  