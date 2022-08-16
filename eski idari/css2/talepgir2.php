<?
session_start();
include "level1_check.php";

?>

<table width="60%" align="center">
<tr>
  <td><strong>Ara&ccedil;</strong></td>
  <td><strong>Bilgi</strong></td>
</tr>
<?
include "baglanti.php";

$ofis=$_SESSION['userofis'];

$sql = mysql_query("select * from araclar where arac_ofis='$ofis' ");



while ($liste=mysql_fetch_array($sql))
{
?>
<tr><td>Araç id:</td><td><? echo "$liste[0] <br>"; ?></td></tr>
<tr><td>Aracin Bagli oldugu Ofis:</td><td><? echo "$liste[1]<br>" ; ?></td></tr>
<tr> <td>Aracin Mülkiyeti:</td>  <td><? echo "$liste[2]"; ?></td></tr>
<tr> <td>Aracin Markasi</td>  <td><? echo "$liste[3]"; ?></td></tr>
<tr><td>Aracin Modeli</td>  <td><? echo "$liste[4]"; ?></td></tr>
<tr><td>Aracin yili</td>  <td><? echo "$liste[5]"; ?></td></tr>
<tr><td>Kime tahsis edildigi</td>  <td><? echo "$liste[6]"; ?></td></tr>
<tr><td>Ara&ccedil;</td><td><? echo "$liste[7]"; ?></td></tr><tr>
  <td>Ara&ccedil;</td> <td><? echo "$liste[8]"; ?></td></tr><tr>
  <td>Ara&ccedil;</td><td><? echo "$liste[9]"; ?></td></tr><tr>
  <td>Ara&ccedil;</td><td><? echo "$liste[10]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[11]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[12]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[13]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[14]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[15]"; ?></td></tr>
<tr><td></td>  <td><? echo "$liste[16]"; ?></td></tr>
<tr><td></td> <td><? echo "$liste[17]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[18]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[19]"; ?></td></tr>
<tr><td></td> <td><? echo "$liste[20]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[21]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[22]"; ?></td></tr>
<tr><td></td> <td><? echo "$liste[23]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[24]"; ?></td></tr>
<tr><td></td><td><? echo "$liste[25]"; ?></td></tr>

<?
}
?>
</table>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OF&#304;S BILGI GIRIS</title>
<link href="../css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(../images/destek/bg.gif);
}
.style2 {color: #000000}
.style3 {color: #FF0000}
-->
</style></head>

<body>
<form name="form1" method="post" action="../aractalep2.php?radiobuton">
  <table width="59%" border="1" align="center" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2">AD&#304; ARA&Ccedil; K&#304;RALAMA FORMU  </span></td>
    </tr>
    <tr> 
      <td width="34%" class="data style2">&nbsp;</td>
      <td width="38%"><span class="style2">
        <label></label>
        <label></label>
      </span></td>
      <td width="28%" class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">Arac id: </td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">Arac Marka </td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">Arac Model </td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="comment style2">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2">&nbsp;</td>
      <td><span class="style2">
        <label>
        <input type="submit" name="Submit" value="Submit" />
        </label>
      </span></td>
      <td class="comment">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
