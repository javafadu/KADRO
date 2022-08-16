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

$sql = mysql_query("select * from vekalet where sicil='$id' ");
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
<form name="form1" method="post" action="vekaletgir2edit.php?id=<? echo "$liste4[sicil]"; ?>">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">PERSONEL B&#304;LG&#304;LER&#304;N&#304; D&Uuml;ZENLEME SAYFASI </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style2 style1">Personel Sicil </td>
      <td><label>
        <input name="sicil" type="text" id="sicil" value="<? echo "$liste4[sicil]"; ?>" size="8" maxlength="8">
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style2 style1">Ofisr</td>
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
      <td class="data style2 style1">Baskanl&#305;k</td>
      <td colspan="2"><select name="baskan" id="baskan">
        <option value="<? echo "$liste4[baskan]"; ?>" selected><? echo "$liste4[baskan]"; ?></option>
        <option value="Pazarlama Sat&#305;&#351; B&#351;k ">Pazarlama Sat&#305;&#351; B&#351;k </option>
        <option value="&#304;dari &#304;&#351;ler Md">&#304;dari &#304;&#351;ler Md</option>
        <option value="&Uuml;retim Planlama B&#351;k">&Uuml;retim Planlama B&#351;k</option>
        <option value="Gelir Y&ouml;netim B&#351;k">Gelir Y&ouml;netim B&#351;k</option>
        <option value="Kargo B&#351;k">Kargo B&#351;k</option>
        <option value="&#304;&#351; Geli&#351;tirme B&#351;k">&#304;&#351; Geli&#351;tirme B&#351;k</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">M&uuml;d&uuml;rl&uuml;k</td>
      <td colspan="2"><label>
        <select name="bolge" id="bolge">
          <option value="<? echo "$liste4[bolge]"; ?>" selected><? echo "$liste4[bolge]"; ?></option>
          <option value="Bat&#305; Avrupa ve Afrika">Bat&#305; Avrupa ve Afrika</option>
          <option value="G&uuml;ney Avrupa ve Balkanlar">G&uuml;ney Avrupa ve Balkanlar</option>
          <option value="Amerika ve Uzak Do&#287;u ">Amerika ve Uzak Do&#287;u </option>
          <option value="Anadolu ">Anadolu </option>
          <option value="Marmara-Ege-Akdeniz">Marmara-Ege-Akdeniz</option>
          <option value="Kuzey Avrupa ve T&uuml;rki Cumhuriyetler">Kuzey Avrupa ve T&uuml;rki Cumhuriyetler</option>
          <option value="Orta Avrupa">Orta Avrupa</option>
          <option value="Orta Do&#287;u ve K&#305;br&#305;s">Orta Do&#287;u ve K&#305;br&#305;s</option>
          <option value="Network Planlama">Network Planlama</option>
          <option value="Tarife">Tarife</option>
          <option value="Charter">Charter</option>
          <option value="Slot Koordinasyon">Slot Koordinasyon</option>
          <option value="Gelir Y&ouml;n ve &Uuml;cret">Gelir Y&ouml;n ve &Uuml;cret</option>
          <option value="Rezervasyon Kontrol">Rezervasyon Kontrol</option>
          <option value="Rezervasyon Sistem">Rezervasyon Sistem</option>
          <option value="Genel Da&#287;&#305;t&#305;m Sistem">Genel Da&#287;&#305;tr&#305;m Sistem</option>
          <option value="Uluslararas&#305; &#304;li&#351;kiler">Uluslararas&#305; &#304;li&#351;kiler</option>
          <option value="Acenteler">Acenteler</option>
          <option value="Destek">Destek</option>
          <option value="Sat&#305;&#351; Art&#305;rma">Sat&#305;&#351; Art&#305;rma</option>
          <option value="Kargo Rezervasyon">Kargo Rezervasyon</option>
          <option value="Kargo Sat&#305;&#351;">Kargo Sat&#305;&#351;</option>
          <option value="Kargo Planlama ve Charter">Kargo Planlama ve Charter</option>
          <option value="Kargo Handling S&ouml;zle&#351;meleri">Kargo Handling S&ouml;zle&#351;meleri</option>
          <option value="Kargo Operasyon Kontrol">Kargo Operasyon Kontrol</option>
          <option value="&#304;stanbul Kargo">&#304;stanbul Kargo</option>
          <option value="Ankara Kargo">Ankara Kargo</option>
          <option value="&#304;zmir Kargo">&#304;zmir Kargo</option>
          <option value="Adana Kargo">Adana Kargo</option>
          <option value="Rezervasyon ve Telefonla Sat&#305;&#351;">Rezervasyon ve Telefonla Sat&#305;&#351;</option>
          <option value="&Uuml;r&uuml;n Geli&#351;tirme">&Uuml;r&uuml;n Geli&#351;tirme</option>
          <option value="E-Ticaret">E-Ticaret</option>
          <option value="M&uuml;&#351;teri &#304;li&#351;kileri">M&uuml;&#351;teri &#304;li&#351;kileri</option>
		  <option value="E-Ticaret">E-Ticaret</option>
		  <option value="Antalya Kargo">Antalya Kargo</option>
		  <option value="Kargo Sistem Mdr">Kargo Sistem Mdr</option>
		  <option value="IATA Biletleme ve Kurallar">IATA Biletleme ve Kurallar</option>
        </select>
      </label></td>
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
      <td class="data style2 style1">Kadro</td>
      <td><label>
        <input name="kadro" type="text" id="kadro" value="<? echo "$liste4[kadro]"; ?>">
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">B&uuml;t&ccedil;e</td>
      <td><label>
        <textarea name="butce" rows="3" id="butce"><? echo "$liste4[butce]"; ?></textarea>
      </label></td>
      <td class="comment">&nbsp;</td>
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
