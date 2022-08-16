<?
session_start();
include "level2_check.php";
require "header2.php";
?>
<?


$count = mysql_query("select COUNT(*) from yerler");
$sayi = mysql_fetch_assoc($count);





echo "<center>Sisteme Kayitli Yer Sayisi:  <font color='red'>" .$sayi['COUNT(*)']. "</font>";
?>




<table width='50%' bgcolor='EFEFEF' align='center' border='0'>  
  <tr>
    <td><strong>YER B&#304;LG&#304;S&#304; G&#304;R  </strong></td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Yer</strong></td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <form action="yergir2.php" method="post">
  <tr>
    <td bgcolor="#FFFFCC"><label>
      <input name="yer" type="text" id="yer" />
    </label></td>
    <td align='center' bgcolor="#FFFFCC"><label>
      <input type="submit" name="Submit" value="Kaydet" />
    </label></td>
    <td align='center' bgcolor="#FFFFCC">&nbsp;</td>
  </tr></form>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align='center' bgcolor="#FFFFFF">&nbsp;</td>
    <td align='center' bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
<td><b>Yer</b></td>
<td align='center'>Düzenle</td>
<td align='center'>Sil</td>
</tr>

  
  <?
include "baglanti.php";




$sql = mysql_query("select * from yerler order by yer ASC ");



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
  
<td><? echo "$liste[yer]"; ?></td>

<td align="center"> <form action="yeredit2.php?id=<? echo"$liste[id]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="Düzenle" />      
	  </td></form>
	  
	  <td align="center">
	   <form action="yerdelete.php?id=<? echo"$liste[id]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="SIL" />      
	  </td></form>
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
