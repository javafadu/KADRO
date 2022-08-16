<?php
session_start();

include "baglanti.php";
include "header.php";
include "includes/datediff2.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
$unvan=$_POST['unvan'];
$tp=0;

$kontrol = mysql_query("select * from gecicigorev where sicil='$sicil' ");

while($lsk=mysql_fetch_array($kontrol))
{
$bu = $lsk['bittarih'];
}

if($bastarih<=$bu)
{
echo"Bu personel bu tarihler arasinda zaten geçici görevli görünüyor<br>Tarihleri kontrol etmek için <a href='gecicigir.php'>GERI gitmek için tiklayin</a>";
}
else
{
$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$baskan','Izin Bilgisi Girildi', '$sicil',  '')  ");





		
        if(!isset($_GET['sicil']))
        { 

$sql=mysql_query("INSERT INTO gecicigorev (id,sicil,ofis,bolge,unvan,baskan,bastarih,bittarih,status,harcirah,harcirahc,yolluk,yollukc,otel,otelc,pasaport,pasaportc,vize,vizec,saglik,saglikc,harc,harcc,bilet,biletc) VALUES (NULL,'$sicil','$ofis','$bolge','$unvan','$baskan','$bastarih','$bittarih','1','$harcirah','$harcirahc','$yolluk','$yollukc','$otel','$otelc','$pasaport','$pasaportc','$vize','$vizec','$saglik','$saglikc','$harc','$harcc','$bilet','$biletc')");




$t=date("Y");

$start2=strtotime($bastarih);
$end2=strtotime($bittarih);
$ara=($end2-$start2)/(60*60*24);



$ekle=mysql_query("INSERT INTO `gecicitoplam` (`id`, `sicil`, `yil`, `gun`) VALUES (NULL, '$sicil', '$t', '$ara')");

}

}



$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit))
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Geçici Görevli'
 where sicil=$sicil ");
}
else
{
echo "Kayit basarisiz";
}




?>
