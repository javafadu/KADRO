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
<body>






<form name="form1" method="post" action="iletisim2.php">
  <table width="50%" border="0" align="center" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style3 style1"><strong>&#304;STEK-&Ouml;NER&#304;-G&Ouml;R&Uuml;&#350; B&#304;LD&#304;R&#304;M&#304; <br>
      </strong></span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td width="34%" class="data style1 style3">Kime</td>
      <td colspan="2"><label>
        <select name="kime" size="2" id="kime">
          <option value="Halil &#304;brahim Polat">Halil &#304;brahim Polat</option>
          <option value="Feridun &Ouml;z&ccedil;elik">Feridun &Ouml;z&ccedil;elik</option>
        </select>
      </label></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style1 style3">Konu</td>
      <td colspan="2"><label>
        <select name="konu" id="konu">
          <option value="--" selected>Se&ccedil;iniz </option>
          <option value="&#304;dari &#304;&#351;ler M&uuml;d&uuml;rl&uuml;&#287;&uuml; &#304;&#351;leri">&#304;dari &#304;&#351;ler M&uuml;d&uuml;rl&uuml;&#287;&uuml; &#304;&#351;leri</option>
          <option value="Destek M&uuml;d&uuml;rl&uuml;&#287;&uuml; &#304;&#351;leri">Destek M&uuml;d&uuml;rl&uuml;&#287;&uuml; &#304;&#351;leri</option>
          <option value="&#304;dari &#304;&#351;ler Bilgi Sistemi">&#304;dari &#304;&#351;ler Bilgi Sistemi</option>
          <option value="Di&#287;er">Di&#287;er</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td class="data style1 style3">Bilgi</td>
      <td width="38%"><label>
        <textarea name="icerik" cols="29" rows="5" id="icerik"></textarea>
      </label></td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style1 style3">&nbsp;</td>
      <td><span class="style2">
        <label>
      
		<input type="submit" name="Submit" value="G&Ouml;NDER" />
        </label>
        <span class="comment">
        <input name="Submit2" type="reset" value="Temizle" />
      </span></span></td>
      <td class="comment">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
