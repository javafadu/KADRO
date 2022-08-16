<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";
include "includes/datediff.php";
?>

<?
$timestamp = time();

$saat = date("H:i:s",$timestamp);
$tarih = date("Y-m-d");


?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<style type="text/css">
<!--
.style1 {
	color: #990000;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <label></label>
  <p class="style1">S&Ouml;ZLE&#350;MEL&#304; PERSONELLER&#304;N S&Ouml;ZLE&#350;ME BA&#350;LANGI&Ccedil;,B&#304;T&#304;&#350; ve B&#304;T&#304;ME KALAN G&Uuml;N SAYISI B&#304;LG&#304;LER&#304; </p>
  <form id="form1" name="form1" method="post" action="sozlesmebit.php">
    <select name="sec" id="sec">
      <option value="1">Yurti&ccedil;i</option>
      <option value="2">Yurtd&#305;&#351;&#305;</option>
        </select>
    <label>
    <input type="submit" name="Submit" value="Listele" />
    </label>
  </form>
  <br />
  <br />
  <?
echo "<table width='95%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>


<td><b><a href='sozlesmebit.php?order=baskan&sec=$sec'>Vekalet Baskanlik</a></b></td>
<td><b><a href='sozlesmebit.php?order=bolge&sec=$sec'>Vekalet Müdürlük</a></b></td>
<td><b><a href='sozlesmebit.php?order=ofis&sec=$sec'>Ofis</a></b></td>
<td><b><a href='sozlesmebit.php?order=unvan&sec=$sec'>Ünavni</a></b></td>
<td><b><a href='sozlesmebit.php?order=sozpart&sec=$sec'>Söz-Part</a></b></td>
<td><b><a href='sozlesmebit.php?order=sicil&sec=$sec'>Sicil</a></b></td>
<td><b>Isim</b></td>
<td><b><a href='sozlesmebit.php?order=sozbas&sec=$sec'>Soz. Bas. Tar</a></b></td>
<td><b><a href='sozlesmebit.php?order=sozbit&sec=$sec'>Soz. Bit. Tar</a></b></td>
<td><b><a href='sozlesmebit.php?order=sozbit&sec=$sec'>Bitime Kaç Gün</a></b></td>
<td><b>Gör-Düzenle-Sil</b></td>

</tr>";

include "baglanti.php";


if($sec==1)
{
$sql=mysql_query("Select *
FROM
`kadro`
Inner Join `ofislist` ON `ofislist`.`sehir_kod` = `kadro`.`ofis`
WHERE
`ofislist`.`ofisulke1`='TURKEY' AND
(`kadro`.`sozpart` LIKE  '%meli%' OR
`kadro`.`sozpart` LIKE  '%part%' ) AND `kadro`.`sozbit` NOT LIKE '%0000%'  order by '$order' ");
}
elseif($sec==2)
{

$sql=mysql_query("Select *
FROM
`kadro`
Inner Join `ofislist` ON `ofislist`.`sehir_kod` = `kadro`.`ofis`
WHERE
`ofislist`.`ofisulke1`<>'TURKEY' AND 
(`kadro`.`sozpart` LIKE  '%meli%' OR
`kadro`.`sozpart` LIKE  '%part%' )AND `kadro`.`sozbit` NOT LIKE '%0000%' order by '$order' ");
}

else
{

$sql = mysql_query("select * from kadro  where sozpart like '%ddddd%' order by '$order' ");

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
  
  
</div>
<td valig="top"><? echo "$liste[baskan]"; ?></td>
	  <td valig="top"><? echo "$liste[bolge]"; ?></td>
	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	 	 <td valig="top"><? echo "$liste[unvan]"; ?></td>
		 <td valig="top"><? echo "$liste[sozpart]"; ?></td>
	 <td valig="top"><? echo "$liste[sicil]"; ?></td>
	 
<?

$sqli=mysql_query("select * from personel  where sicil='$liste[sicil]' ");

while ($listi=mysql_fetch_array($sqli))

{	
 
?>	 <td valig="top"><? echo "$listi[isim]"; ?></td> 
<td valig="top"><? echo "$liste[sozbas]"; ?></td>
<td valig="top"><? echo "$liste[sozbit]"; ?></td>


<?
$tdy = mktime (0,0,0,date("m"),date("d"),date("Y"));

list($yearbit,$monthbit,$daybit) = explode("-",$liste[sozbit]);
$bit = mktime(0,0,0,$monthbit,$daybit,$yearbit,0);

$kalan = ($bit-$tdy)/86400;
?>



<?
	if($kalan<0)
	{
	$dr='#FFC6C6';
	}
	else
	{
	$dr='#f4f4f4';
	}
	?>
	
	
	<td bgcolor="<? echo"$dr"; ?>"><div align="center"><? printf("%.0f",$kalan); ?></div></td>



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
