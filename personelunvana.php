<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

$unvan= $_GET['unvan'];

$sql = mysql_query("select * from kadro  where unvan='$unvan' order by ofis,unvan,sicil ASC ");

$count1 = mysql_query("select COUNT(*) from kadro where unvan='$unvan' ");
$sayi1 = mysql_fetch_assoc($count1);

?>
<br />
<?



echo "<tr>Unvan:  <font color='red'><b>$unvan</b></font>  </tr><br>";
echo "<tr>Kayitli Personel Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#9999FF'>
<td><b><font color='#ffffff'>Ofis</b></td>
<td><b><font color='#ffffff'>Kadro</b></td>
<td><b><font color='#ffffff'>Sicil</b></td>
<td><b><font color='#ffffff'>Isim</b></td>

<td><b><font color='#ffffff'>Ayrinti</b></td>
</tr>";







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

$listebos[id]=$liste[id];


 
 
 
  echo "<tr bgcolor=\"$s\">" ?>

	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	 <td valig="top"><? echo "$liste[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$liste[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[isim]"; }?></td>
	 
	 
	 
	
<td align="center">
	 <?
	 if($liste[sicil]<>0)
	 {
	 ?>
 <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/liste.php';
         echo "</select> ";
?>
	  <?
	  }
	  else
	  {
	  ?>
	  <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/listebos.php';
         echo "</select> ";
?>     
	  <?
	  }
	  ?>
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
        </p>
        <p><br>
          <br>
          <center>
          
          
          <br>
          <br>
          </body>
          </html>
        </p>
</div>
