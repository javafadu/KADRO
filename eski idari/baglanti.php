<?php
  $server = "localhost";
  $hesapadi = "root";
  $sifreniz = "";
  $veritabaniadi = "kadroyedek";
  $con = mysql_connect($server, $hesapadi, $sifreniz);
  mysql_select_db($veritabaniadi) or die("Veritabanýna baglanamadi");

 if(mysql_error())
{
echo "Hata olustu:".mysql_error();
}
else
{
echo "";
echo "<br>";
}

?> 