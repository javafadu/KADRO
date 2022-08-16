<?php

include "config.php";

if(!isset($_SESSION['level'])){
echo"Bu sayfayi gormeye yetkilendirilmemissiniz ";		
}
if ($_SESSION['level'] != "2" and $_SESSION['level'] != "3" and $_SESSION['level'] != "4") {

echo"<center>Bu sayfayi görmeye yetkilendirilmemissiniz<br> <a href='login.php'>Yetkili Kullanici Girisi </a>";
exit();
}
?>