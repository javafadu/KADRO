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
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-size: 12px;
	font-weight: bold;
	color: #990000;
}
.style3 {font-size: 14px}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style2"> <h2>!!! D&#304;KKAT !!! </h2>
  </p>
  <p>Personel Sistemden Tamamen Silinecektir. (Ge&ccedil;ici G&ouml;rev, Vekalet G&ouml;rev, &#304;zin..) </p>
  <p class="style4">Personelin Kadrosunun Kalmas&#305;n&#305; &#304;stiyor musunuz ?</p>
  <p>&nbsp;  </p>
  <table width="300" border="0">
    <tr>
      <td><a href="personel2delete2.php?onay=<? echo"$id"; ?>&amp;s=2" class="style1">&gt;&gt; EVET &lt;&lt; </a></td>
      <td><div align="right" class="style1"><a href="personel2delete2.php?onay=<? echo"$id"; ?>&amp;s=1" class="style3">HAYIR</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
