<?
session_start();
include "level4_check.php";

?>


<?php




include("config.php");
$username = "";
$userpass = "";
$userlevel = "";
$userofis ="";
$useremail ="";

 
if(isset($_POST['Submit']))
{
if ($_POST['username'] == "" or $_POST['userpass'] == "" or $_POST['userlevel'] == ""or $_POST['useremail'] == "") {

$msg3 = true;
$pass = "no"; }
if (!$pass == "no") {
        $username = $_POST['username'];
        $userpass = md5($_POST[userpass]);
        $userlevel = $_POST['userlevel'];
        $userofis = $_POST['userofis'];
	    $useremail = $_POST['useremail'];
		$dt = date("d-m-Y");
		$gra = getenv("REMOTE_ADDR");
		
		// CHECK FOR DUPLICATE
		$result = mysql_query("Select * from login_table",$con);
		
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
$n++;
		
		
		if ($username == $row['user_name']) {$_GET['userid'] = "";
		
		header("Location: adduser.php?pass=no&msg2=true");}
		if ($useremail == $row['user_email']) {$_GET['userid'] = "";
		
		header("Location: adduser.php?pass=no&msg2b=true");}
		
		
		}
		
		
        if(!isset($_GET['userid']))
        { 
                $result = mysql_query("Insert into login_table(user_name,user_pass,user_email,user_level,date,user_ip,userofis) values('$username','$userpass','$useremail','$userlevel','$dt','$gra','$userofis')");
                $msg2 = "";
				$msg3 = ""; 
				$msg = "<font size='5' color='red'>Kullanici Basari Ile EKlendi</font><br> &nbsp; <a href='login.php'>LOGIN HERE</a>";
				include "send.php";
        }
        
}}
?>

<?
require "header.php";
?>


<form name="form1" method="post" action="adduser.php">
 <h3 align="center">Yeni Kullan&#305;c&#305; Ekle </h3>
  <table width="40%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td width="20%"><div align="right"><strong>User Name:</strong></div></td>
      <td width="40%"><input name="username" type="text" id="username" value="" maxlength="15"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Password:</strong></div></td>
      <td><input name="userpass" type="password" id="userpass" value="" maxlength="15"></td>
    </tr>
<tr>
      <td><div align="right"><strong>Userlevel:</strong></div></td>
      <td><label>
        <select name="userlevel">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </label></td>
    </tr>
		 <tr>
      <td><div align="right"><strong>Kullanici Ofis:</strong></div></td>
      <td><input name="userofis" type="text" id="userofis" value="" maxlength"25"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Email Address:</strong></div></td>
      <td><input name="useremail" type="text" id="useremail" value="" maxlength"25"></td>
    </tr>
        <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Add User">
        <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
  </table>
  <br>
  <table width="60%" border="1" align="center" bgcolor="#FFFFFF">
    <tr>
      <center><? echo $msg; ?>
	  <td colspan="2">Kullan&#305;c&#305; Seviyeleri: </td>
    </tr>
    <tr>
      <td width="33">1</td>
      <td>En d&uuml;&#351;&uuml;k seviye: ofise ait bilgileri girebilir, girdigi bilgileri g&ouml;rebilir, talep formu dolurabilir, g&ouml;nderdi&#287;i talepleri g&ouml;rebilir </td>
    </tr>
    <tr>
      <td>2</td>
      <td>B&ouml;lge m&uuml;d&uuml;r&uuml; seviyesi: Kendisine ba&#287;l&#305; b&ouml;lgelerdeki ofislerin t&uuml;m bilgilerini, ofislerin yapt&#305;klar&#305; talepleri g&ouml;rebilir, de&#287;i&#351;iklik yapamaz, veri giri&#351;i yapamaz. </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Uzman seviyesi: T&uuml;m ofis bilgilerini ve ofislerden gelen talepleri g&ouml;rebilir, </td>
    </tr>
    <tr>
      <td>4</td>
      <td>En &uuml;st seviye: t&uuml;m bilgilere ula&#351;abilir, de&#287;i&#351;iklik yapabilir, talep formlar&#305;n&#305; onaylayabilir. </td>
    </tr>
  </table>
  <p class = "smallErrorText" align="center">
  <?php
   if ($msg2) {$msg = "The user name you have choosen is already in use, sorry, please choose another";}
  if ($msg2b) {$msg = "The email address you have choosen is already in use, sorry, please choose another";} 
  if ($msg3) {$msg = "Error, you must fill in all fields";}
  
  
   ?>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>