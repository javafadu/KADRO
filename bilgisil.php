<?php
session_start();

require "header.php";
include "level2_check.php";

include "baglanti.php";


$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];




$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih','$saat','$kisi','$baskan','Ofis Açiklamasi Silindi', '$ofis',  '$sehir_kod')  ");
		
 $sqldelete=mysql_query("delete from ofisaciklama where id='$id' ");
 


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



if(isset ($sqldelete))
{
echo "<br><center><font face=Verdana size=2 color=brown>Kayit Bilgileriniz Veritananindan Silinmistir.<br> ......</font><br><br> <a href='$back.php?ofis=$ofis'>$ofis SAYFASINA GERI DÖN</a>";
}
else
{
echo "Kayit basarisiz";
}




?>  