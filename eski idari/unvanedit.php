<?
session_start();
include "level2_check.php";
require "header2.php";
?>
<?


$count = mysql_query("select COUNT(*) from unvanlar");
$sayi = mysql_fetch_assoc($count);





echo "<center>Sisteme Kayitli Unvan Sayisi:  <font color='red'>" .$sayi['COUNT(*)']. "</font>";
?>




<table width='50%' bgcolor='EFEFEF' align='center' border='0'>  
  <tr>
    <td><strong>&Uuml;NVAN B&#304;LG&#304;Si G&#304;R </strong></td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>&Uuml;nvan</strong></td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <form action="unvangir2.php" method="post">
  <tr>
    <td bgcolor="#FFFFCC"><label>
      <input name="unvan" type="text" id="unvan" />
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
<td><b>?nvan</b></td>
<td align='center'>D?zenle</td>
<td align='center'>Sil</td>
</tr>

  
  <?
include "baglanti.php";




$sql = mysql_query("select * from unvanlar order by unvan ASC ");



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
  
<td><? echo "$liste[unvan]"; ?></td>

<td align="center"> <form action="unvanedit2.php?id=<? echo"$liste[id]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="D?zenle" />      
	  </td></form>
	  
	  <td align="center">
	   <form action="unvandelete.php?id=<? echo"$liste[id]"; ?> " method="post">
	  
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
