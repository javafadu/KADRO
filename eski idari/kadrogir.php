<?
session_start();
include "level2_check.php";

require "header.php";
?>

<style type="text/css">
<!--
.style1 {color: #999999}
.style2 {font-size: 10px}
.style10 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style12 {font-size: 9px}
.style15 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 9px; color: #000000; }
.style16 {color: #666666}
.style21 {font-family: Verdana}
-->
</style>
<link href="css/all.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style25 {color: #575252}
.style26 {color: #993300}
-->
</style>

<body>






<form name="form1" method="post" action="kadrogir2.php">
  <div align="center" class="style26"><strong>BO&#350; KADRO OLU&#350;TURMAK </strong>
      <br>
    <br>
  </div>
  <table border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="ffffdd" bgcolor="#FFFFFC">
    <tr bgcolor="#EFEFEF" class="title2_old">
      <td bgcolor="#EFEFEF" class="data style12 style21 style16">Ofis Kodu </td>
      <td bgcolor="#FFFFE6"><span class="style15">
        <?
		echo "<select name=\"ofis\">";
        echo "<option value=\"\"></option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
        <br>
        <a href="hatedit.php" target="_blank">Ofis Kodlar&#305;&#305;n&#305; G&ouml;rmek &#304;&ccedil;in T&#305;klay&#305;n (Yeni Sayfada A&ccedil;&#305;l&#305;r) </a></span></td>
      <td bgcolor="#FFFFFC" class="comment style1 style2">&nbsp;</td>
    </tr>
    <tr class="title2_old">
      <td bgcolor="#EFEFEF" class="data style12 style21 style16">&Uuml;nvan&#305;</td>
      <td bgcolor="#FFFFE6"><span class="style15">
        <label>
        <?
		echo "<select name=\"unvan\">";
        echo "<option value=\"\"></option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?>
        <br>
        </label>
        <a href="unvanedit.php">Girmek &#304;stedi&#287;iniz &Uuml;nvan Yoksa Buradan Girebilirsiniz </a></span></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr class="title2_old">
      <td bgcolor="#EFEFEF" class="data style12 style21 style16">Kadro</td>
      <td bgcolor="#FFFFE6"><span class="style15">
        <label>
        <input name="kadro" type="text" id="kadro">
        </label>
        <span class="style25">yurt d&#305;&#351;&#305; personel i&ccedil;in D-1,D-2,D-3,D-4</span> </span></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style10 style12 style16">&nbsp;</td>
      <td><span class="style15">
        <label>
      
		<input type="submit" name="Submit" value="Kaydet" />
        </label>
      </span></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
