<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$unvan=$_POST['unvan'];
$yer=$_POST['yer'];
$ofis=$_POST['ofis'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Personel Bilgisi Düzenlendi', '$sicil',  '$ofis')  ");



$result = mysql_query("Update personel SET  
  sicil = '$sicil',
  isim ='$isim',
  bastarihi = '$bastarihi',
  tahsil ='$tahsil',
  kidemucret = '$kidemucret',
  netucret ='$netucret',
  para ='$para',
  hareket ='$hareket',
  bilgi='$bilgi'
  
  
where sicil='$id' ");

$result2 = mysql_query("Update kadro SET  
  sicil = '$sicil',
 kadro='$kadro',
  durum = '$durum',
  mahmer ='$mahmer',
  sozpart ='$sozpart',
  sozbas='$sozbas',
  sozbit='$sozbit',
   yer='$yer',
   unvan='$unvan'
  
where sicil='$id' ");


$result3 = mysql_query("Update personelbilgi SET  
  sicil = '$sicil',
  tckimlik='$tckimlik',
  sskno = '$sskno',
  cinsiyet ='$cinsiyet',
  anne ='$anne',
  baba='$baba',
  dogtarih='$dogtar',
   dogumyer='$dogyer',
    adres='$adres',
	 evtel='$evtel',
	  ceptel='$ceptel',
	   istel='$istel',
	    email='$email'
   
  
where sicil='$id' ");
 

if($bilgi>0)
{
}
else
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Yok'
 where sicil=$sicil ");
}




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

if(isset ($result) AND isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='personel2.php?id=$id'>Personelin Bilgilerine Bakmak Için Tiklayin </a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  