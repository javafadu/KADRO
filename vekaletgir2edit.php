<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih2 = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];
$durum=$_POST['durum'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih2', '$saat', '$kisi','Vekalet Bilgisi Düzenlendi', '$sicil',  '$ofis')  ");



$result2 = mysql_query("Update vekalet SET  
  sicil = '$sicil',
  ofis ='$ofis',

  unvan ='$unvan',
  tarih = '$tarih',
 durum='$durum'
  
where id='$id' ");
 


if($durum<1)
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Yok'
 where sicil='$sicil' ");
 
}
 else
 {
 $durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Vekil'
 where sicil='$sicil' ");
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

if(isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='$back.php?ofis=$ofis'>$ofis Sayfasina Gitmek Için Tiklayiniz</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  