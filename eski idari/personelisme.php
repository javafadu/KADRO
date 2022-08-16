<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";



$sql = mysql_query("select * from personel  where isim like '%$isim%'   ");


 $count1 = mysql_query("select COUNT(*) from personel  where isim like '%$isim%'  ");
$sayi1 = mysql_fetch_assoc($count1);



?>
<br />
<?



echo "<tr>Bu isimde bulunan  Personel Sayisi:  " .$sayi1['COUNT(*)']. " </tr><br>";

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#f4f4f4'><tr bgcolor='#CDCDCD'>";
echo"<tr>
<td><b>Isim</b></td>
<td><b>Baskanlik</b></td>
<td><b>Müdürlük</b></td>
<td><b>Ofis</b></td>
<td><b>Ünvan</b></td>
<td><b>Kadro</b></td>
<td><b>Sicil</b></td>

<td><b>Gör-Düzenle-Sil</b></td>
</tr>";







?>
<?


$bgcolor1="#F4FFFF";
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
 
 <td valig="top"><? echo "$liste[isim]"; ?></td> 
<td valig="top"><? $sql2= mysql_query("select * from  kadro  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[baskan]"; }?></td>
	 <td valig="top"><? $sql2= mysql_query("select * from  kadro  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[bolge]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  kadro  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[ofis]"; }?></td>
	 
<td valig="top"><? $sql2= mysql_query("select * from  kadro  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[unvan]"; }?></td>
	 
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  kadro  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[kadro]"; }?></td>
	 
	 
	  <td valig="top"><? echo "$liste[sicil]"; ?>
	  </td>
	 
	 
	 
	
	 
	
	 <td> <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="personeledit.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="personel2delete.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>
	     
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
