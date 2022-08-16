<?
session_start();

include "level2_check.php";
include "baglanti.php";
?>


<?
require "header.php";
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {font-size: 12px}
.style3 {
	font-size: large;
	font-weight: bold;
	color: #990000;
}
-->
</style>
<div align="center">
  <p class="style2">&nbsp;</p>
  <table width="70%" border="0">
    <tr>
      <td bgcolor="#f4f4f4"><p align="center" class="style2"><span class="style3">!!! D&#304;KKAT !!!</span><br />
            <br />
        Yanl&#305;&#351;l&#305;k yap&#305;lan vekalet g&ouml;revlerde bu silme i&#351;lemini yap&#305;n&#305;z.</p>
        <p align="center" class="style2"><u>Vekalet g&ouml;revini bitirmek veya vekalet g&ouml;revini kald&#305;rmak istiyorsan&#305;z <br />
          silme i&#351;lemi yerine pasif hale getirme (duzenleme b&ouml;l&uuml;m&uuml;nde) i&#351;lemini uygulay&#305;n&#305;z</u> </p>
        <p align="center" class="style2">Vekalet g&ouml;revi yanl&#305;&#351;l&#305;kla verilmi&#351;, silmek istiyorum </p>
        <div align="center">
          <table width="200" border="0">
            <tr>
              <td><a href="vekalet2delete2.php?onay=<? echo"$id"; ?>" class="style1">EVET</a></td>
              <td><div align="right" class="style1"><a href="index.php">HAYIR</a></div></td>
            </tr>
                  </table>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
