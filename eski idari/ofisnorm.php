<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

?>


<link href="css/all.css" rel="stylesheet" type="text/css" />


<br /><br />
<?



$sql = mysql_query ("select *  from kadro   group by ofis order by ofis ");
echo "<table width='70%' bgcolor='EFEFEF' align='center' border='0'><tr bgcolor='#CDCDCD'>";
echo"<tr>



<td><b>Ofis</b></td>
<td><b>Norm Kadro</b></td>
<td><b>Çalisan Personel</b></td>
<td><b>Bos Kadro</b></td>
</tr>";

include "baglanti.php";







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

$o=$liste[ofis];

$bak11=mysql_query("select * from ofislist where sehir_kod='$o' ");
while ($dene1=mysql_fetch_array($bak11))
{
$ulke=$dene1[ofisulke1];
}



  echo "<tr bgcolor=\"$s\">" ?>

	 
    
	  <td valig="top" ><? echo "$liste[ofis]"; ?></td>
<?
	  



if($ulke=='TURKEY')
{
$count1 = mysql_query("select COUNT(*) from kadro where ofis='$o' and sozpart not like '%art%' ");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where ofis='$o' and sicil<>0 and sozpart not like '%art%' ");
$sayi2 = mysql_fetch_assoc($count2);

$count3 = mysql_query("select COUNT(*) from kadro where ofis='$o' and sozpart not like '%art%' and sicil=0 ");
$sayi3 = mysql_fetch_assoc($count3);
}
else
{
$count1 = mysql_query("select COUNT(*) from kadro where ofis='$o'  ");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where ofis='$o' and sicil<>0 ");
$sayi2 = mysql_fetch_assoc($count2);

$count3 = mysql_query("select COUNT(*) from kadro where ofis='$o'  and sicil=0 ");
$sayi3 = mysql_fetch_assoc($count3);
}




?>
	  
	
	  
	 <td valig="top"><? echo $sayi1['COUNT(*)']; ?></td>
	  <td valig="top"><? echo $sayi2['COUNT(*)']; ?></td>
	   
<?
if($sayi3['COUNT(*)']<>0)
{
$b='white';
}
else
$b=$s;
?>
	   
	   <td valig="top" bgcolor=<? echo"$b"; ?>><? echo $sayi3['COUNT(*)']; ?></td>

	 <td>
<form action="personelofise.php?ofis=<? echo"$o"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="Ayrintili Bilgi" />      
	  </td>
	
</tr>
</form>
	 
    
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
