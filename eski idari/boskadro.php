<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

?>

<?


$count1 = mysql_query("select COUNT(*) from kadro where sicil='0' ");
$sayi1 = mysql_fetch_assoc($count1);
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<br /><br />
<?
echo "<tr bgcolor='white'>Sistemde Kayitli Bos Kadro Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>


<td><b>Baskanlik</b></td>
<td><b>Müdürlük</b></td>
<td><b>Ofis</b></td>
<td><b>Kadro</b></td>
<td><b>Ünvan</b></td>
<td><b>Seçim</b></td>
</tr>";

include "baglanti.php";



$sql = mysql_query("select * from kadro  where sicil = '0' order by baskan,bolge,ofis ASC ");





?>
<?


$bgcolor1="#FFFFE1";
$bgcolor2="#FFFFFF";
$i=3;


while ($liste=mysql_fetch_array($sql))

{
if($i%2==0)
  {
  $s=$bgcolor1;
  }
  else
  {
  $s=$bgcolor2;
  }  



 
 
 
  echo "<tr bgcolor=\"$s\">" ?>

	 
      <td valig="top"><? echo "$liste[baskan]"; ?></td>
	  <td valig="top"><? echo "$liste[bolge]"; ?></td>
	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	 <td valig="top"><? echo "$liste[kadro]"; ?></td>
	 <td valig="top"><? echo "$liste[unvan]"; ?></td>
	 <td>
<a href="personel3.php?id=<? echo"$liste[id]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="bosedit.php?id=<? echo"$liste[id]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="bosdelete.php?id=<? echo"$liste[id]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>        
	  </td>
	
</tr>

	 
    
	  <div align="center">
        <p>
          <?
   $i=$i+1; 
    }
  ?>
          
          
          </table>
          <br />
        <script language="JavaScript">
function printPage() {
if(document.all) {
document.all.divButtons.style.visibility = 

'hidden';
window.print();
document.all.divButtons.style.visibility = 

'visible';
} else {
document.getElementById('divButtons').style.visibil

ity = 'hidden';
window.print();
document.getElementById('divButtons').style.visibil

ity = 'visible';
}
}
</script>

<div id="divButtons" name="divButtons">
<input type="button" value = "Print" 

onclick="printPage()">
<input type="button" value = "Close" 

onclick="JavaScript:window.close();">
<hr noshade>
</div> </p>
<p><br>
          <br>
          <center>
          
          
          <br>
          <br>
          </body>
          </html>
        </p>
</div>
