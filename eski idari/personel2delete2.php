<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$sec = mysql_query("select * from kadro where sicil='$onay' ");

while($liste=mysql_fetch_array($sec))
{
$ofis=$liste[ofis];
$baskan=$liste[baskan];
}


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Personel Bilgisi Silindi', '$onay',  '$ofis')  ");


if($s==1)
{		
$sql=mysql_query("DELETE FROM personel where sicil='$onay'");
$sql2=mysql_query("DELETE FROM kadro where sicil='$onay'");
$sql3=mysql_query("DELETE FROM gecicigorev where sicil='$onay'");
$sql4=mysql_query("DELETE FROM vekalet where sicil='$onay'");
$sql4=mysql_query("DELETE FROM izingorev where sicil='$onay'");
}
else if($s==2)
{
$sql=mysql_query("select * from kadro where sicil='$onay' ");
while($liste=mysql_fetch_array($sql))
{
$kadro=$liste[kadro];
$unvan=$liste[unvan];
$baskan=$liste[baskan];
$bolge=$liste[bolge];
$ofis=$liste[ofis];
$id=$liste[id];
}
 $sorgu=mysql_query("update kadro set sicil=0, durum='', mahmer='', sozpart='', sozbas='', sozbit='',yer='' where id=$id ");
$sql2=mysql_query("DELETE FROM personel where sicil='$onay'");
$sql3=mysql_query("DELETE FROM gecicigorev where sicil='$onay'");
$sql4=mysql_query("DELETE FROM vekalet where sicil='$onay'");
$sql4=mysql_query("DELETE FROM izingorev where sicil='$onay'");
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
		
		
if(isset ($sql))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Veritabanindan Basari ile Silinmistir<br> ......</b></font><br><br> <a href='$back.php?ofis=$ofis'><b>$ofis Sayfasina Gitmek Için Tiklayiniz</a>";
}
else
{
echo "Islem basarisiz";
}


?>  