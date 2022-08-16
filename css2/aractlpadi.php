<?
session_start();
include "level1_check.php";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OF&#304;S BILGI GIRIS</title>
<link href="css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(images/destek/bg.gif);
}
.style2 {color: #000000}
.style3 {color: #FF0000}
-->
</style></head>

<body>
<form name="form1" method="post" action="aractalep2.php?radiobuton">
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
      <td class="data style2"><label>
        <input name="radiobutton" type="radio" value="ek" />
      Ek Ara&ccedil; Talebi </label></td>
      <td><span class="style2">
        <label>
        <input name="radiobutton" type="radio" value="yeni" />
        </label>
      Ara&ccedil; De&#287;i&#351;im Talebi </span></td>
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
