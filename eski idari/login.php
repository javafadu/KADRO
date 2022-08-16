<?php




session_start();
include("config.php");

$timestamp = time();
$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");

$msg = "";

if (isset($_POST['Submit']))
{
	
	$username = $_POST['username'];
	$password = md5($_POST[password]);
	
	$result = mysql_query("Select * From login_table where user_name='$username'",$con);
	
	if(mysql_num_rows($result)>0)
	{
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		if($password == $row["user_pass"])
		{
			
			$_SESSION['loginok'] = "ok";
			$_SESSION['username'] = $row["user_name"];
			$_SESSION['password'] = "password";
			$_SESSION['userofis'] = $row["userofis"];
			$_SESSION['level'] = $row["user_level"];
			
			
			header("Location: index.php");

		}
		else
		{
			$msg = "Password incorrect";
		}
	}
	else
	{
		$msg = "Username incorrect";
    }

}

session_register("username", "user_level","userofis");

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

<body bgcolor="#FFFFFF" background="images/bg.gif" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><a name="top"></a>


<!-- ~~~ [content >>>] ~~~ -->
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
<td align="center" class="color4">
<table border="0" cellspacing="4" cellpadding="0">
<form name="form1" method="post" action="">

<tr>
<td>Username</td>
<td><input name="username" type="text" size="20" id="username"></td>
</tr>
<tr>
<td>Password</td>
<td><input name="password" type="password" size="20" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
</tr>
</form>
</table>
</td>
</tr>
<tr>
<td height="29" class="color2">&nbsp;&nbsp;&nbsp;<img src="images/icon-patharrow.gif" alt="&gt;" width="5" height="7" hspace="2"> <a href="forgot.php"> Sifremi unuttum? </a> </td>
</tr>



</table></td>
</tr>
</table>


</body>
</html>
