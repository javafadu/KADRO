<?

session_start();

?>
<?




require "header.php";
include "level3_check.php";
include "baglanti.php";
$onay = $id;
		




?>  
<link href="css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {
	font-size: 12px;
	font-weight: bold;
	color: #990000;
}
-->
</style>
<div align="center">
  <p class="style2">YEN&#304; PERSONEL B&#304;LG&#304; G&#304;R&#304;&#350;&#304;  
    <br />
  <p class="style2">
  
  <table width="36%" border="1" bordercolor="#FFFFFF" bgcolor="f4f4f4">
    <tr>
      <td colspan="3" bgcolor="#FFFFFF"><strong>Hangi Birime Personel Giri&#351;i Yapacaks&#305;n&#305;z </strong></td>
    </tr>
    <tr>
      <td width="58%">Yurt D&#305;&#351;&#305; Sat&#305; M&uuml;d&uuml;rl&uuml;kleri </td>
      <td width="5%">&nbsp;</td>
      <td width="37%"><?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Yurt D&#305;&#351;&#305;</option> ";
        include 'includes/ofisconoutgir.php';
         echo "</select> ";
?></td>
    </tr>
    <tr>
      <td>Yurt &#304;&ccedil;i Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri </td>
      <td>&nbsp;</td>
      <td><?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Yurt &#304;&ccedil;i</option> ";
        include 'includes/ofisconingir.php';
         echo "</select> ";
?></td>
    </tr>
    <tr>
      <td>Genel M&uuml;d&uuml;rl&uuml;k &#304;&ccedil;indeki Birimler </td>
      <td>&nbsp;</td>
      <td><?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Genel M&uuml;d&uuml;rl&uuml;k</option> ";
        include 'includes/ofiscongmgir.php';
         echo "</select> ";
?></td>
    </tr>
    <tr>
      <td>Kargo  </td>
      <td>&nbsp;</td>
      <td><?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Kargo</option> ";
        include 'includes/ofisconkargogir.php';
         echo "</select> ";
?></td>
    </tr>
  </table>
  <p class="style2">
  <p class="style2">
  
  <h2>&nbsp;</h2>
  <p>&nbsp;</p>
</div>
