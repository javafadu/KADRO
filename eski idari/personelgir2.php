<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];


$unvan=$_POST['unvan'];
$ofis=$_POST['ofis'];
$kadro=$_POST['kadro'];
$kid=$_POST['kid'];

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','$sicil Personel Bilgisi Girildi', '$unvan',  '$ofis')  ");

$result = mysql_query("Select * from personel",$con);
		
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
$n++;
		
		
		if ($sicil == $row['sicil']) {$_GET['sicil'] = "";
		
		echo"<font size=5 color='red'>Bu Kayit Daha Önce Girilmis</b><br> <a href='indexr.php'>ANASAYFA</a>";
	}
		
		
		
		}
		echo "<br>Personel Sisteme Girilmistir<br><br>
		
		Sicil : $sicil<br>
		Isim : $isim<br>
		Ofis : $ofis<br>
		Kadro: $kadro<br>
		Unvan: $unvan<br>";
		
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
		
		
		
		
		echo"<br><a href='$back.php?ofis=$ofis'><b>$ofis Sayfasina Gitmek Için Tiklayiniz</b> </a>";
		
        if(!isset($_GET['sicil']))
        { 

$sql=mysql_query("INSERT INTO personel (sicil,isim,bastarihi,tahsil,hareket,kidemucret,netucret,para,bilgi) VALUES ($sicil,'$isim','$bastarihi','$tahsil','$hareket','$kidemucret','$netucret','$para','$bilgi')");
 

$sql1=mysql_query("INSERT INTO personelbilgi (sicil,dogtarih,okul,cinsiyet,tckimlik,sskno,adres,anne,baba,dogumyer,evtel,ceptel,istel,email) VALUES ($sicil,'$dogtar','$tahsil','$cinsiyet','$tckimlik','$sskno','$adres','$anne','$baba','$dogyer','$evtel','$ceptel','$istel','$email')");
 


$sql2 = mysql_query("Update kadro SET  
  sicil = '$sicil',
  ofis ='$ofis',
  
  unvan ='$unvan',
  kadro = '$kadro',
  durum = 'Yok',
  mahmer ='$mahmer',
  sozpart ='$sozpart',
  sozbas='$sozbas',
  sozbit='$sozbit',
 yer='$yer'
  
  
where id='$kid' ");

}


$kayit=mysql_query($sql);
$kayit2=mysql_query($sql2);
$kayit1=mysql_query($sql1);

if(isset ($kayit) AND isset ($kayit2) AND isset ($kayit1))
{

}
else
{
echo "Kayit basarisiz";
}




?>
