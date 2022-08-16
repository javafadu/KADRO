<?
session_start();
include "level2_check.php";
include "baglanti.php";
?>


<?
require "header.php";

$sql2 = mysql_query("select * from kadro where id='$id' ");




while ($liste4=mysql_fetch_array($sql2))
{




?>

<style type="text/css">
<!--
.style1 {color: #666666}
.style2 {color: #999999}
-->
</style>
<body>
<form name="form1" method="post" action="boskadrogir2edit.php?id=<? echo "$liste4[id]"; ?>">
  <table width="60%" border="1" align="center" cellspacing="2" bordercolor="ffffff" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">BO&#350; KADRO D&Uuml;ZENLEME SAYFASI </span></td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" bordercolor="ffffff" bgcolor="f4f4f4" class="data style2 style1">Ofisr</td>
      <td width="38%" bordercolor="ffffff" bgcolor="f4f4f4"><label>
	  
      <?
		echo "<select name=\"ofis\">";
        echo "<option value=\"$liste4[ofis]\">$liste4[ofis]</option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
      <br>
      <font size="1">De&#287;i&#351;tirdi&#287;iniz zaman bo&#351; kadro se&ccedil;ti&#287;iniz ofise ta&#351;&#305;n&#305;r, &ouml;nceki yerden de silinir. </font></label></td>
      <td width="28%" bordercolor="ffffff" bgcolor="f4f4f4" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td bordercolor="ffffff" bgcolor="f4f4f4" class="data style2 style1">&Uuml;nvan&#305;</td>
      <td bordercolor="ffffff" bgcolor="f4f4f4"><label><span class="comment style2 style1">
      <?
		echo "<select name=\"unvan\">";
        echo "<option value=\"$liste4[unvan]\">$liste4[unvan]</option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?>
      </span></label></td>
      <td bordercolor="ffffff" bgcolor="f4f4f4" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="f4f4f4" class="data style2 style1">Kadro</td>
      <td bordercolor="ffffff" bgcolor="f4f4f4"><label>
        <input name="kadro" type="text" id="kadro" value="<? echo "$liste4[kadro]"; ?>">
      </label></td>
      <td bordercolor="ffffff" bgcolor="f4f4f4" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="f4f4f4" class="data style2 style1">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="f4f4f4"><span class="style2">
        <label>
        <input name="Submit" type="submit" id="Submit" value="Kaydet" />
        </label>
      </span></td>
      <td bordercolor="ffffff" bgcolor="f4f4f4" class="comment"><input name="Submit2" type="reset" value="Temizle" /></td>
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
