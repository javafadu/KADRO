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
echo"<tr bgcolor='#9999FF'>



<td><b><a href='izinliler.php?order=ofis'><font color='#ffffff'>Ofis</b></a></td>
<td><b><a href='izinliler.php?order=unvan'><font color='#ffffff'>Unvan</b></a></td>
<td><b><a href='izinliler.php?order=sicil'><font color='#ffffff'>Sicil</b></a></td>
<td><b><font color='#ffffff'>Isim</b></td>
<td><b><font color='#ffffff'>Izin Nedeni</b></td>
<td><b><a href='izinliler.php?order=bastarih'><font color='#ffffff'>Izin  Bas. Tar.</b></a></td>
<td><b><a href='izinliler.php?order=bittarih'><font color='#ffffff'>Izin Bit. Tar.</b></a></td>
<td><b><font color='#ffffff'>Gün</b></td>
<td><b><font color='#ffffff'>Bitime Kalan Gün</b></td>
<td><b><font color='#ffffff'>Gör-Düzenle-Sil</b></td>

</tr>";

include "baglanti.php";



$sql = mysql_query("select * from izingorev  order by '$order' ASC ");





?>
<?


$bgcolor1="#FFFFFF";
$bgcolor2="#FFFFCC";
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
	 
      
	  
	  <td valig="top"><? echo "$araliste[ofis]"; ?></td>
	 	 <td valig="top"><? echo "$araliste[unvan]"; ?></td>
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

if($liste[izinbit]>0)
{
$fark= $ee-$bb; print(intval($fark/(24*60*60))); 
}
else
{
echo"belirsiz";
}

?>
</td>

<td valig="top" align="center"><? 

if($liste[izinbit]>0)
{
datediff("$liste[izinbit]"); 
}
else
{
echo"belirsiz";
}

?></td>
	 <td align="center">
  <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/listeizin.php';
         echo "</select> ";
?>
	 
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
