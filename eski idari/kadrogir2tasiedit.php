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

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Kadro Tasima', '$sicil',  '$ofis')  ");



$result = mysql_query("Update personel SET  
  sicil = '$sicil',
  kidemucret = '$kidemucret',
  netucret ='$netucret',
  para ='$para',
  hareket ='$hareket'
  
where sicil='$id' ");

$result2 = mysql_query("Update kadro SET  
  sicil = '$sicil',
  ofis ='$ofis',
  
  unvan ='$unvan',
  kadro = '$kadro',
  yer='$yer'
 

  
where sicil='$id' ");
 




if(isset ($result) AND isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='personelofise.php?ofis=$ofis'>$ofis SAYFASINA GERI DÖN</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  