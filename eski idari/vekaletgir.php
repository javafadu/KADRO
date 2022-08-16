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
<table border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="f4f4f4" bgcolor="#EFEFEF">
    <tr bgcolor="#EFEFEF"> 
      <td bgcolor="#EFEFEF" class="data style3 style5">Sicil No </td>
      <td bgcolor="#FFFFE6"><input name="sicil" type="text" id="sicil"></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="comment style1 style2">&nbsp;</td>
      <td bgcolor="#EFEFEF" class="comment style1 style2"><span class="data style3 style5">Vekalet Ofisi </span></td>
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
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="data style3 style5">&nbsp;</td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label></label></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#EFEFEF"><span class="data style3 style5">Vekalet Ba&#351;k. </span></td>
      <td bgcolor="#FFFFE6"><select name="baskan" id="baskan">
        <option value="--" selected>Se&ccedil;iniz</option>
        <option value="Pazarlama Sat&#305;&#351; B&#351;k ">Pazarlama Sat&#305;&#351; B&#351;k </option>
        <option value="&#304;dari &#304;&#351;ler Md">&#304;dari &#304;&#351;ler Md</option>
        <option value="&Uuml;retim Planlama B&#351;k">&Uuml;retim Planlama B&#351;k</option>
        <option value="Gelir Y&ouml;netim B&#351;k">Gelir Y&ouml;netim B&#351;k</option>
        <option value="Kargo B&#351;k">Kargo B&#351;k</option>
        <option value="&#304;&#351; Geli&#351;tirme B&#351;k">&#304;&#351; Geli&#351;tirme B&#351;k</option>
      </select></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td bgcolor="#EFEFEF" class="data style3 style5">Vekalet Ba&#351;l. Tarih.</td>
      <td bgcolor="#FFFFE6"><div id="div"></div>
      <input name="tarih" type="text" id="popup_container3" />        <label></label></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#EFEFEF"><span class="data style3 style5">Vekalet Mdr </span></td>
      <td bgcolor="#FFFFE6"><select name="bolge" id="bolge">
        <option value="--" selected>Se&ccedil;iniz </option>
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
        <option value="Genel Da&#287;&#305;t&#305;m Sistem">Genel Da&#287;&#305;t&#305;m Sistem</option>
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
        <option value="Antalya Kargo">Antalya Kargo</option>
        <option value="Kargo Sistem Mdr">Kargo Sistem Mdr</option>
        <option value="IATA Biletleme ve Kurallar">IATA Biletleme ve Kurallar</option>
      </select></td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td bgcolor="#EFEFEF" class="data style3 style5">Vekalet Kadrosu</td>
      <td bgcolor="#FFFFE6"><input name="kadro" type="text" id="kadro"></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
      <td bgcolor="#EFEFEF" class="comment style2 style1"><span class="data style3 style5">Vekalet &Uuml;nvan&#305;</span></td>
      <td bgcolor="#FFFFE6" class="comment style2 style1"><?
		echo "<select name=\"unvan\">";
        echo "<option value=\"\"></option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?></td>
    </tr>
    <tr>
      <td class="data style3 style5">Bilgi</td>
      <td bgcolor="#FFFFE6"><label>
        <textarea name="bilgi" rows="5" id="bilgi"></textarea>
      </label></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
      <td class="comment style2 style1"><span class="data style3 style5">B&uuml;t&ccedil;e</span></td>
      <td bgcolor="#FFFFE6" class="comment style2 style1"><textarea name="butce" rows="3" id="butce"></textarea></td>
    </tr>
    <tr>
      <td bordercolor="80B0D8" bgcolor="80B0D8" class="data style3 style5">&nbsp;</td>
      <td bordercolor="80B0D8" bgcolor="80B0D8"><span class="style2">
        <label></label>
      </span></td>
      <td bordercolor="80B0D8" bgcolor="80B0D8" class="comment">&nbsp;</td>
      <td bordercolor="80B0D8" bgcolor="80B0D8" class="comment style5">&nbsp;</td>
      <td class="comment"><div align="right"><span class="style2">
        <input type="submit" name="Submit" value="Kaydet" />
        <input name="Submit2" type="reset" value="Temizle" />
      </span></div></td>
    </tr>
  </table>
</form>
</body>
</html>
