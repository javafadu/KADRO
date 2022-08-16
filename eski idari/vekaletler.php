<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

?>

<?


$count1 = mysql_query("select COUNT(*) from vekalet  ");
$sayi1 = mysql_fetch_assoc($count1);
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<br /><br />
<?
echo "<tr bgcolor='white'>Sistemde Kayitli Vekalet Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>


<td><b><a href='vekaletler.php?order=baskan'>Vekalet Baskanlik</a></b></td>
<td><b><a href='vekaletler.php?order=bolge'>Vekalet Müdürlük</a></b></td>
<td><b><a href='vekaletler.php?order=ofis'>Ofis</a></b></td>
<td><b><a href='vekaletler.php?order=unvan'>Vekalet Ünvani</a></b></td>
<td><b><a href='vekaletler.php?order=sicil'>Sicil</a></b></td>
<td><b>Isim</b></td>
<td><b><a href='vekaletler.php?order=tarih'>Baslama Tarihi</a></b></td>
<td><b>Gör-Düzenle-Sil</b></td>

</tr>";

include "baglanti.php";



$sql = mysql_query("select * from vekalet  order by '$order' ");





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
	 	 <td valig="top"><? echo "$liste[unvan]"; ?></td>
	 <td valig="top"><? echo "$liste[sicil]"; ?></td>
	 
<?

$sqli=mysql_query("select * from personel  where sicil='$liste[sicil]' ");

while ($listi=mysql_fetch_array($sqli))

{	
 
?>	 <td valig="top"><? echo "$listi[isim]"; ?></td> 
<td valig="top"><? echo "$liste[tarih]"; ?></td>
	 <td>
	 <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="vekaletedit.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="VEKALET DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="vekalet2delete.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/sil.gif" border="0" title="VEKALET SIL"></a>
   
	  </td>
</tr>

	 
    
	  <div align="center">
        <p>
          <?
   $i=$i+1; 
    }
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
