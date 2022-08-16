<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];
$id=$_POST['id'];


$result2 = mysql_query("UPDATE unvanlar SET  
  
  unvan ='$unvan'
  
where id='$id' ");


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','','Unvan Bilgisi Düzenlendi', '$unvan',  '')  ");







 




if(isset ($result2) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='unvanedit.php'>Ünvan Düzenleme Sayfasi</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}




?>  