<?php
session_start();
include "baglanti.php";


$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];




$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih','$saat','$kisi','Para Degerleri Güncellendi', '$usd',  'Merkez')  ");

$d = $dolar;

$result = mysql_query("update paradeger set
 
usd = '$usd',
bgn = '$bgn',
cny = '$cny',
hrk = '$hrk', 
csk = '$csk',
dkk = '$dkk',
hkd = '$hkd',
huf = '$huf', 
irr = '$irr', 
jpy = '$jpy',
jod = '$jod', 
kwd = '$kwd', 
lyd = '$lyd', 
nok = '$nok', 
pkr = '$pkr', 
sar = '$sar', 
sgd = '$sgd', 
sek = '$sek', 
chf = '$chf', 
syp = '$syp', 
thb = '$thb', 
aed = '$aed',
tnd = '$tnd', 
egp = '$egp',
gbp = '$gbp', 
eur = '$eur', 
pln = '$pln', 
dzd = '$dzd', 
bhd = '$bhd',
uah = '$uah',
qar = '$qar',
czk = '$czk',
sdd = '$sdd',
aud = '$aud',
krw = '$krw',
inr = '$inr',
yer = '$yer',
omr = '$omr',
rub = '$rub' 

where id=0 ");


if(isset ($result) )
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Bilgileriniz Düzenlenmistir.</b></font><br> ......<br><a href='paragir.php'>Para Degerleri Güncelleme Sayfasi</a><br><a href='index.php'>Anasayfa</a>";
echo "<br>$id";
}
else
{
echo "Kayit basarisiz";

}