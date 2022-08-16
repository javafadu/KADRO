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
	
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container3'));
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
.style4 {color: #990000}
.style5 {color: #666666}
-->
</style>
<body>






<form name="form1" method="post" action="vekaletgir2.php">
<div align="center" class="notallowed style4"><strong>VEKALET G&Ouml;REV B&#304;LG&#304;S&#304; G&#304;R&#304;&#350; B&Ouml;L&Uuml;M&Uuml; <br>
</strong></div>
<table border="1" width ="40%" align="center" cellpadding="0" cellspacing="0" bordercolor="f4f4f4" bgcolor="#EFEFEF">
    <tr bgcolor="#EFEFEF"> 
      <td bgcolor="#EFEFEF" class="data style3 style5">Sicil No </td>
      <td bgcolor="#FFFFE6"><input name="sicil" type="text" id="sicil" value="<? echo"$id"; ?>"></td>
      
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="comment style1 style2"><span class="data style3 style5">Vekalet Ofisi </span></td>
      <td bgcolor="#FFFFE6" class="comment style1 style2"><?
		echo "<select name=\"ofis\">";
        echo "<option value=\"\"></option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
          <br>
        <a href="hatedit.php" target="_blank">Ofis Kodlar&#305;&#305;n&#305; G&ouml;rmek &#304;&ccedil;in T&#305;klay&#305;n </a></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="comment style2 style1"><span class="data style3 style5">Vekalet &Uuml;nvan&#305;</span></td>
      <td bgcolor="#FFFFE6" class="comment style2 style1"><?
		echo "<select name=\"unvan\">";
        echo "<option value=\"\"></option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td bgcolor="#EFEFEF" class="data style3 style5">Vekalet Ba&#351;l. Tarih.</td>
      <td bgcolor="#FFFFE6"><div id="div"></div>
      <input name="tarih" type="text" id="popup_container3" />        <label></label></td>
    </tr>
    
    <tr>
      <td class="data style3 style5">Vekalet g&ouml;revinin yap&#305;laca&#287;&#305; ofisin &uuml;st&uuml;ndeki sar&#305; renkteki bilgi panelinde g&ouml;r&uuml;necektir. </td>
      <td bgcolor="#FFFFE6"><label>
        <textarea name="bilgi" rows="5" id="bilgi"></textarea>
      </label></td>
    </tr>
    <tr>
      <td class="data style3 style5">&nbsp;</td>
      <td><span class="style2">
        <label></label>
        <input type="submit" name="Submit" value="Kaydet" />
        <input name="Submit2" type="reset" value="Temizle" />
      </span></td>
      <td class="comment">&nbsp;</td>
      <td class="comment"><div align="right"></div></td>
    </tr>
  </table>
</form>
</body>
</html>
