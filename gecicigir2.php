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


$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Geçici Bilgisi Girildi', '$sicil',  '$ofis')  ");





		
       
$sqlgec=mysql_query("INSERT INTO gecicigorev (id,sicil,ofis,unvan,bastarih,bittarih,status,harcirah,harcirahc,yolluk,yollukc,otel,otelc,pasaport,pasaportc,vize,vizec,saglik,saglikc,harc,harcc,bilet,biletc) VALUES (NULL,'$sicil','$ofis','$unvan','$bastarih','$bittarih','1','$harcirah','$harcirahc','$yolluk','$yollukc','$otel','$otelc','$pasaport','$pasaportc','$vize','$vizec','$saglik','$saglikc','$harc','$harcc','$bilet','$biletc')");




$t=date("Y");

$start2=strtotime($bastarih);
$end2=strtotime($bittarih);
$ara=($end2-$start2)/(60*60*24);



$ekle=mysql_query("INSERT INTO `gecicitoplam` (`id`, `sicil`, `yil`, `gun`) VALUES (NULL, '$sicil', '$t', '$ara')");




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


$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);

if(isset ($kayit))
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Geçici Görevli'
 where sicil=$sicil ");
 
 echo"Kaydiniz Basari ile girilmistir<br>
 <a href='$back.php?ofis=$ofis'>$ofis Sayfasina Gitmek Için Tiklayiniz</a>";
}
else
{
echo "Kayit basarisiz";
}




?>
