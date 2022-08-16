<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];

$ofis=$_POST['ofis'];
$unvan=$_POST['unvan'];



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



$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Bos Kadro Bilgisi Düzenlendi', '$unvan',  '$ofis')  ");





$result2 = mysql_query("Update kadro SET  
  
  ofis ='$ofis',
  unvan ='$unvan',
  kadro = '$kadro'
  

  
where id='$id' ");
 




if(isset ($result2)  )
{
echo "<br><center><b>$ofis - $unvan - $kadro <br><font face=Verdana size=2 color=red>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='$back.php?ofis=$ofis'>$ofis Sayfasina Geri Dön</a>";

}
else
{
echo "Kayit basarisiz";

}




?>  