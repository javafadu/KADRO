<?
session_start();



include "level1_check.php";
require "header.php";
?>
<center>

<div align="center"><br /><br />
  <?php
echo "Isminiz :".$_SESSION['username']."<br>   ";?>
  <?php
echo "Yetki seviyeniz :".$_SESSION['level']."<br>";?>
  <?php
echo "Yetki Ofisiniz :".$_SESSION['userofis']."<br>";?>
  <?php
echo "Yetki Ofisiniz :".$_SESSION['user_email']."<br>";?>
  <?php
echo "Yetki Ofisiniz :".$_SESSION['user_ip']."";?>
</div>
