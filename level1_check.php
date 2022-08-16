<?php





include("config.php");


?>

<html>
<head>
<title>IDARI ISLER MÜDÜRLÜGÜ - KADRO BILGI SISTEMI</title>
<meta http-equiv="Pragma" content="cache">
<meta name="keywords" content="">
<meta name="keyphrase" content="">
<meta name="description" content="">
<meta name="title" content="">
<meta name="robots" content="All">
<meta name="rating" content="General">
<meta name="generator" content="thy.com">
<meta name="copyright" content="©2006 F.E.O / www.thy.com">
<link rel="shortcut icon" href="favicon.ico">
<link href="css/common.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#f4f4f4"  text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><a name="top"></a>



<? 
if(!isset($_SESSION['level'])){
?>
<table width="386" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td class="color1"><table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td colspan="2" class="color2"><table width="100%" border="0" cellspacing="5" cellpadding="0">
<tr>
<td><table border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center">
<!-- ~~~ [logotype here >>>] ~~~ -->
<a href="#" title="homepage link"><img src="images/destek/thylogo.jpg" width="201" height="42"></a>
<!-- ~~~ [<<< logotype here] ~~~ --></td>
<td width="1" height="30" class="color1"><img src="images/1x1.gif"></td>
</tr>
</table></td>
<td align="right">


<span class="smalltxt">Select language</span>
<select name="select" style="vertical-align:middle;">
  <option value="english" selected>english</option>
  <option value="turkish">turkish</option>
</select>


</td>
</tr>
</table></td>
</tr>


<tr>
<td width="170" rowspan="2" align="center" class="color2"><img src="images/destek/loginsol.jpg" width="110" height="157"></td>
<td align="center" class="color4">&nbsp;</td>
</tr>
<tr>
<td height="29" class="color2">

<?
echo"<b><table width='70%' align='center' ><tr bgcolor='white' align='center'><td>TICARI GENEL MÜDÜR YARDIMCILIGI</b><br><font color='red'>Idari Isler Bilgi Sistemi</font><br></td></tr> ";		
}
if ($_SESSION['level'] != "1" and $_SESSION['level'] != "2" and $_SESSION['level'] != "3" and $_SESSION['level'] != "4") {
echo"<tr bgcolor='white'><td><center>Bilgi Sistemine Girebilmek için<br><br>  <a href='login.php'><font color='blue'>>>KULLANICI GIRISI<<</font></a><br><br> yapmaniz gerekmektedir.</td></tr></table>";

exit();} 
?></td>
</tr>


</table></td>
</tr>
</table>


</body>
</html>
