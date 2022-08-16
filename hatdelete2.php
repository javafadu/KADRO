<?
session_start();

include "level2_check.php";
require "header2.php";

?>

<?
include "baglanti.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];


$key=mysql_query("select * from ofislist where ofisid='$onay'");

while ($liste=mysql_fetch_array($key))
{
$ofis_sehir=$liste[ofis_sehir];
$sehir_kod=$liste[sehir_kod];

}

$deg=mysql_query("INSERT INTO degisiklikler (id,tarih,saat,kisi,konu,konu2,ofis) VALUES (NULL, '$tarih', '$saat', '$kisi','Hat Bilgisi Silindi', '$ofis_sehir',  '$sehir_kod')  ");

		
$sql=mysql_query("DELETE FROM ofislist where ofisid='$onay'");
$sql1=mysql_query("DELETE from hatlar where kod='$sehir_kod' ");



if(isset ($sql))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Veritabanindan Basari ile Silinmistir<br> ......</b></font><br><br> <a href='hatedit.php'>Hatlar Sayfasi</a>";
}
else
{
echo "Islem basarisiz";
}


?>  