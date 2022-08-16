<?
session_start();
include "level2_check.php";
include "baglanti.php";
?>


<?
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
<?

$sql = mysql_query("select * from vekalet where id='$id' ");
$sicil="$id";



while ($liste4=mysql_fetch_array($sql))
{




?>

<style type="text/css">
<!--
.style1 {color: #666666}
.style2 {color: #999999}
-->
</style>
<body>
<form name="form1" method="post" action="vekaletgir2edit.php?id=<? echo "$liste4[id]"; ?>">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">PERSONEL B&#304;LG&#304;LER&#304;N&#304; D&Uuml;ZENLEME SAYFASI </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style2 style1">Personel Sicil </td>
      <td><label>
        <input name="sicil" type="text" id="sicil" value="<? echo "$liste4[sicil]"; ?>" size="8" maxlength="8">
        <input name="id" type="hidden" id="id" value="<? echo "$liste4[id]"; ?>">
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style2 style1">Ofis</td>
      <td width="38%"><label><?
		echo "<select name=\"ofis\">";
        echo "<option value=\"$liste4[ofis]\">$liste4[ofis]</option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
      </label></td>
      <td width="28%" class="comment style2 style1"><a href="ofiskodlari.html" target="blank"><font size="1">Ofis Kodlarini G&ouml;rmek</font></a>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">Vekalet Ba&#351;l. Tar. </td>
      <td><input name="tarih" type="text" id="popup_container3" value="<? echo "$liste4[tarih]"; ?>"></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">&Uuml;nvan&#305;</td>
      <td><label><span class="comment style2 style1">
      <?
		echo "<select name=\"unvan\">";
        echo "<option value=\"$liste4[unvan]\">$liste4[unvan]</option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?>
      </span></label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">Durum</td>
      <td><label>
        <select name="durum" id="durum">
          <option value="<? echo "$liste4[durum]"; ?>"><? echo "$liste4[durum]"; ?></option>
          <option value="0">Pasif</option>
          <option value="1">Aktif</option>
        </select>
      </label></td>
      <td class="comment">0: Pasif; 1:Aktif </td>
    </tr>
    <tr>
      <td class="data style2 style1">&nbsp;</td>
      <td><span class="style2">
        <label>
        <input name="Submit" type="submit" id="Submit" value="Kaydet" />
        </label>
      </span></td>
      <td class="comment"><input name="Submit2" type="reset" value="Temizle" /></td>
    </tr>
  </table>
  <span class="style2">
 
  </span>
</form>
<?
		}
		?>

</body>
</html>
