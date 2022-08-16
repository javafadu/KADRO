<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";
include "includes/datediff.php";
?>
<?

$bak1=mysql_query("select * from ofislist where sehir_kod='$ofis' ");
while ($dene=mysql_fetch_array($bak1))
{
$ulke=$dene[ofisulke1];
}


if($ulke=='TURKEY')
{
$sql = mysql_query("select * from kadro  where ofis='$ofis' and sicil<>0 and sozpart not like '%art%' order by unvan  ASC ");
}
else
{
$sql = mysql_query("select * from kadro  where ofis='$ofis' and sicil<>0  order by kadro,unvan  ASC ");
}

if($ulke=='TURKEY')
{
$sqlbos = mysql_query("select * from kadro  where ofis='$ofis' and sicil='0' order by unvan,kadro  ASC ");

}
else
{
$sqlbos = mysql_query("select * from kadro  where ofis='$ofis' and sicil='0' order by kadro,unvan  ASC ");
}



if($ulke=='TURKEY')
{
$sqlpart = mysql_query("select * from kadro  where ofis='$ofis' and sicil<>0 and sozpart like '%art%' order by kadro  ASC ");
}
else
{
$sqlpart = mysql_query ("select * from kadro sozpart like 'sadsdasdas' ");
}

$ofisbul = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

if($ulke=='TURKEY')
{
$count1 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sozpart not like '%art%' ");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sicil<>0 and sozpart  not like '%art%' ");
$sayi2 = mysql_fetch_assoc($count2);
}

else
{
$count1 = mysql_query("select COUNT(*) from kadro where ofis='$ofis'  ");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sicil<>0 ");
$sayi2 = mysql_fetch_assoc($count2);
}

$count3 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sicil=0 ");
$sayi3 = mysql_fetch_assoc($count3);

$count4 = mysql_query("select COUNT(*) from vekalet where ofis='$ofis' ");
$sayi4 = mysql_fetch_assoc($count4);

$count5 = mysql_query("select COUNT(*) from gecicigorev where ofis='$ofis' ");
$sayi5 = mysql_fetch_assoc($count5);

$count6 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sozpart like '%art%' ");
$sayi6 = mysql_fetch_assoc($count6);
?>
<br />

<table width="95%" border="1" cellpadding="1" cellspacing="1" bordercolor="#f4f4f4">
<tr>



<?

echo "<td align='center' width='33%' bgcolor='#FFFFD9'><font color='red'><b>$ofis</b></font>  "; 

while ($listeofis=mysql_fetch_array($ofisbul))
{

$ulke=$listeofis[ofisulke];
$ulken=$listeofis[ofisulke1];
$turu=$listeofis[tur];
$bagi=$listeofis[bag];
$kodu=$listeofis[sehir_kod];

if($ulken<>"TURKEY")
{
echo "<font color='red'><b>($listeofis[ofis_sehir])</b></font><br>"; 
}
else
{
echo"<br>";
}
echo"Hattin Türü: <b>$turu</b><br>";

if($listeofis[bag]<>'a')
{
echo"Bagli Bulundugu Müdürlük <a href='personelofise.php?ofis=$bagi'><b>$bagi</b></a><br>";
}
else
{
}
if($bagi=="a")
{
echo"Seflikleri :";
$sqlbagli=mysql_query("select * from ofislist where bag='$kodu' ");
while($listebagli=mysql_fetch_array($sqlbagli))
{
echo"<a href='personelofise.php?ofis=$listebagli[sehir_kod]'><b>$listebagli[sehir_kod]</b></a> - ";
}
}
else
{
}





}



echo "<br>Norm Kadro:  " .$sayi1['COUNT(*)']. " <br>";
echo "Personel:  " .$sayi2['COUNT(*)']. " <br>";
echo "Bos Kadro:  " .$sayi3['COUNT(*)']. " <br>";
echo "Part Time:  " .$sayi6['COUNT(*)']. " <br>";
echo "Vekalet Görevli:  " .$sayi4['COUNT(*)']. " <br>";
echo "Geçici Görevli: ".$sayi5['COUNT(*)']. " <br></td>";

?>

<td width="33%" bgcolor="#FFFFD9" align="center" valign="top"><form id="form1" name="form1" method="post" action="bilgigir2.php?ofis=<? echo"$ofis"; ?> ">
  <label>
  <textarea name="bilgi" rows="5" cols="30"></textarea>
  </label>
  <label>   <input type="submit" name="Submit" value="Bilgi Gir" />
  </label><br />Girilen Bilgi Sag Tarafta Görünecektir.
</td></form>

<td width="33%" valign="top" bgcolor="#FFFFD9">

<?


$ofisaciklama=mysql_query("select * from ofisaciklama where kod='$ofis' ");
while($sqlliste=mysql_fetch_array($ofisaciklama))
{
echo"<li>$sqlliste[bilgi]</li>";



?>
<?
if($sqlliste[kod]==$ofis)
{
?>
<font color="brown"><a href="bilgisil.php?id=<? echo"$sqlliste[id]"; ?>&ofis=<? echo"$ofis"; ?>"><u>(SIL)</u></a></font>
<?
}
else
{
}

}?>
</td>
</tr>

</table>

<?
echo "<table width='95%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr bgcolor='#9999FF'>


<td><b><font color='#FFFFFF'>Ünvan</b></td>

<td><b><font color='#FFFFFF'>Kadro</b></td>
<td><b><font color='#FFFFFF'>Sicil</b></td>
<td><b><font color='#FFFFFF'>Isim</b></td>

<td><b><font color='#FFFFFF'>Kdr-Soz</b></td>

<td><b><font color='#FFFFFF'>Ek-Görev</b></td>
<td><b><font color='#FFFFFF'>Çalistigi Yer</b></td>



<td><b><font color='#FFFFFF'>Söz Bs. Tr</b></td>
<td><b><font color='#FFFFFF'>Söz Bt. Tr</b></td>


<td><b><font color='#FFFFFF'>Gör-Düzenle-Sil-Tasi</b></td>
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


if($liste[durum]=='Vekil')
{
$dr='#D9FFFF';

}
else if($liste[durum]=='Geçici Görevli')
{
$dr='#FED7CB';

}
else if($liste[durum]=='Izinli')
{
$dr='#FFFF00';

}
else
{
$dr=$s;
$link='';
}
 
 
  echo "<tr bgcolor=\"$s\">" ?>
 
<td valig="top"><? echo "$liste[unvan]"; ?></td>

	 <td valig="top"><? echo "$liste[kadro]"; ?>
</td>


<td valig="top"><? echo "$liste[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[isim]"; }?></td>
<td valig="top"><? echo "$liste[sozpart]"; ?>
</td>



  	 <td valig="top" bgcolor="<? echo"$dr"; ?>"><a  title=" <?



$vekildurum=mysql_query("select * from vekalet where sicil='$liste[sicil]' ");
while($vl=mysql_fetch_array($vekildurum))
{
echo" $vl[unvan], Vekalet Ofisi : $vl[ofis]";
}
$gecicidurum=mysql_query("select * from gecicigorev where sicil='$liste[sicil]' ");
while($gl=mysql_fetch_array($gecicidurum))
{
echo" $gl[unvan], Geçic Görev Ofisi : $gl[ofis]";
}
$izindurum=mysql_query("select * from izingorev where sicil='$liste[sicil]' ");
while($il=mysql_fetch_array($izindurum))
{
echo" $il[izintur], Izin Nedeni : $il[izinneden]";
}
?>"><? echo "$liste[durum]"; ?>
</td>
	
	<td valig="top"><? echo "$liste[yer]"; ?></td>
	
	  
	 
	 
	 
	
	

	 
	 <td valig="top"><? echo "$liste[sozbas]"; ?>
	 <td valig="top"><? echo "$liste[sozbit]"; ?>
	 
	
	 <td>
	 <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="personeledit.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="personel2delete.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>
     &nbsp;&nbsp;
	 <a href="personel1tasi.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/tasi.gif" border="0" title="TASI"></a>
     
</td>
</tr>




	 
    
	  <div align="center">
        <p>
          <?
   $i=$i+1; 
    }
  ?>
          
       <tr bgcolor="#FFFFFF"></tr>   
        <tr bgcolor="#FFFFFF"></tr>   
	<? //Buraya Bos Kadroyu Ekliyoruz ?>
	

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

<td valig="top"><? echo "$listebos[unvan]"; ?></td>
  	
	 <td valig="top"><? echo "$listebos[kadro]"; ?>
</td>
	
	  	 <td valig="top">
</td>
	  	 <td valig="top">
</td>
	  	 <td valig="top">
</td>

  	 <td valig="top">
</td>
  	 <td valig="top">
</td>
	  
	 	 <td valig="top">
</td>
	 
	
	 <td></td>
	 
	
	 <td>
	 
<a href="personel3.php?id=<? echo"$listebos[id]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="bosedit.php?id=<? echo"$listebos[id]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="bosdelete.php?id=<? echo"$listebos[id]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>    
</td>
</tr>
</form>

	 
    
	  <div align="center">
        <p>
          <?
   $k=$k+1; 
    }
  ?>
          
          <tr bgcolor="#FFFFFF"></tr>   
        <tr bgcolor="#FFFFFF"></tr>   
         
		  
	<? //Buraya Part Time  Kadroyu Ekliyoruz ?>
	
<?

while ($listepart=mysql_fetch_array($sqlpart))

{
if($i%2==0)
  {
  $s=$bgcolor1;
  }
  else
  {
  $s=$bgcolor2;
  }  


if($liste[durum]=='Vekil')
{
$dr='#D9FFFF';

}
else if($liste[durum]=='Geçici Görevli')
{
$dr='#FED7CB';

}
else if($liste[durum]=='Izinli')
{
$dr='#FFFF00';

}
else
{
$dr=$s;
$link='';
}
 
 
  echo "<tr bgcolor=\"$s\">" ?>
  
<td valig="top"><? echo "$listepart[unvan]"; ?></td>

	 <td valig="top"><? echo "$listepart[kadro]"; ?>
</td>

<td valig="top"><? echo "$listepart[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql23= mysql_query("select * from  personel  where '$listepart[sicil]'=sicil "); 
	 while ($liste222=mysql_fetch_array($sql23)){ 
	 echo "$liste222[isim]"; }?></td>
	 
	 
	 
<td valig="top"><? echo "$listepart[sozpart]"; ?>
</td>



  	 <td valig="top" bgcolor="<? echo"$dr"; ?>"><a  title="<?



$vekildurum=mysql_query("select * from vekalet where sicil='$listepart[sicil]' ");
while($vl=mysql_fetch_array($vekildurum))
{
echo" $vl[unvan], Vekalet Ofisi : $vl[ofis]";
}
$gecicidurum=mysql_query("select * from gecicigorev where sicil='$listepart[sicil]' ");
while($gl=mysql_fetch_array($gecicidurum))
{
echo" $gl[unvan], Geçic Görev Ofisi : $gl[ofis]";
}

?>"><? echo "$listepart[durum]"; ?>
</td>
	
	  <td valig="top"><? echo "$listepart[yer]"; ?></td>
	 
	 


	 
	 <td valig="top"><? echo "$listepart[sozbas]"; ?>
	 <td valig="top"><? echo "$listepart[sozbit]"; ?>
	 
	
	 <td>
	 <a href="personel2.php?id=<? echo"$listepart[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a>
	 &nbsp;&nbsp;
	 <a href="personeledit.php?id=<? echo"$listepart[sicil]"; ?>"><img src="images/duzenle.gif" border="0" title="DÜZENLE"></a>
	 &nbsp;&nbsp;
	 <a href="personel2delete.php?id=<? echo"$listepart[sicil]"; ?>"><img src="images/sil.gif" border="0" title="SIL"></a>

     
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
	
	<? //Buraya Vekalet Görevlileri Ekliyoruz ?>
		  
		  <br /><font color="red">Vekalet Görevliler</font>
		  <? 


$sqlc = mysql_query("select * from vekalet  where ofis='$ofis' order by kadro ASC ");


echo "<table width='100%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'><tr>
<td><b>Vekalet Görevi</b></td>

<td><b>Kadro</b></td>
<td><b>Sicil</b></td>
<td><b>Isim</b></td>
<td><b>Kidem Ücr</b></td>
<td><b>Para Brm.</b></td>
<td><b>Tahsil</b></td>
<td><b>Gör-Düzenle-Sil</b></td>

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
			<? //GEÇICI GÖREVLILERI BURAYA EKLIYORUZ ?>
					
					 <br /><font color="red">Geçici Görevliler</font>
		  <? 


$sqlg = mysql_query("select * from gecicigorev  where ofis='$ofis' order by unvan ASC ");


echo "<table width='100%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'><tr>
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
<td valig="top"><? echo "$listg[unvan]"; ?></td>
	 <td valig="top"><? echo "$listg[kadro]"; ?>
</td>
	  <td valig="top"><? echo "$listg[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql3= mysql_query("select * from  personel  where '$listg[sicil]'=sicil "); 
	 while ($listg2=mysql_fetch_array($sql3)){ 
	 echo "$listg2[isim]"; }?></td>
	 
	 <td valig="top"><? echo "$listg[bastarih]"; ?>
	 	
<td valig="top"><? echo "$listg[bittarih]"; ?>
	  
<td valig="top" align="center"><? datediff("$listg[bittarih]"); ?></td>
	
	
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
