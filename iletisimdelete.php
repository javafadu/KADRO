<?php
session_start();

include "baglanti.php";
include "header.php";

		
$sql=mysql_query("DELETE FROM iletisim where id='$onay'");



if(isset ($sql))
{
echo "<br><center><font face=Verdana size=5 color=red><b>Kayit Veritabanindan Basari ile Silinmistir<br> ......</b></font><br><br> <a href='iletisimler.php'>Geri</a>";
}
else
{
echo "Islem basarisiz";
}


?>  