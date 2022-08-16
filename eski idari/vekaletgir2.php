<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih2 = date("Y-m-d");
$kisi = $_SESSION['username'];

$unvan=$_POST['unvan'];




$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,baskan,konu,konu2,ofis) VALUES (NULL, '$tarih2', '$saat', '$kisi','$baskan','Vekalet Bilgisi Girildi', '$sicil',  '$ofis')  ");




$result = mysql_query("Select * from vekalet",$con);
		
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
$n++;
		
		
		if ($sicil == $row['sicil']) {$_GET['sicil'] = "";
		
		echo"<font size=5 color='red'>Bu Kayit Daha Önce Girilmis</b><br>Geri Dönmek Için <a href='kadrogir.php'>TIKLAYIN</a>";
	}
		
		
		
		}
		echo "<br><a href='vekaletgir.php'>Yeni Vekalet Görevi Girmek Için Tiklayin </a>";
		
        if(!isset($_GET['sicil']))
        { 

$sql=("INSERT INTO vekalet (sicil,ofis,bolge,unvan,kadro,butce,baskan,tarih) VALUES ('$sicil','$ofis','$bolge','$unvan','$kadro','$butce','$baskan','$tarih')");

}




$kayit=mysql_query($sql);




if(isset ($kayit) )
{
$durumdegis2 = mysql_query("Update kadro SET  
  durum = 'Vekil'
 where sicil=$sicil ");
}
else
{
echo "Kayit basarisiz";
}




?>
