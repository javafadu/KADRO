
<?php
include "baglanti.php";
require "header.php";

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
-->
</style>
<div align="center">
  <p class="style2">Silmek &#304;stedi&#287;inizden Emini misiniz? </p>
  <table width="200" border="0">
    <tr>
      <td><a href="gecici2delete2.php?onay=<? echo"$id"; ?>" class="style1">EVET</a></td>
      <td><div align="right" class="style1"><a href="index.php">HAYIR</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
