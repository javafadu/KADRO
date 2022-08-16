<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Gecici Görev Bilgisi Düzenlendi', '$sicil',  '$ofis')  ");


if($status<1)
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Yok'
 where sicil='$sicil' ");
 
}
 else
 {
 $durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Geçici Görevli'
 where sicil='$sicil' ");
 }



$result2 = mysql_query("Update gecicigorev SET  
  sicil = '$sicil',
  ofis ='$ofis',
  
  unvan ='$unvan',
  
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

if(isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='$back.php?ofis=$ofis'>$ofis Sayfasina Gitmek Için Tiklayiniz</a>";

}
else
{
echo "Kayit basarisiz";

}




?>  