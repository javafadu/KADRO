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

<div align="center">
  <p><strong>Ofisteki Bo&#351; Kadrolar  </strong><br />
  </p>
  <table width="70%" border="1" bordercolor="f4f4f4">
    <tr>
      <td>&#304;d</td>
      <td>Ofis</td>
      <td>Ba&#351;kanl&#305;k</td>
      <td>M&uuml;d&uuml;rl&uuml;k</td>
      <td>&Uuml;nvan</td>
      <td>Kadro</td>
      <td>Seç</td>
    </tr> 
 <form action="personel2tasi3.php" method="get">
  <?

$sec = mysql_query("select * from kadro where ofis='$ofis' and sicil=0 ");

while($liste=mysql_fetch_array($sec))
{
?>
<tr bgcolor="#FFFFCC">
  <td><? echo"$liste[id]"; ?></td>
<td><? echo"$liste[ofis]"; ?></td>
<td><? echo"$liste[baskan]"; ?></td>
<td><? echo"$liste[bolge]"; ?></td>
<td><? echo"$liste[unvan]"; ?></td>
<td><? echo"$liste[kadro]"; ?></td>
<td><label>
  <input name="secim" type="radio" value="<? echo"$liste[id]"; ?>" />
</label></td>
</tr>
<p>


  <?
  $of=$liste[ofis];

}
?>
  <input name="sicil" type="hidden" value="<? echo"$sicil"; ?> "/>
  <input name="ofis" type="hidden" value="<? echo"$of"; ?> "/>
 
  
 
 </table><input type="submit" name="Submit" value="Tasi" />
 </form>
  <p>
    