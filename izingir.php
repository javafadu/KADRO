<?
session_start();
include "level2_check.php";

require "header.php";
?>

<link rel="stylesheet" type="text/css" href="takvim/epoch_styles.css" />
<script type="text/javascript" src="takvim/epoch_classes.js"></script>
<script type="text/javascript">
/*You can also place this code in a separate file and link to it like epoch_classes.js*/
	var bas_cal,dp_cal,ms_cal;      
window.onload = function () {
	
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container'));
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container2'));
	ms_cal  = new Epoch('epoch_multi','flat',document.getElementById('multi_container'),true);
};
</script>


<style type="text/css">
<!--
.style1 {color: #999999}
.style2 {font-size: 10px}
.style3 {font-size: 12px}
-->
</style>
<link href="css/all.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {color: #666666}
.style5 {
	color: #990000;
	font-weight: bold;
}
-->
</style>
<body>






<form name="form1" method="post" action="izingir2.php">
<div align="center"><span class="style5">&#304;Z&#304;N B&#304;LG&#304;S&#304; G&#304;RME B&Ouml;L&Uuml;M&Uuml; </span><br>
</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
    <tr bgcolor="#EFEFEF">
      <td bgcolor="#EFEFEF" class="data style3 style4">Sicil No </td>
      <td bgcolor="#FFFFE6"><input name="sicil" type="text" id="sicil" value="<? echo"$id"; ?>"></td>
      <td valign="middle" bgcolor="80B0D8" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style3 style4">&#304;zin T&uuml;r&uuml; </td>
      <td bgcolor="#FFFFE6"><label>
        <select name="izintur" id="izintur">
          <option value="--" selected>Se&ccedil;iniz</option>
          <option value="Uzun &#304;zinli">Uzun &#304;zinli</option>
          <option value="K&#305;sa &#304;zinli">K&#305;sa &#304;zinli</option>
        </select>
      </label></td>
      <td valign="middle" bgcolor="80B0D8" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style3 style4">&#304;zin Nedeni </td>
      <td bgcolor="#FFFFE6"><label>
        <select name="izinneden" id="izinneden">
          <option value="--" selected>Se&ccedil;iniz</option>
          <option value="Askerlik">Askerlik</option>
          <option value="Do&#287;um">Do&#287;um</option>
          <option value="Hastal&#305;k">Hastal&#305;k</option>
          <option value="Di&#287;er">Di&#287;er</option>
        </select>
      </label></td>
      <td valign="middle" bgcolor="80B0D8" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style3 style4">&#304;zin Balama Tarihi </td>
      <td bgcolor="#FFFFE6"><div id="basic_container"></div>
          <input name="izinbas" type="text" id="popup_container" /></td>
      <td valign="middle" bgcolor="80B0D8" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style3 style4">&#304;zin Biti&#351; Tarihi </td>
      <td bgcolor="#FFFFE6"><div id="basic_container"></div>
          <input name="izinbit" type="text" id="popup_container2" /></td>
      <td valign="middle" bgcolor="80B0D8" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style3 style4">&nbsp;</td>
      <td bgcolor="#FFFFE6">&nbsp;</td>
      <td valign="middle" bgcolor="80B0D8" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style3 style4">&nbsp;</td>
      <td bgcolor="#FFFFE6"><span class="style2">
        <label>
        <input type="submit" name="Submit" value="Kaydet" />
        </label>
        <span class="comment">
        <input name="Submit2" type="reset" value="Temizle" />
      </span></span></td>
      <td valign="middle" bgcolor="80B0D8" class="comment">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
