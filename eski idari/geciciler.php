<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";
include "includes/datediff.php";
?>

<?
if($st==2)
{

$count1 = mysql_query("select COUNT(*) from gecicigorev   ");
$sayi1 = mysql_fetch_assoc($count1);
}

else if ($st==0)

{
$count1 = mysql_query("select COUNT(*) from gecicigorev where status='0'   ");
$sayi1 = mysql_fetch_assoc($count1);
}
else if ($st==1)

{
$count1 = mysql_query("select COUNT(*) from gecicigorev where status='1'  ");
$sayi1 = mysql_fetch_assoc($count1);
}

else

{
$count1 = mysql_query("select COUNT(*) from gecicigorev where status='0'  ");
$sayi1 = mysql_fetch_assoc($count1);
}

?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<br /><br />
<?
echo "<tr bgcolor='white'>Sistemde Kayitli  Geçici Görevli Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";


?>
<form action="geciciler.php" method="get">
 
    <select name="st" id="st">
      <option value="2">T&uuml;m&uuml;n&uuml; G&ouml;ster</option>
      <option value="1">Aktifleri G&ouml;ster</option>
      <option value="3">Pasifleri G&ouml;ster</option>
    </select>
    <input type="submit" name="Submit" value="G&ouml;ster" />

</form>

<form action="geciciler2.php" method="get">
  
    <select name="tarih" id="tarih">
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006" selected="selected">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
  </select>
    <input type="submit" name="Submit2" value="Git" />

</form>

<?

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>



<td><b><a href='geciciler.php?order=ofis'>Ofis</b></a></td>
<td><b><a href='geciciler.php?order=unvan'>Unvan</b></a></td>
<td><b><a href='geciciler.php?order=sicil'>Sicil</b></a></td>
<td><b>Isim</b></td>

<td><b><a href='geciciler.php?order=bastarih'>Geçici Görev Bas. Tar.</b></a></td>
<td><b><a href='geciciler.php?order=bittarih'>Geçici Görev Bit. Tar.</b></a></td>
<td><b>T.G.</b></td>
<td><b>Bitime Kalan Gün</b></td>
<td><b>Gör-Düzenle-Sil-Harcama</b></td>

</tr>";

include "baglanti.php";



if ($st==2)

{
$sql = mysql_query("select * from gecicigorev   order by '$order' ASC ");
}

else if ($st==1)

{
$sql = mysql_query("select * from gecicigorev  where status =1 order by '$order' ASC ");
}

else if ($st==3)

{
$sql = mysql_query("select * from gecicigorev  where status =0 order by '$order' ASC ");
}


else
{
$sql = mysql_query("select * from gecicigorev  where status = 1 order by '$order' ASC ");

}

?>
<?


$bgcolor1="#CDCDCD";
$bgcolor2="#EFEFEF";



while ($liste=mysql_fetch_array($sql))

{
if($liste[status]==0)
  {
  $s=$bgcolor1;
  }
  else
  {
  $s=$bgcolor2;
  }  



 
 
 
  echo "<tr bgcolor=\"$s\">" ?>

	 
    
	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	 	 <td valig="top"><? echo "$liste[unvan]"; ?></td>
	 <td valig="top" align="center"><? echo "$liste[sicil]"; ?></td>
	 
<?

$sqli=mysql_query("select * from personel  where sicil='$liste[sicil]' ");

while ($listi=mysql_fetch_array($sqli))

{	
 
?>	 <td valig="top"><? echo "$listi[isim]"; ?></td> 


<td valig="top" align="center"><? echo "$liste[bastarih]"; ?></td>
<td valig="top" align="center"><? echo "$liste[bittarih]"; ?></td>
<td>
<? 
$bb=strtotime($liste[bastarih]);
$ee=strtotime($liste[bittarih]);
$fark= $ee-$bb; print(intval($fark/(24*60*60))); 

?></td>

<?
$cc=strtotime(date("Y-m-d"));
$fark2=$ee-$cc;

$bgcolor1="#FFCC33";
$bgcolor2="";



if($fark2<=0)
  {
  $ss=$bgcolor1;
  }
  else
  {
  $ss=$bgcolor2;
  }  

?>



<td valig="top" align="center" bgcolor="<? echo"$ss"; ?>"><?

print(intval($fark2/(24*60*60))); 


?>
</td>
	 <td align="center">
  <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="geciciedit.php?id=<? echo"$liste[id]"; ?>"><img src="images/duzenle.gif" border="0" title="GEÇICI DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="gecici2delete.php?id=<? echo"$liste[id]"; ?>"><img src="images/sil.gif" border="0" title="GEÇICI SIL"></a>
	 &nbsp;&nbsp;
	 <a href="harcamalar2.php?id=<? echo"$liste[id]"; ?>"><img src="images/harcamalar.jpg" border="0" title="HARCAMALAR"></a>
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
