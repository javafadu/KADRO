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
$kisi = $_SESSION['username'];


$bak1=mysql_query("select * from ofislist where sehir_kod='$ofis' ");
while ($dene=mysql_fetch_array($bak1))
{
$ulke=$dene[ofisulke1];
}



$sql = mysql_query("select * from kadro  where ofis='$ofis' and sicil<>0  order by kadro,unvan  ASC ");



$sqlbos = mysql_query("select * from kadro  where ofis='$ofis' and sicil='0' order by kadro,unvan  ASC ");




$ofisbul = mysql_query("select * from ofislist where sehir_kod='$ofis' ");




$count1 = mysql_query("select COUNT(*) from kadro where ofis='$ofis'  ");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sicil<>0 ");
$sayi2 = mysql_fetch_assoc($count2);


$count3 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sicil=0 ");
$sayi3 = mysql_fetch_assoc($count3);

$count4 = mysql_query("select COUNT(*) from vekalet where ofis='$ofis' and durum=1");
$sayi4 = mysql_fetch_assoc($count4);

$count5 = mysql_query("select COUNT(*) from gecicigorev where ofis='$ofis' and status=1 ");
$sayi5 = mysql_fetch_assoc($count5);

$count6 = mysql_query("select COUNT(*) from kadro where ofis='$ofis' and sozpart like '%art%' ");
$sayi6 = mysql_fetch_assoc($count6);
?>
<br />

<table width="95%" border="1" cellpadding="1" cellspacing="1" bordercolor="#f4f4f4">
<tr>



<?

echo "<td align='center' width='33%' bgcolor='#FFFFFF' valign='top'><font color='red'><b>$ofis</b></font>  "; 

$ofisbul=mysql_query("select * from ofislist where sehir_kod='$ofis' ");
while ($listeofis=mysql_fetch_array($ofisbul))
{

$ulke=$listeofis[ofisulke];
$ulken=$listeofis[ofisulke1];
$turu=$listeofis[tur];
$bagi=$listeofis[bag];
$kodu=$listeofis[sehir_kod];
$sehir=$listeofis[ofis_sehir];

echo"<font color='red'>($sehir)</font><br>";

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
echo"<a href='personelofise.php?ofis=$listebagli[sehir_kod]'><b>$listebagli[sehir_kod]</b></a> ";
}
}
else
{

}
echo"<br>";




}


?>
<table border="1" align="center" bordercolor="#99CCCC" width="95%"><tr><td>
<?

echo "Norm Kadro:  " .$sayi1['COUNT(*)']. " <br>";
echo "Personel:  " .$sayi2['COUNT(*)']. " <br>";
echo "Bos Kadro:  " .$sayi3['COUNT(*)']. " <br>";
echo "Part Time:  " .$sayi6['COUNT(*)']. " <br>";


?>
</td>
<td valign="top">
<?
echo "Vekalet Görevli:  " .$sayi4['COUNT(*)']. " <br>";
echo "Geçici Görevli: ".$sayi5['COUNT(*)']. " <br></td>";
?></tr></table>


<td width="33%" bgcolor="#FFFFFF" align="center" valign="top"><form id="form1" name="form1" method="post" action="bilgigir2.php?ofis=<? echo"$ofis"; ?> ">
  <label>
  <textarea name="bilgi" rows="5" cols="40"></textarea>
  <input type="submit" name="Submit" value="Bilgi Gir" />
  </label>
  <label></label>
  <p align="left">
</form></td>

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

}?></td>
</tr></table>



<table width="50%">


<?
  $sqlc = mysql_query("select * from vekalet  where ofis='$ofis' and durum=1");
  while ($listc=mysql_fetch_array($sqlc))

{
?>
<tr bgcolor="#FFFFFF">
<td bgcolor="#FFFFFF" width="320">
<?
echo"<b>Vekalet:</b> $listc[unvan] - $listc[sicil] ";
$sql222= mysql_query("select * from  personel  where '$listc[sicil]'=sicil "); 
	 while ($listc222=mysql_fetch_array($sql222)){ 
	 echo "$listc222[isim] "; }
 ?> 
 </td><td>
 
 <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/listevekalet.php';
         echo "</select> ";
?>
 
 </td></tr>
	 
 <?

}
  
  ?>
  </table>
  <table width="50%">

   <? 


$sqlg = mysql_query("select * from gecicigorev  where ofis='$ofis' and status=1 ");




while ($listg=mysql_fetch_array($sqlg))

{
?>
<tr bgcolor="#FFFFFF">
<td bgcolor="#FFFFFF" width="320">
<?
echo"<b>Geçici:</b> $listg[unvan] - $listg[sicil] ";
$sql2222= mysql_query("select * from  personel  where '$listg[sicil]'=sicil "); 
	 while ($listc2222=mysql_fetch_array($sql2222)){ 
	 echo "$listc2222[isim] "; }
 ?></td>
 <td bgcolor="#FFFFFF">
 <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/listegecici.php';
         echo "</select> ";
?>
	 </td></tr>


<?

}

?>
</table>


<?
echo "<table width='95%' bgcolor='EFEFEF' align='center' border='1' cellpadding='1' cellspacing='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr bgcolor='#9999FF'>


<td><b><font color='#FFFFFF'>Ünvan</b></td>

<td><b><font color='#FFFFFF'>Kadro</b></td>
<td><b><font color='#FFFFFF'>Sicil</b></td>
<td><b><font color='#FFFFFF'>Isim</b></td>

<td><b><font color='#FFFFFF'>Kdr-Soz</b></td>
<td><b><font color='#FFFFFF'>Mrkz-Mhlli</b></td>
<td><b><font color='#FFFFFF'>Ek-Görev</b></td>
<td><b><font color='#FFFFFF'>Çalistigi Yer</b></td>
<td><b><font color='#FFFFFF'>Kidem Ücrt</b></td>
<td><b><font color='#FFFFFF'>Para Br</b></td>


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

else if($liste[durum]=='Bilgi')
{
$dr='#B7FFDB';

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
	 echo "$liste2[isim]"; ?></td>
<td valig="top"><? echo "$liste[sozpart]"; ?>
</td>
<td valig="top"><? echo "$liste[mahmer]"; ?>
</td>


  	 <td valig="top" bgcolor="<? echo"$dr"; ?>"><a  title=" <?



$vekildurum=mysql_query("select * from vekalet where sicil='$liste[sicil]' and durum=1");
while($vl=mysql_fetch_array($vekildurum))
{
echo" $vl[unvan], Vekalet Ofisi : $vl[ofis]";
}
$gecicidurum=mysql_query("select * from gecicigorev where sicil='$liste[sicil]' and status=1");
while($gl=mysql_fetch_array($gecicidurum))
{
echo" $gl[unvan], Geçic Görev Ofisi : $gl[ofis]";
}
$izindurum=mysql_query("select * from izingorev where sicil='$liste[sicil]' ");
while($il=mysql_fetch_array($izindurum))
{
echo" $il[izintur], Izin Nedeni : $il[izinneden]";
}
echo"$liste2[bilgi]"; }
?>"><? echo "$liste[durum]"; ?>
</td>
	
	<td valig="top"><? echo "$liste[yer]"; ?></td>
	
	  
	 
	 <td valig="top"><? $sql22= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste22=mysql_fetch_array($sql22)){ 
	 echo "$liste22[kidemucret]"; ?></td>
	 
	 <td valig="top"><? echo "$liste22[para]"; }?></td>
	 
	
	

	 
	 <td valig="top"><? echo "$liste[sozbas]"; ?>
	
	
	<?
	if($liste[sozbit]<=$tarih and $liste[sozbit]<>0)
	{
	$dd="#FFC1C1";
	
	}
	else
	{
	$dd=$s;
	
	}
	?>
	
	 <td valig="top" bgcolor="<? echo"$dd"; ?>"><?
	 
	 echo "$liste[sozbit]"; ?>
	 
	
	 <td align="center">
	      <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/liste.php';
         echo "</select> ";
?>
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
	  	 <td valig="top">
</td>
	  
	 
	 
	
	 <td></td>
	 <td></td>
	 <td></td>
	 
	
	 <td align="center">
	 
	  <?
		echo "<select name=\"secenekler\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Seçenekler</option> ";
        include 'includes/listebos.php';
         echo "</select> ";
?>
	  
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
/*
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
<td valig="top"><? echo "$listepart[yer]"; ?></td>
	 <td valig="top"><? echo "$listepart[kadro]"; ?>
</td>
<td valig="top"><? echo "$listepart[sozpart]"; ?>
</td>
<td valig="top"><? echo "$listepart[mahmer]"; ?>
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
	
	  <td valig="top"><? echo "$listepart[sicil]"; ?>
	  </td>
	 <td valig="top"><? $sql23= mysql_query("select * from  personel  where '$listepart[sicil]'=sicil "); 
	 while ($liste222=mysql_fetch_array($sql23)){ 
	 echo "$liste222[isim]"; }?></td>
	 
	 
	 
	
	

	 
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
*/  ?>
          
          
          </table>		  
		  <br />
	

		  
		 
	
			<? //GEÇICI GÖREVLILERI BURAYA EKLIYORUZ ?>
					
					
	 
	
	 
 
          
        
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
