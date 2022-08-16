<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];



$sec = mysql_query("select * from unvanlar where id='$id' ");

while($liste=mysql_fetch_array($sec))
{
$unvan=$liste[unvan];

}


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Unvan Bilgisi Silindi', '$yer',  '$id')  ");

		
$sql=mysql_query("DELETE FROM unvanlar where id='$id'");



if(isset ($sql))
{


echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Veritabanindan Basari ile Silinmistir<br> ......</b></font><br><br> <a href='yeredit.php'>Yer Sayfasina Geri Dönmek Için Tiklayin</a>";


}
else
{
echo "Islem basarisiz";
}


?>  