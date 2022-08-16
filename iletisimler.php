<?
session_start();
include "level4_check.php";
require "header.php";
?>




<?


$count = mysql_query("select COUNT(*) from iletisim");
$sayi = mysql_fetch_assoc($count);





echo "<center>Gönderilmis istek-öneri-görüs sayisi:  <font color='red'>" .$sayi['COUNT(*)']. "</font> </tr><br>";
?>


<table width='80%' bgcolor='EFEFEF' align='center' border='0'><tr bgcolor='#CDCDCD'>

<tr>

<td><a href='iletisimler.php?order=date'><b>Tarih</b></a></td>
<td><a href='iletisimler.php?order=time'><b>Saat</b></a></td>
<td><a href='iletisimler.php?order=user'><b>Kimden</b></a></td>
<td><a href='iletisimler.php?order=kime'><b>Kime</b></a></td>
<td><a href='iletisimler.php?order=konu'><b>Konu</b></a></td>
<td><a href='iletisimler.php?order=icerik'><b>Içerik</b></a></td>
<td>Sil</td>
</tr>

  
  <?
include "baglanti.php";


if(isset($order))
{
$sql = mysql_query("select * from iletisim order by '$order' DESC ");
}
else
{
$sql= mysql_query("select * from iletisim order by date,time DESC ");
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
  

<td><? echo "$liste[date]"; ?></td>
<td><? echo "$liste[time]"; ?></td>
<td ><? echo "$liste[user]"; ?></td>
<td ><? echo "$liste[kime]"; ?></td>
<td><? echo "$liste[konu]"; ?></td>	
<td><? echo "$liste[icerik]"; ?></td>  
<td>
<form action="iletisimdelete.php?onay=<? echo"$liste[id]"; ?> " method="post" name="3">
	  
	  <input name="submit" type="submit" value="Sil" />     
	  </td></form> 
</tr>
	 
	 
    
	<?
   $i=$i+1; 
    }
  ?>


</table><br><br><center>

 
<br>
<br>
</body>
</html>
