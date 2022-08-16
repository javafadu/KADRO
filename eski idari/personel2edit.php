<?
session_start();
include "level2_check.php";
include "baglanti.php";
?>


<?
require "header.php";

$sql = mysql_query("select * from personel where sicil='$id' ");




while ($liste4=mysql_fetch_array($sql))
{




?>

<style type="text/css">
<!--
.style1 {color: #666666}
-->
</style>
<body>
<form name="form1" method="post" action="kadrogir22edit.php?id=<? echo "$liste4[sicil]"; ?>">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">PERSONEL B&#304;LG&#304;LER&#304;N&#304; D&Uuml;ZENLEME SAYFASI </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td width="34%" class="data style2 style1">Personel Sicil </td>
      <td width="38%"><label><? echo "$liste4[sicil]"; ?></label></td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">Personel &#304;sim </td>
      <td><label><? echo "$liste4[isim]"; ?></label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">&Uuml;nite Hareketleri2 <br></td>
      <td><label>
        <textarea name="bilgi" rows="3" id="bilgi"><? echo "$liste4[bilgi]"; ?></textarea>
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
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
