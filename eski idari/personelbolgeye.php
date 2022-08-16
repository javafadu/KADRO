<?
session_start();
include 'level2_check.php';
?>
<?
require 'header.php';

include 'includes/datediff.php';

?>
<?
$sql = mysql_query("select * from kadro  where bolge='$bolge' and sicil<>0 order by ofis,unvan  ASC ");

$sqlbos = mysql_query("select * from kadro  where bolge='$bolge' and sicil='0' order by ofis,unvan  ASC ");




$count1 = mysql_query("select COUNT(*) from kadro where bolge='$bolge'  ");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where bolge='$bolge' and sicil<>0 ");
$sayi2 = mysql_fetch_assoc($count2);

$count3 = mysql_query("select COUNT(*) from kadro where bolge='$bolge' and sicil=0 ");
$sayi3 = mysql_fetch_assoc($count3);

$count4 = mysql_query("select COUNT(*) from vekalet where bolge='$bolge' ");
$sayi4 = mysql_fetch_assoc($count4);

$count5 = mysql_query("select COUNT(*) from gecicigorev where bolge='$bolge' ");
$sayi5 = mysql_fetch_assoc($count5);

?>
<br />
<?


echo "<tr>Incelenen Bölge:  <font color='red'><b>$bolge</b></font>  ";

echo "<tr>Norm Kadro:  " .$sayi1['COUNT(*)']. " </tr><br>";
echo "<tr>Personel:  " .$sayi2['COUNT(*)']. " </tr><br>";
echo "<tr>Bos Kadro:  " .$sayi3['COUNT(*)']. " </tr><br>";
echo "<tr>Vekalet Görevli:  " .$sayi4['COUNT(*)']. " </tr><br>";
echo "<tr>Geçici Görevli: ".$sayi5['COUNT(*)']. " </tr><br>";

echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>
<td><b>Ofis</b></td>
<td><b>Ünvan</b></td>

<td><b>Kadro</b></td>
<td><b>Sicil</b></td>
<td><b>Isim</b></td>
<td><b>Kidem Ücr</b></td>
<td><b>Para Brm.</b></td>
<td><b>Ise Bas. Tarih</b></td>
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
  <td valig="top"><? echo "$liste[ofis]"; ?></td>
<td valig="top"><? echo "$liste[unvan]"; ?></td>
	 <td valig="top"><? echo "$liste[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$liste[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[isim]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[kidemucret]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[para]"; }?></td>
	 
	 
	
<td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[bastarihi]"; }?></td>
	 
	
	 <td>
	 <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="personeledit.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="personel2delete.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>
	 
 
	  </td>
</tr>



 
    
	  <div align="center">
        <p>
          <?
   $i=$i+1; 
    }
  ?>
          
          
          </table>
	<? //Buraya Bos Kadroyu Ekliyoru ?>
	<br /><font color="red">Bos Kadro</font>
<?
echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>
<tr>
<td><b>Ofis</b></td>
<td><b>Ünvan</b></td>

<td><b>Kadro</b></td>
<td><b>Sicil</b></td>
<td><b>Isim</b></td>
<td><b>Kidem Ücr</b></td>
<td><b>Para Brm.</b></td>
<td width='20%'></td>
<td><b>Ayrinti</b></td>
</tr>";







?>
<?


$bgcolor1="#FFFFE1";
$bgcolor2="#FFFFFF";
$k=3;

while ($listebos=mysql_fetch_array($sqlbos))

{
if($k%2==0)
  {
  $t=$bgcolor1;
  }
  else
  {
  $t=$bgcolor2;
  }  



 
 
 
  echo "<tr bgcolor=\"$t\">" ?>
  <td valig="top"><? echo "$listebos[ofis]"; ?></td>
<td valig="top"><? echo "$listebos[unvan]"; ?></td>
	 <td valig="top"><? echo "$listebos[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$listebos[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listebos[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[isim]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listebos[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[kidemucret]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listebos[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[para]"; }?></td>
	 
	 
	
	 <td valig="top"><? echo "$listebos[tarih]"; ?></td>
	 
	
	 <td>
	 
<a href="personel3.php?id=<? echo"$listebos[id]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="bosedit.php?id=<? echo"$listebos[id]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="bosdelete.php?id=<? echo"$listebos[id]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>      
	  </td>
</tr>


	 
    
	  <div align="center">
        <p>
          <?
   $k=$k+1; 
    }
  ?>
          
          
          </table>		  
		  <br />
		  
	<? 
	
	//Buraya Vekalet Görevlileri Ekliyoruz ?>
		  
		  <br /><font color="red">Vekalet Görevliler</font>
		  <? 


$sqlc = mysql_query("select * from vekalet  where bolge='$bolge' order by kadro ASC ");



echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'><tr>
<td><b>Ofis</b></td>
<td><b>Vekalet Görevi</b></td>

<td><b>Kadro</b></td>
<td><b>Sicil</b></td>
<td><b>Isim</b></td>
<td><b>Kidem Ücr</b></td>
<td><b>Para Brm.</b></td>
<td><b>Tahsil</b></td>
<td><b>Gör-V.Düzenle-V.Sil</b></td>

</tr>";







?>
<?


$bgcolor1="#FFFFE1";
$bgcolor2="#FFFFFF";
$i=3;

while ($listc=mysql_fetch_array($sqlc))

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
  <td valig="top"><? echo "$listc[ofis]"; ?></td>
<td valig="top"><? echo "$listc[unvan]"; ?></td>
	 <td valig="top"><? echo "$listc[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$listc[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listc[sicil]'=sicil "); 
	 while ($listc2=mysql_fetch_array($sql2)){ 
	 echo "$listc2[isim]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listc[sicil]'=sicil "); 
	 while ($listc2=mysql_fetch_array($sql2)){ 
	 echo "$listc2[kidemucret]"; }?></td>
	 
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listc[sicil]'=sicil "); 
	 while ($listc2=mysql_fetch_array($sql2)){ 
	 echo "$listc2[para]"; }?></td>
	 
	 
	
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$listc[sicil]'=sicil "); 
	 while ($listc2=mysql_fetch_array($sql2)){ 
	 echo "$listc2[tahsil]"; }?></td>
	 
	
	<td>
	 <a href="personel2.php?id=<? echo"$listc[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="vekaletedit.php?id=<? echo"$listc[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="VEKALET DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="vekalet2delete.php?id=<? echo"$listc[sicil]"; ?>"><img src="images/sil.gif" border="0" title="VEKALET SIL"></a>
  
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
					
					 <br /><font color="red">Geçici Görevliler</font>
		  <? 


$sqlg = mysql_query("select * from gecicigorev  where bolge='$bolge' order by ofis,unvan ASC ");


echo "<table width='90%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'><tr>
<td><b>Ofis</b></td>
<td><b>Geçici Görevi</b></td>

<td><b>Kadro</b></td>
<td><b>Sicil</b></td>
<td><b>Isim</b></td>
<td><b>Geçici Göreb Bas. Tar.</b></td>
<td><b>Geçici Göreb Bit. Tar.</b></td>
<td><b>Bitime Kalan Gün</b></td>
<td><b>Gör-Düzenle-Sil-Harcama</b></td>
</tr>";







?>
<?


$bgcolor1="#FFFFE1";
$bgcolor2="#FFFFFF";
$j=3;

while ($listg=mysql_fetch_array($sqlg))

{
if($j%2==0)
  {
  $s=$bgcolor1;
  }
  else
  {
  $s=$bgcolor2;
  }  



 
 
 
  echo "<tr bgcolor=\"$s\">" ?>
  <td valig="top"><? echo "$listg[ofis]"; ?></td>
<td valig="top"><? echo "$listg[unvan]"; ?></td>
	 <td valig="top"><? echo "$listg[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$listg[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql18= mysql_query("select * from  personel  where sicil='$listg[sicil]' "); 
	 while ($listg18=mysql_fetch_array($sql18)){ 
	 echo "$listg18[isim]"; }?></td>
	 
	 <td valig="top"><? echo "$listg[bastarih]"; ?>
	 	
	  <td valig="top"><? echo "$listg[bittarih]"; ?>
	  
	  <td valig="top" align="center"><? datediff("$listg[bittarih]"); ?></td>
	 <td>
	
	 <td>
	 
	  <a href="personel2.php?id=<? echo"$listg[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="geciciedit.php?id=<? echo"$listg[id]"; ?>"><img src="images/duzenle.gif" border="0" title="GEÇICI DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="gecici2delete.php?id=<? echo"$listg[id]"; ?>"><img src="images/sil.gif" border="0" title="GEÇICI SIL"></a>
	  &nbsp;&nbsp;
	 <a href="harcamalar2.php?id=<? echo"$listg[id]"; ?>"><img src="images/harcamalar.jpg" border="0" title="HARCAMALAR"></a>    
	  </td>
	 
	 
</tr>
	 
	 
    
	  <div align="center">
        <p>
          <?
   $j=$j+1; 
    }
  ?>
          
          
          </table>
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
