<?
session_start();
include "level2_check.php";
require "header2.php";
?>
<?


$count = mysql_query("select COUNT(*) from ofisaciklama");
$sayi = mysql_fetch_assoc($count);





echo "<center>Sisteme Kayitli Ofis Açiklama Sayisi:  <font color='red'>" .$sayi['COUNT(*)']. "</font> </tr>";
?>



<table width='50%' bgcolor='EFEFEF' align='center' border='0'>  
    
  <tr>
    <td><strong>Ofis</strong></td><td width="10"></td>
<td><b>Bilgi</b></td>
</tr>


  <?
include "baglanti.php";




$sql = mysql_query("select * from ofisaciklama order by 'kod' ASC ");



$bgcolor1="#f4f4f4";
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

?>
  
   <? echo "<tr bgcolor=\"$s\">" ?>   
  

  <td valign="top" width="120"><? echo "$liste[kod]"; ?></td>
  <td></td>
  <td><? echo "$liste[bilgi]"; ?></td>

</tr>
	 
	
	 
    
	<?
   $i=$i+1; 
    }
  ?>
</table>
<br>
<br><center>

 
<br>
<br>
</body>
</html>
