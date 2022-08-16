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
<table width="50%" border="0" align="center">
  <tr>
    <td width="91%" bgcolor="#FFFFFF"><strong>TA&#350;IMA T&Uuml;R&Uuml;N&Uuml; SE&Ccedil;&#304;N&#304;Z </strong></td>
  </tr>
  <tr bordercolor="f4f4f4" bgcolor="#FFFFFF">
    <td>&nbsp;</td>
  </tr>
  <tr bordercolor="f4f4f4" bgcolor="#FFFFFF">
    <td bgcolor="#FFFFFF"><a href="personel0tasi.php?id=<? echo"$id"; ?>">Kadrosu &#304;le Beraber Ta&#351;&#305; </a></td>
  </tr>
  <tr bordercolor="f4f4f4" bgcolor="#FFFFFF">
    <td bgcolor="#FFFFFF"><a href="personel2tasi.php?id=<? echo"$id"; ?>">Kadrosuz Ta&#351;&#305; </a></td>
  </tr>
</table>
