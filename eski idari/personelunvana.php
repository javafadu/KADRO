<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

$unvan= $_GET['unvan'];

$sql = mysql_query("select * from kadro  where unvan='$unvan' order by baskan,bolge ASC ");

$count1 = mysql_query("select COUNT(*) from kadro where unvan='$unvan' ");
$sayi1 = mysql_fetch_assoc($count1);

?>
<br />
<?



echo "<tr>Unvan:  <font color='red'><b>$unvan</b></font>  </tr><br>";
echo "<tr>Kayitli Personel Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>
<tr><td><b>Baskanlik</b></td>
<td><b>Müdürlük</b></td>
<td><b>Ofis</b></td>
<td><b>Kadro</b></td>
<td><b>Sicil</b></td>
<td><b>Isim</b></td>

<td><b>Ayrinti</b></td>
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



 
 
 
  echo "<tr bgcolor=\"$s\">" ?>
<td valig="top"><? echo "$liste[baskan]"; ?></td>
      <td valig="top"><? echo "$liste[bolge]"; ?></td>
	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	 <td valig="top"><? echo "$liste[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$liste[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[isim]"; }?></td>
	 
	 
	 
	
<td>
	 <?
	 if($liste[sicil]<>0)
	 {
	 ?>
<a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="personeledit.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="personel2delete.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>
	  <?
	  }
	  else
	  {
	  ?>
	  <a href="personel3.php?id=<? echo"$liste[id]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="bosedit.php?id=<? echo"$liste[id]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="bosdelete.php?id=<? echo"$liste[id]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>         
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
