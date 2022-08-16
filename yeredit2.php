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

$sql = mysql_query("select * from yerler where id='$id' ");




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
<form name="form1" method="post" action="yergir2edit.php">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2 style1">PERSONEL &Ccedil;ALI&#350;MA YER&#304; B&#304;LG&#304;LER&#304;N&#304; D&Uuml;ZENLEME SAYFASI </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td width="34%" class="data style2 style1">Yer</td>
      <td width="38%"><label>
        <input name="yer" type="text" id="yer" value="<? echo "$liste4[yer]"; ?>">
      </label></td>
      <td width="28%" class="comment style2 style1"><input name="id" type="hidden" id="id" value="<? echo "$liste4[id]"; ?>"></td>
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
