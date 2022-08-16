<?

session_start();

?>
<?




require "header.php";
include "level3_check.php";
include "baglanti.php";


$count = mysql_query("select COUNT(*) from degisiklikler");
$sayi = mysql_fetch_assoc($count);





echo "<center>Sistemde Bulunan Sayis:  <font color='red'>" .$sayi['COUNT(*)']. "</font> </tr><br>";
?>
<table width='85%' bgcolor='EFEFEF' align='center' border='0'>
  <tr bgcolor='#CDCDCD'> </tr>
  <tr>
    <td><a href='degisiklikler.php?order=tarih'><b>Tarih</b></a></td>
    <td><a href='degisiklikler.php?order=saat'><b>Saat</b></a></td>
    <td><a href='degisiklikler.php?order=konu'><b>Konu</b></a></td>
    <td><a href='degisiklikler.php?order=konu2'><b>Sicil</b></a></td>
    <td><a href='degisiklikler.php?order=ofis'><b>Ofis</b></a></td>
    <td align='center' width="60"><a href='degisiklikler.php?order=kisi'><b>Degisiklik Yapan</b></a></td>
  </tr>
  <?
include "baglanti.php";


if(isset($order))
{
$sql = mysql_query("select * from degisiklikler order by '$order' DESC ");
}
else
{
$sql= mysql_query("select * from degisiklikler order by tarih,saat DESC ");
}

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

?>
  <? echo "<tr bgcolor=\"$s\">" ?>
  <td><? echo "$liste[tarih]"; ?></td>
      <td><? echo "$liste[saat]"; ?></td>
    <td ><? echo "$liste[konu]"; ?></td>
    <td><? echo "$liste[konu2]"; ?></td>
    <td><? echo "$liste[ofis]"; ?></td>
    <td align="center"><? echo "$liste[kisi]"; ?></td>
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
