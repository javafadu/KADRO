<?

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");

$sql=("INSERT INTO takip (id,konu,icerik,up,psb,gy,ig,idari,karartar,ykno,sontar) VALUES (NULL,'$konu','$icerik','$up','$psb','$gy','$ig','$idari','$karartar','$ykno','$sontar')");


if(isset ($sql))
{
echo"Kaydiniz Basari ile Sisteme girilmistir.<br><a href='icerikgir.php'>Geri D�nmek I�in Tiklayiniz</a>";
}
else
{
echo "Kayit basarisiz";
}




?>