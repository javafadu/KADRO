<?
session_start();
?>
<?
include "level2_check.php";
require "header.php";


?>
<center>
<table width="55%" border="1" bgcolor="#FFFFFF">
  <tr>
    <td><div align="center"><br />
            <a href="personelliste.php?sayfa=1">1</a> - <a href="personelliste.php?sayfa=2&amp;order=<? echo"$order"; ?>&sira=100">2</a> -<a href="personelliste.php?sayfa=3&amp;order=<? echo"$order"; ?>&sira=200">3</a> -<a href="personelliste.php?sayfa=4&amp;order=<? echo"$order"; ?>&sira=300">4</a> -
			<a href="personelliste.php?sayfa=5&amp;order=<? echo"$order"; ?>&sira=400">5</a> -
			<a href="personelliste.php?sayfa=6&amp;order=<? echo"$order"; ?>&sira=500">6</a> -<a href="personelliste.php?sayfa=7&amp;order=<? echo"$order"; ?>&sira=600">7</a> - <a href="personelliste.php?sayfa=8&amp;order=<? echo"$order"; ?>&sira=700">8</a> - <a href="personelliste.php?sayfa=9&amp;order=<? echo"$order"; ?>&sira=800">9</a>- <a href="personelliste.php?sayfa=10&amp;order=<? echo"$order"; ?>&sira=900">10</a>- <a href="personelliste.php?sayfa=11&amp;order=<? echo"$order"; ?>&sira=1000">11</a>- <a href="personelliste.php?sayfa=13&amp;order=<? echo"$order"; ?>&sira=1100">12</a>- <a href="personelliste.php?sayfa=14&amp;order=<? echo"$order"; ?>&sira=1200">13</a>- <a href="personelliste.php?sayfa=15&amp;order=<? echo"$order"; ?>&sira=1300">14</a>- <a href="personelliste.php?sayfa=16&amp;order=<? echo"$order"; ?>&sira=1400">15</a>- <a href="personelliste.php?sayfa=17&amp;order=<? echo"$order"; ?>&sira=1500">16</a>- <a href="personelliste.php?sayfa=18&amp;order=<? echo"$order"; ?>&sira=1600">17</a>- <a href="personelliste.php?sayfa=19&amp;order=<? echo"$order"; ?>&sira=1700">18</a>- <a href="personelliste.php?sayfa=20&amp;order=<? echo"$order"; ?>&sira=1800">19</a>- <a href="personelliste.php?sayfa=21&amp;order=<? echo"$order"; ?>&sira=1900">20</a>- <a href="personelliste.php?sayfa=22&amp;order=<? echo"$order"; ?>&sira=2000">21</a>- <a href="personelliste.php?sayfa=23&amp;order=<? echo"$order"; ?>&sira=2100">22</a>- <a href="personelliste.php?sayfa=24&amp;order=<? echo"$order"; ?>&sira=2200">23</a>- <a href="personelliste.php?sayfa=25&amp;order=<? echo"$order"; ?>&sira=2300">24</a>- <a href="personelliste.php?sayfa=26&amp;order=<? echo"$order"; ?>&sira=2400">25</a>- <a href="personelliste.php?sayfa=27&amp;order=<? echo"$order"; ?>&sira=2500">26</a>- <a href="personelliste.php?sayfa=28&amp;order=<? echo"$order"; ?>&sira=2600">27</a>- <a href="personelliste.php?sayfa=29&amp;order=<? echo"$order"; ?>&sira=2700">28</a>- <a href="personelliste.php?sayfa=30&amp;order=<? echo"$order"; ?>&sira=2800">29</a>- <a href="personelliste.php?sayfa=31&amp;order=<? echo"$order"; ?>&sira=2900">30</a> <br />
        <a href="personelliste.php?sayfa=12">Tum Personel (Ge&ccedil; A&ccedil;&#305;labilir)</a></div></td>
  </tr>
</table>

<?


$count1 = mysql_query("select COUNT(*) from personel");
$sayi1 = mysql_fetch_assoc($count1);
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />


<br /><br />
<?
echo "<tr bgcolor='white'>Sistemde Kayitli Personel Sayisi:<font color='red'>  " .$sayi1['COUNT(*)']. " </font></tr><br><br>";

echo "<table width='70%' bgcolor='EFEFEF' align='center' border='1' bordercolor='#CCCCCC'><tr bgcolor='#CDCDCD'>";
echo"<tr>
<td><b>Sira</b></td>

<td><a href='personelliste.php?order=ofis'><b>Ofis</b></a></td>
<td><a href='personelliste.php?order=unvan'><b>Ünvan</b></a></td>
<td><a href='personelliste.php?order=sicil'><b>Sicil</b></td>
<td><b>Isim</b></a></td>
<td><b>Bilgi</b></td>

</tr>";




if($sayfa==1)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 0,100");
}
elseif ($sayfa==2)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 100,100");
}

elseif ($sayfa==3)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 200,100");
}
elseif($sayfa==4)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 300,100");
}
elseif($sayfa==5)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 400,100");
}
elseif($sayfa==6)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 500,100");
}
elseif($sayfa==7)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 600,100");
}
elseif($sayfa==8)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 700,100");
}
elseif($sayfa==9)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 800,100");
}
elseif($sayfa==10)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 900,100");
}
elseif($sayfa==11)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1000,100");
}
elseif($sayfa==12)
{
$sql = mysql_query("select * from kadro where sicil<>0  ");
}
elseif($sayfa==13)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1100,100");
}
elseif($sayfa==14)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1200,100");
}
elseif($sayfa==15)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1300,100");
}
elseif($sayfa==16)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1400,100");
}
elseif($sayfa==17)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1500,100");
}
elseif($sayfa==18)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1600,100");
}
elseif($sayfa==19)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1700,100");
}
elseif($sayfa==20)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1800,100");
}
elseif($sayfa==21)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 1900,100");
}
elseif($sayfa==22)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2000,100");
}
elseif($sayfa==23)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2100,100");
}
elseif($sayfa==24)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2200,100");
}
elseif($sayfa==25)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2300,100");
}
elseif($sayfa==26)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2400,100");
}
elseif($sayfa==27)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2500,100");
}
elseif($sayfa==28)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2600,100");
}
elseif($sayfa==29)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2700,100");
}
elseif($sayfa==30)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2800,100");
}
elseif($sayfa==31)
{
$sql = mysql_query("select * from kadro where sicil<>0 order by '$order' ASC LIMIT 2900,100");
}
else
{
$sql = mysql_query("select * from kadro  where sicil<>0 order by '$order' ASC LIMIT 0,100 ");
}




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
     <td valig="top" bgcolor="#f4f4f4"><? echo "$sira"; ?></td> <? $sira=$sira+1; ?>

	  <td valig="top"><? echo "$liste[ofis]"; ?></td>
	  <td valig="top"><? echo "$liste[unvan]"; ?></td>
      <td valig="top"><? echo "$liste[sicil]"; ?></td>
	 <td valig="top">
	 <? $sql2= mysql_query("select * from  personel  where '$liste[sicil]'=sicil "); 
	 while ($liste2=mysql_fetch_array($sql2)){ 
	 echo "$liste2[isim]"; }?> </td>
	  
	 
	
	 <td>
	 <a href="personel2.php?id=<? echo"$liste[sicil]"; ?>"><img src="images/bilgi.gif" border="0" title="AYRINTILI BILGI"></a> 
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
        
</div> </p>
<table width="55%" border="1" bgcolor="#FFFFFF">
  <tr>
    <td><div align="center"><br />
            <a href="personelliste.php?sayfa=1">1</a> - <a href="personelliste.php?sayfa=2&amp;order=<? echo"$order"; ?>&amp;sira=100">2</a> -<a href="personelliste.php?sayfa=3&amp;order=<? echo"$order"; ?>&amp;sira=200">3</a> -<a href="personelliste.php?sayfa=4&amp;order=<? echo"$order"; ?>&amp;sira=300">4</a> - <a href="personelliste.php?sayfa=5&amp;order=<? echo"$order"; ?>&amp;sira=400">5</a> - <a href="personelliste.php?sayfa=6&amp;order=<? echo"$order"; ?>&amp;sira=500">6</a> -<a href="personelliste.php?sayfa=7&amp;order=<? echo"$order"; ?>&amp;sira=600">7</a> - <a href="personelliste.php?sayfa=8&amp;order=<? echo"$order"; ?>&amp;sira=700">8</a> - <a href="personelliste.php?sayfa=9&amp;order=<? echo"$order"; ?>&amp;sira=800">9</a>- <a href="personelliste.php?sayfa=10&amp;order=<? echo"$order"; ?>&amp;sira=900">10</a>- <a href="personelliste.php?sayfa=11&amp;order=<? echo"$order"; ?>&amp;sira=1000">11</a>- <a href="personelliste.php?sayfa=13&amp;order=<? echo"$order"; ?>&amp;sira=1100">12</a>- <a href="personelliste.php?sayfa=14&amp;order=<? echo"$order"; ?>&amp;sira=1200">13</a>- <a href="personelliste.php?sayfa=15&amp;order=<? echo"$order"; ?>&amp;sira=1300">14</a>- <a href="personelliste.php?sayfa=16&amp;order=<? echo"$order"; ?>&amp;sira=1400">15</a>- <a href="personelliste.php?sayfa=17&amp;order=<? echo"$order"; ?>&amp;sira=1500">16</a>- <a href="personelliste.php?sayfa=18&amp;order=<? echo"$order"; ?>&amp;sira=1600">17</a>- <a href="personelliste.php?sayfa=19&amp;order=<? echo"$order"; ?>&amp;sira=1700">18</a>- <a href="personelliste.php?sayfa=20&amp;order=<? echo"$order"; ?>&amp;sira=1800">19</a>- <a href="personelliste.php?sayfa=21&amp;order=<? echo"$order"; ?>&amp;sira=1900">20</a>- <a href="personelliste.php?sayfa=22&amp;order=<? echo"$order"; ?>&amp;sira=2000">21</a>- <a href="personelliste.php?sayfa=23&amp;order=<? echo"$order"; ?>&amp;sira=2100">22</a>- <a href="personelliste.php?sayfa=24&amp;order=<? echo"$order"; ?>&amp;sira=2200">23</a>- <a href="personelliste.php?sayfa=25&amp;order=<? echo"$order"; ?>&amp;sira=2300">24</a>- <a href="personelliste.php?sayfa=26&amp;order=<? echo"$order"; ?>&amp;sira=2400">25</a>- <a href="personelliste.php?sayfa=27&amp;order=<? echo"$order"; ?>&amp;sira=2500">26</a>- <a href="personelliste.php?sayfa=28&amp;order=<? echo"$order"; ?>&amp;sira=2600">27</a>- <a href="personelliste.php?sayfa=29&amp;order=<? echo"$order"; ?>&amp;sira=2700">28</a>- <a href="personelliste.php?sayfa=30&amp;order=<? echo"$order"; ?>&amp;sira=2800">29</a>- <a href="personelliste.php?sayfa=31&amp;order=<? echo"$order"; ?>&amp;sira=2900">30</a> <br />
        <a href="personelliste.php?sayfa=12">Tum Personel (Ge&ccedil; A&ccedil;&#305;labilir)</a></div></td>
  </tr>
</table>
<p><br>
          <br>
          <center>
          
          
          <br>
          <br>
          </body>
          </html>
</p>
</div>
