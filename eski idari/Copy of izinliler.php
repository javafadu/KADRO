<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";
include "includes/datediff.php";

?>

<?


$count1 = mysql_query("select COUNT(*) from izingorev  ");
$sayi1 = mysql_fetch_assoc($count1);
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<br /><br />
<?
echo "<tr bgcolor='white'>Sistemde Kayitli Izin Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='100%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>



<td><b><a href='izinliler.php?order=bolge'>Müdürlük</b></a></td>
<td><b><a href='izinliler.php?order=ofis'>Ofis</b></a></td>
<td><b><a href='izinliler.php?order=unvan'>Unvan</b></a></td>
<td><b><a href='izinliler.php?order=sicil'>Sicil</b></a></td>
<td><b>Isim</b></td>
<td><b>Izin Nedeni</b></td>
<td><b><a href='izinliler.php?order=bastarih'>Izin  Bas. Tar.</b></a></td>
<td><b><a href='izinliler.php?order=bittarih'>Izin Bit. Tar.</b></a></td>
<td><b>Gün</b></td>
<td><b>Bitime Kalan Gün</b></td>
<td><b>Gör-Düzenle-Sil</b></td>

</tr>";

include "baglanti.php";



$sql = mysql_query("select * from izingorev  order by '$order' ASC ");





?>
<?


$bgcolor1="#EFEFEF";
$bgcolor2="#CDCDCD";
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
 
  <? $ara = mysql_query("Select * from kadro where sicil = '$liste[sicil]' ");
  
  while ($araliste=mysql_fetch_array($ara))
  {
  ?>
	 
      
	  <td valig="top"><? echo "$araliste[bolge]"; ?></td>
	  <td valig="top"><? echo "$araliste[ofis]"; ?></td>
	 	 <td valig="top" align="center"><? echo "$araliste[unvan]"; ?></td>
	 <td valig="top" align="center"><? echo "$araliste[sicil]"; ?></td>
	 
<?

$sqli=mysql_query("select * from personel  where sicil='$liste[sicil]' ");

while ($listi=mysql_fetch_array($sqli))

{	
 
?>	 <td valig="top"><? echo "$listi[isim]"; ?></td> <? } ?>
 <td valig="top" align="center"><? echo "$liste[izinneden]"; ?></td>
<td valig="top" align="center"><? echo "$liste[izinbas]"; ?></td>
<td valig="top" align="center"><? echo "$liste[izinbit]"; ?></td>

<td valig="top" align="center"><? 
$bb=strtotime($liste[izinbas]);
$ee=strtotime($liste[izinbit]);
$fark= $ee-$bb; print(intval($fark/(24*60*60))); ?></td>
<td valig="top" align="center"><? datediff("$liste[izinbit]"); ?></td>
	 <td>
  <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="izinedit.php?id=<? echo"$liste[id]"; ?>"><img src="images/duzenle.gif" border="0" title="GEÇICI DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="izin2delete.php?id=<? echo"$liste[id]"; ?>"><img src="images/sil.gif" border="0" title="GEÇICI SIL"></a>
	 
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
