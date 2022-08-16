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
<form name="form1" method="post" action="kadrogir22edit.php">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">PERSONEL &#304;&Ccedil;&#304;N B&#304;LG&#304; G&#304;RME </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td width="34%" class="data style2 style1">Personel Sicil </td>
      <td width="38%"><label>
        <input name="id" type="text" id="id" value="<? echo "$id"; ?>">
      </label></td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">Bilgi (hem personelin bilgisinde hemde personelin &ccedil;al&#305;&#351;t&#305;&#287;&#305; ofisin &uuml;st panelinde g&ouml;r&uuml;lecektir) <br></td>
      <td><label>
        <textarea name="bilgi" rows="3" id="bilgi"></textarea>
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
