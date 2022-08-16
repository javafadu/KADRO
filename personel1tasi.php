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
<table width="30%" border="0" align="center">
  <tr>
    <td width="91%" bgcolor="#FFFFFF"><div align="center"><strong>TA&#350;IMA T&Uuml;R&Uuml;N&Uuml; SE&Ccedil;&#304;N&#304;Z </strong></div></td>
  </tr>
  <tr bordercolor="f4f4f4">
    <td><div align="center"></div></td>
  </tr>
  <tr bordercolor="f4f4f4" bgcolor="#FFFFFF">
    <td bgcolor="#FFFFFF"><div align="left"><a href="personel0tasi.php?id=<? echo"$id"; ?>">Kadrosu &#304;le Beraber Ta&#351;&#305; </a></div></td>
  </tr>
  <tr bordercolor="f4f4f4" bgcolor="#FFFFFF">
    <td bgcolor="#FFFFFF"><div align="left"><a href="personel2tasi.php?id=<? echo"$id"; ?>">Kadrosuz Ta&#351;&#305; </a></div></td>
  </tr>
</table>
