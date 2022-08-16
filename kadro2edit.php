<?php
include "baglanti.php";


$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];


if($_SESSION['level']==4 ) {
$result = mysql_query("Update personel SET  
  sicil = '$sicil',
  isim ='$isim',
  bastarihi = '$bastarihi',
  tahsil ='$tahsil',
  kidemucret = '$kidemucret',
  netucret ='$netucret',
  para ='$para',
  hareket ='$hareket',
  bilgi ='$bilgi'
  
where sicil=".$_POST['id']);

$result2 = mysql_query("Update kadro SET  
  sicil = '$sicil',
  ofis ='$ofis',
  bolge = '$bolge',
  unvan ='$unvan',
  kadro = '$kadro',
  mahmer ='$mahmer',
  sozpart ='$sozpart',
  butce ='$butce'
  
where sicil=".$_POST['id']);
 
}

else 

{
$result = mysql_query("Update personel SET  
  sicil = '$sicil',
  isim ='$isim',
  bastarihi = '$bastarihi',
  tahsil ='$tahsil',
  kidemucret = '$kidemucret',
  netucret ='$netucret',
  para ='$para',
  hareket ='$hareket'
  
where sicil=".$_POST['id']);

$result2 = mysql_query("Update kadro SET  
  sicil = '$sicil',
  ofis ='$ofis',
  bolge = '$bolge',
  unvan ='$unvan',
  kadro = '$kadro',
  mahmer ='$mahmer',
  sozpart ='$sozpart',
  butce ='$butce'
  
where sicil=".$_POST['id']);
 
}


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Kadro Bilgisi Düzenlendi', '$sicil',  '$ofis')  ");

if(isset ($result))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='index.php'>Anasayfa</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  