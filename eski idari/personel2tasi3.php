<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$sec = mysql_query("select * from kadro where sicil='$sicil' ");

while($liste=mysql_fetch_array($sec))
{
$ofis=$liste[ofis];
$baskan=$liste[baskan];
$mahmer=$liste[mahmer];
$sozpart=$liste[sozpart];
$sozbas=$liste[sozbas];
$sozbit=$liste[sozbit];
}


$sec2 = mysql_query("select * from kadro where id='$secim' ");

while($liste=mysql_fetch_array($sec2))
{
$ofis2=$liste[ofis];

}

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Kadro Tasima', '$onay',  '$ofis')  ");



/*$sql=mysql_query("select * from kadro where sicil='$sicil' ");
while($liste=mysql_fetch_array($sql))
{
$kadro=$liste[kadro];
$unvan=$liste[unvan];
$baskan=$liste[baskan];
$bolge=$liste[bolge];
$ofis=$liste[ofis];
$id=$liste[id];
}
*/

 $sorgu=mysql_query("update kadro set sicil=0, durum='', mahmer='', sozpart='', sozbas='', sozbit='',yer='' where sicil='$sicil' ");
 $sorgu2=mysql_query("update kadro set sicil='$sicil',  mahmer='$mahmer', sozpart='$sozpart', sozbas='$sozbas', sozbit='$sozbit' where id='$secim' ");
if(isset ($sorgu2))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Transfer basari ile gerçeklesmistir.<br> ......</b></font><br><br> <a href='personelofise.php?ofis=$ofis2'>$ofis2 Sayfasi</a>";
}
else
{
echo "Islem basarisiz";
}


?>  