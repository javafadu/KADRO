<?
session_start();
include "level2_check.php";

require "header2.php";
?>
<?
include "baglanti.php";

$sql= mysql_query("select * from ofislist where ofisid='$id' ");


while ($liste=mysql_fetch_array($sql))
{

?>

<style type="text/css">
<!--
.style1 {color: #666666}
-->
</style>
<link href="css/all.css" rel="stylesheet" type="text/css">
<body>
<form name="form1" method="post" action="hatgir2edit.php?id=<? echo "$liste[ofisid]"; ?>">
  <table width="59%" border="1" align="center" bgcolor="#EFEFEF" class="style1">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2">Yeni Hat Giri&#351;i  </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style2 style1">Ba&#351;kan</td>
      <td><select name="baskan" id="baskan">
        <option value="<? echo "$liste[baskan]"; ?>" selected="selected"><? echo "$liste[baskan]"; ?></option>
        <option value="Pazarlama Sat&#305;&#351; B&#351;k ">Pazarlama Sat&#305;&#351; B&#351;k </option>
        <option value="&#304;dari &#304;&#351;ler Md">&#304;dari &#304;&#351;ler Md</option>
        <option value="&Uuml;retim Planlama B&#351;k">&Uuml;retim Planlama B&#351;k</option>
        <option value="Gelir Y&ouml;netim B&#351;k">Gelir Y&ouml;netim B&#351;k</option>
        <option value="Kargo B&#351;k">Kargo B&#351;k</option>
        <option value="&#304;&#351; Geli&#351;tirme B&#351;k">&#304;&#351; Geli&#351;tirme B&#351;k</option>
      </select></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style2 style1">M&uuml;d&uuml;rl&uuml;k</td>
      <td><input name="ofisbolge" type="text" id="ofisbolge"  value="<? echo "$liste[ofisbolge]"; ?>"></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style2 style1">&Uuml;lke &#304;smi (&#304;ngilizce)  </td>
      <td width="38%"> 
        <input name="ofisulke1" type="text"  value="<? echo "$liste[ofisulke1]"; ?>">      </td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">&Uuml;lke &#304;smi (T&uuml;rk&ccedil;e) </td>
      <td><label>
        <input name="ofisulke" type="text"  value="<? echo "$liste[ofisulke]"; ?>">
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr> 
      <td width="34%" class="data style2 style1">&#350;ehir Ofisi  </td>
      <td width="38%"> 
        <input name="ofis_sehir" type="text"  value="<? echo "$liste[ofis_sehir]"; ?>">      </td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style2 style1">&#350;ehir Ofisi Kodu  </td>
      <td width="38%"> 
        <input name="sehir_kod" type="text"  value="<? echo "$liste[sehir_kod]"; ?>">      </td> 
	  
	  <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">Hatt&#305;n T&uuml;r&uuml; </td>
      <td><label>
        <select name="tur" id="tur">
          <option value="<? echo "$liste[tur]"; ?>" selected><? echo "$liste[tur]"; ?></option>
          <option value="M&uuml;d&uuml;rl&uuml;k">M&uuml;d&uuml;rl&uuml;k</option>
          <option value="Ba&#287;l&#305; &#350;eflik">Ba&#287;l&#305; &#350;eflik</option>
        </select>
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">Ba&#287;l&#305; ise Kime </td>
      <td><?
		echo "<select name=\"bag\">";
      ?><option value="<? echo "$liste[bag]"; ?>" selected><? echo "$liste[bag]"; ?></option> <?
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
      <input name="gizlikod" type="hidden" id="gizlikod" value="<? echo "$liste[sehir_kod]"; ?>"></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">&nbsp;</td>
      <td><span class="style2">
        <label>
        <input type="submit" name="Submit" value="Kaydet" />
        </label>
      </span></td>
      <td class="comment"><input name="Submit2" type="reset" value="Temizle" /></td>
    </tr>
  </table>
  <p class="style1">&nbsp;</p>
</form>

<?
}
?>
</body>
</html>
