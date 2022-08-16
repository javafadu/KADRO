<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Gecici Görev Bilgisi Düzenlendi', '$sicil',  '$ofis')  ");






$result2 = mysql_query("Update gecicigorev SET  
  sicil = '$sicil',
  ofis ='$ofis',
  bolge = '$bolge',
  unvan ='$unvan',
  baskan = '$baskan',
  bastarih = '$bastarih',
  bittarih = '$bittarih',
  status='$status',
  harcirah = '$harcirah',
  harcirahc = '$harcirahc',
  yolluk = '$yolluk',
  yollukc = '$yollukc',
  otel = '$otel',
  otelc = '$otelc',
  pasaport = '$pasaport',
  pasaportc = '$pasaportc',
  vize = '$vize',
  vizec = '$vizec',
  saglik = '$saglik',
  saglikc = '$saglikc',
  harc = '$harc',
  harcc = '$harcc',
  bilet = '$bilet',
  biletc = '$biletc'
  
where id='$id' ");
 




if(isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='index.php'>Anasayfa</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  