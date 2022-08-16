<?php
session_start();

include "baglanti.php";
include "header.php";

$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");
$kisi = $_SESSION['username'];
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #990000;
	font-weight: bold;
}
.style4 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<div align="center">
  <p align="center"><strong>Girece&#287;iniz Personel &#304;&ccedil;in &#304;lgili Birimdeki Bo&#351; Kadrolar<br />
  <br />
  </strong>&#304;lgili bo&#351; kadrounun en sa&#287;&#305;ndaki se&ccedil; alan&#305;n&#305; se&ccedil;erek en alttaki <span class="style1">devam</span> butonuna bas&#305;n&#305;z. <br />
  E&#287;er bo&#351; kadro g&ouml;r&uuml;nm&uuml;yorsa bu ofise bo&#351; kadro eklemeniz gerekiyor. <br />
  </p>
  <table width="70%" border="1" align="center" bordercolor="f4f4f4">
    <tr bgcolor="#9999FF">
      <td bgcolor="#9999FF"><span class="style4">&#304;d</span></td>
      <td bgcolor="#9999FF"><span class="style4">Ofis</span></td>
      <td><span class="style4">&Uuml;nvan</span></td>
      <td><span class="style4">Kadro</span></td>
      <td><span class="style4">Seç</span></td>
    </tr> 
 <form action="personelgir11.php" method="get">
  <?

$sec = mysql_query("select * from kadro where ofis='$ofis' and sicil=0 order by kadro,unvan ASC");

while($liste=mysql_fetch_array($sec))
{
?>
<tr bgcolor="#F5F5F5">
  <td><? echo"$liste[id]"; ?></td>
<td><? echo"$liste[ofis]"; ?></td>
<td><? echo"$liste[unvan]"; ?></td>
<td><? echo"$liste[kadro]"; ?></td>
<td><label>
  <input name="secim" type="radio" value="<? echo"$liste[id]"; ?>" />
</label></td>
</tr>



  <?
  $of=$liste[ofis];

}
?>
 
</table><input type="submit" name="Submit" value="Devam" />
 </form>
  <p>
