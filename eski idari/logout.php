<?php


session_start();
if ($submit == "Evet") {
			
			$_SESSION['loginok'] = "logout"; 
			$_SESSION['level'] = "0"; 
					header("Location: index.php"); 
} else if ($submit == "Hayir"){   
header("Location: index.php");
} 
?>
<!-- LOG OUT FORM -->
<html>
<head>
<title>Logout</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #993300;
	font-weight: bold;
}
-->
</style>
<link href="css/all.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="form1" method="post" action="">
   <table class="table" width="35%" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#000000">
    <tr bgcolor="#000000"> 
      <td colspan="2"><div align="center" class="style1">&Ccedil;IKI&#350;        </div>
      <div align="center"><font color="#FC9801" size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong> </strong></font></div></td>
    </tr>
    <tr> 
      <td><div align="center">&Ccedil;&#305;kmak &#304;stedi&#287;inizden Emin misiniz?<br>
          <br>
        <input type="submit" name="submit" value="Evet">
        &nbsp;
		<input type="submit" name="submit" value="Hayir">
      </div></td>
    </tr>
  </table>
</form>
<p align="center">Pazarlama Sat&#305;&#351; Ba&#351;kanl&#305;&#287;&#305; - Destek M&uuml;d&uuml;rl&uuml;&#287;&uuml; <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
</font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
</font> T&uuml;m sorular&#305;n&#305;z i&ccedil;in <strong> </strong> <a href="mailto:bilgi@destek.com">bilgi@destek.com</a></p>
<p>&nbsp; </p>
</body>
</html>
