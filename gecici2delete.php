<?
session_start();

include "level2_check.php";
include "baglanti.php";
?>


<?
require "header.php";
?>
<?
$onay = $id;
		




?>  
<link href="css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {font-size: 12px}
.style3 {	font-size: large;
	font-weight: bold;
	color: #990000;
}
-->
</style>
<div align="center">
  <p align="center" class="style2"><span class="style3">!!! D&#304;KKAT !!!</span><br />
      <br />
    Yanl&#305;&#351;l&#305;k yap&#305;lan ge&ccedil;ici g&ouml;revlerde bu silme i&#351;lemini yap&#305;n&#305;z.</p>
  <p align="center" class="style2"><u>Ge&ccedil;ici g&ouml;revini bitirmek veya ge&ccedil;ici g&ouml;revini kald&#305;rmak istiyorsan&#305;z <br />
    silme i&#351;lemi yerine pasif hale getirme (duzenleme b&ouml;l&uuml;m&uuml;nde) i&#351;lemini uygulay&#305;n&#305;z</u> </p>
  <p align="center" class="style2">Ge&ccedil;ici g&ouml;revi yanl&#305;&#351;l&#305;kla verilmi&#351;, silmek istiyorum </p>
  <p class="style2">&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td><a href="gecici2delete2.php?onay=<? echo"$id"; ?>" class="style1">EVET</a></td>
      <td><div align="right" class="style1"><a href="index.php">HAYIR</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
