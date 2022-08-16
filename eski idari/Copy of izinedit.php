<?
session_start();
include "level2_check.php";
include "baglanti.php";
?>


<?
require "header.php";

$sql = mysql_query("select * from izingorev where id='$id' ");
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
<form name="form1" method="post" action="izingir2edit.php?id=<? echo "$liste4[sicil]"; ?>">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">&#304;Z&#304;N  B&#304;LG&#304;LER&#304;N&#304; D&Uuml;ZENLEME SAYFASI </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td width="34%" class="data style2 style1">Personel Sicil </td>
      <td width="38%"><label>
        <input name="sicil" type="text" id="sicil" value="<? echo "$liste4[sicil]"; ?>" size="8" maxlength="8">
      </label></td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">&#304;zin T&uuml;r&uuml; </td>
      <td><input name="izitur" type="text" id="izitur" value="<? echo "$liste4[izintur]"; ?>"></td>
      <td class="comment">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">&#304;zin Nedeni </td>
      <td><input name="izinneden" type="text" id="izinneden" value="<? echo "$liste4[izinneden]"; ?>"></td>
      <td class="comment">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">&#304;zin  Ba&#351;. Tarihi </td>
      <td><label>
        <input name="izinbas" type="text" id="izinbas" value="<? echo "$liste4[izinbas]"; ?>">
      </label></td>
      <td class="comment">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style2 style1">&#304;zin Bit. Tarihi. </td>
      <td><label>
        <input name="izinbit" type="text" id="izinbit" value="<? echo "$liste4[izinbit]"; ?>">
      </label></td>
      <td class="comment">&nbsp;</td>
    </tr>
    
    <tr bgcolor="#FFFFFF">
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
