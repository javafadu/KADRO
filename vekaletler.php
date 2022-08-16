<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

?>

<?

if(!isset($key))
{
$count1 = mysql_query("select COUNT(*) from vekalet ");
$sayi1 = mysql_fetch_assoc($count1);
}
else
{
$count1 = mysql_query("select COUNT(*) from vekalet where durum=$key ");
$sayi1 = mysql_fetch_assoc($count1);
}
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<form id="form1" name="form1" method="post" action="vekaletler.php">
  <label>
  <select name="key" id="key">
    <option value="1" selected="selected">Aktifleri G&ouml;ster</option>
    <option value="0">Pasifleri G&ouml;ster</option>
  </select>
  </label>
  <label>
  <input type="submit" name="Submit" value="G&ouml;ster" />
  </label>
</form>
<br /><br />
<?
echo "<tr bgcolor='white'>Sistemde Kayitli Vekalet Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='80%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr bgcolor='#9999FF'>

<td><b><a href='vekaletler.php?order=ofis'><font color='#ffffff'>Ofis</a></b></td>
<td><b><a href='vekaletler.php?order=unvan'><font color='#ffffff'>Vekalet Ünvani</a></b></td>
<td><b><a href='vekaletler.php?order=sicil'><font color='#ffffff'>Sicil</a></b></td>
<td><b><font color='#ffffff'>Isim</b></td>
<td><b><a href='vekaletler.php?order=tarih'><font color='#ffffff'>Baslama Tarihi</a></b></td>
<td><b><font color='#ffffff'>Gör-Düzenle-Sil</b></td>

</tr>";

include "baglanti.php";



if(isset($key))
{
$sql = mysql_query("select * from vekalet where durum=$key order by '$order' ");
}
else
{
$sql = mysql_query("select * from vekalet  order by '$order' ");
}




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

	 

	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	 	 <td valig="top"><? echo "$liste[unvan]"; ?></td>
	 <td valig="top"><? echo "$liste[sicil]"; ?></td>
	 
<?
$listc[sicil]=$liste[sicil];
$listc[id]=$liste[id];

$sqli=mysql_query("select * from personel  where sicil='$liste[sicil]' ");

while ($listi=mysql_fetch_array($sqli))

{	
 
?>	 <td valig="top"><? echo "$listi[isim]"; ?></td> 
<td valig="top"><? echo "$liste[tarih]"; ?></td>
	 <td align="center">
	 <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/listevekalet.php';
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
