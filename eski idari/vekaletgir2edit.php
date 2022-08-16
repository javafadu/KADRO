<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih2 = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih2', '$saat', '$kisi','$baskan','Vekalet Bilgisi Düzenlendi', '$sicil',  '$ofis')  ");






$result2 = mysql_query("Update vekalet SET  
  sicil = '$sicil',
  ofis ='$ofis',
  bolge = '$bolge',
  unvan ='$unvan',
  kadro = '$kadro',
  butce ='$butce',
  baskan = '$baskan',
  tarih = '$tarih'

  
where sicil='$id' ");
 




if(isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='vekaletler.php'>Vekaletler Sayfasi</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  