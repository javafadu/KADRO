<?
session_start();
include "level4_check.php";
require "header.php";
include "baglanti.php";

?>



<table width='80%' bgcolor='EFEFEF' align='center' border='0'><tr bgcolor='#CDCDCD'>

<tr>

<td><b>Kriter</b></td>
<td><b>Sicil</b></td>
<td><b>Ki&#351;i</b></td>
<td><b>Baskanlik</b></td>
<td><b>M&uuml;d&uuml;rl&uuml;k</b></td>
<td><b>Ofis</b></td>

<td ><strong>Unvan</strong></td>
<td ><strong>Info</strong></td>


  
 <?


for($j=0;$j<sizeof($_POST['gor']);$j++)
{
//echo"<br>".$_POST['gor'][$j];
$sql=mysql_query("select * from personel where bilgi like '%$gor[$j]%' ");
while($liste=mysql_fetch_array($sql))
{

echo"<tr><td><font color='red'>$gor[$j]</font></td><td><li>$liste[sicil]    </td>";
echo"<td><li>$liste[isim]    </td>";

$sql2=mysql_query(" select * from kadro where sicil='$liste[sicil]' ");

while ($liste2=mysql_fetch_array($sql2))
{
echo"<td>$liste2[baskan]</td><td>$liste2[bolge]</td><td>$liste2[ofis]</td><td>$liste2[unvan]</td>";

}

echo"<td>$liste[bilgi]</td></li><br></tr>";
}

}


 ?>

  
<tr>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

</table>
<br><br><center>
<br>
<br>
</body>
</html>
