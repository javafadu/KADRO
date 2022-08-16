<?
session_start();

include "level2_check.php";
require "header2.php";
?>



<?
include "baglanti.php";


$sql1 = mysql_query("select * from ofislist where sehir_kod='$hat' ");





?>
<link href="css/all.css" rel="stylesheet" type="text/css" />
<table width="50%" border="0" align="center">
   <tr>
     <td><center> <? echo "<font color='red' size='3'><b>$hat</b></font>"; ?>
	 <? 
	 
	 $ofis = mysql_query("select * from ofislist where ofiskod='$hat' ");
	 while ($ofisliste=mysql_fetch_array($ofis))
	 {
	 echo "<font color='red'><b>($ofisliste[ofis_sehir])</b></font><br>";
	 }
	 ?>
	 
	 
	 <br />
       <a href="hatlar2.php?hat=<? echo"$hat"; ?>" target="_blank"><u>B&uuml;t&uuml;n Bilgileri G&ouml;rmek ve &Ccedil;&#305;kt&#305; Almak &#304;&ccedil;in T&#305;klay&#305;n</u> </a><br>
     <br></td>
     <td>&nbsp;</td>
   </tr>
</table>
 <table width="50%" border="0" align="center">
   <tr>
     <td bgcolor="#FFFFCC">Ofis Bilgileri </td>
    
   </tr>
 </table>
 <table border="0" align="center" width="50%">
    <tr bgcolor="#CCCCCC"> 
	<td><strong>Ofis</strong></td>
      <td><strong>Ofis Türü</strong></td>
      <td><strong>Alan</strong></td>
      <td><strong>Kira</strong></td>
	  <td><strong>Para</strong></td>
      <td><strong>Bilgi</strong></td>
	   <td><strong>Fotograflar</strong></td>
	    <td><strong>Sözlesme</strong></td>	  
    </tr>
  

<?


while ($liste1=mysql_fetch_array($sql1))
{

$sehir=$liste1[ofiskod];
$sehir2=$liste1[sehir_kod];
$sql = mysql_query("select * from ofisler where ofis_sehir='$sehir' ");

$bgcolor1="#EFEFEF";
$bgcolor2="#CDCDCD";
$i=2;

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


echo "<tr bgcolor=\"$s\">"; ?> 

    
        
        <td><? echo "$liste[ofis_sehir]"; ?></td>
      <td><? echo "$liste[ofis_tur]"; ?></td>
      <td><? echo "$liste[ofis_alan]"; ?></td>
      <td><? echo "$liste[ofis_kira]"; ?></td>
	  <td><? echo "$liste[ofis_kirac]"; ?></td>
      <td align="center"> <form name="1" action="ofisler2.php?id=<? echo"$liste[ofis_id]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="Bilgi" /> </td></form>
	  
	  
	    <td align="center"> <form name="1" action="fotos2.php?id=<? echo"$liste[ofis_id]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="Foto" /> </td></form>
	  
	  
	    <td align="center"> <form name="1" action="sozlesmeler/<? echo"$liste[ofis_sehir]"; ?>/<? echo"$liste[ofis_tur]"; ?>/1.pdf " method="get">
	  
	  <input name="submit" type="submit" value="Sözlesme" /> </td></form>
	  
	  
	  </tr>


<?
$i=$i+1;
}
 
 }



?>
</table>


 <br />
 <table width="50%" border="0" align="center">
<tr>
<td bgcolor="#FFFFCC">M&uuml;d&uuml;r Bilgileri </td>

</tr>
</table>
<table border="0" align="center" width="50%">
    <tr bgcolor="#CCCCCC"> 
	<td><strong>Ofis</strong></td>
      <td ><strong>M&uuml;d&uuml;r</strong></td>
      <td ><strong>Yetki</strong></td>
      <td><strong>Ayr&#305;nt&#305;</strong></td>
	 
  </tr>
  

<?
$sqlm = mysql_query("select * from mudurler where mudur_ofis='$sehir2' ");



$bgcolor1="#EFEFEF";
$bgcolor2="#CDCDCD";
$a=2;

while ($listem=mysql_fetch_array($sqlm))
{
if($a%2==0)
  {
  $a=$bgcolor1;
  }
  else
  {
  $a=$bgcolor2;
  }  


echo "<tr bgcolor=\"$a\">"; ?> 

    
        
        <td><? echo "$listem[mudur_ofis]"; ?></td>
      <td><? echo "$listem[mudur_name]"; ?></td>
      <td><? echo "$listem[mudur_yetki]"; ?> <? echo "$listem[mudur_seflik]"; ?></td>
      <td align="center"> <form name="2" action="mudurler2.php?id=<? echo"$listem[mudur_id]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="Bilgi" /> </td></form>
	  
	  
	  
	  
	  
	  
	  </tr>


<?
$a=$a+1;
}


?>
</table>



<br />
<table width="50%" border="0" align="center">
<tr>
<td bgcolor="#FFFFCC">M&uuml;d&uuml;r Evi  Bilgileri </td>
<td>&nbsp;</td>
</tr>
</table>
<table border="0" align="center" width="50%">
  <tr bgcolor="#CCCCCC"> <td><strong>Ofis</strong></td>
    <td><strong>M&uuml;d&uuml;r</strong></td>
    <td><strong>Alan</strong></td>
    <td><strong>Kira</strong></td>
    <td><strong>Para</strong></td>
    <td><strong>Bilgi</strong></td>
	 <td><strong>Fotograflar</strong></td>
	  <td><strong>Sözlesme</strong></td>
  </tr>
  <?



$sqle = mysql_query("select * from evler where ev_sehir='$sehir2' ");

$bgcolor1="#EFEFEF";
$bgcolor2="#CDCDCD";
$b=3;

while ($listee=mysql_fetch_array($sqle))
{
if($b%2==0)
  {
  $b=$bgcolor1;
  }
  else
  {
  $b=$bgcolor2;
  }  


echo "<tr bgcolor=\"$b\">"; ?>
  <tr>
    <td bgcolor="#EFEFEF"><? echo "$listee[ev_sehir]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listee[ev_mudur]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listee[ev_alan]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listee[ev_kira]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listee[ev_kirac]"; ?></td>
    <td bgcolor="#EFEFEF">
    <form action="evler2.php?id=<? echo"$listee[ev_id]"; ?> " method="post" name="3" id="3">
      <input name="submit2" type="submit" value="Bilgi" />
      </td>
    </form>
	
	
	 <td bgcolor="#EFEFEF">
    <form action="fotoev.php?id=<? echo"$listee[ev_id]"; ?> " method="post" name="3" id="3">
      <input name="submit2" type="submit" value="Foto" />
      </td>
    </form>
	
	
	 <td bgcolor="#EFEFEF">
    <form action="sozlesmeler/<? echo"$listee[ev_sehir]"; ?>/mudurevi/2.pdf " method="get" name="3" id="3">
      <input name="submit2" type="submit" value="Sözlesme" />
      </td>
    </form>
	
	
  </tr>
  <?
$b=$b+1;
}
 
 

?>
</table>

<p>&nbsp;</p>
<table width="50%" border="0" align="center">
  <tr>
    <td bgcolor="#FFFFCC">Ara&ccedil;  Bilgileri </td>
    <td>&nbsp;</td>
  </tr>
</table>
<table border="0" align="center" width="50%">
  <tr bgcolor="#CCCCCC"> <td><strong>Ofis</strong></td>
    <td><strong>Marka</strong></td>
    <td><strong>Model</strong></td>
    <td><strong>Yil</strong></td>
    <td><strong>Mülkiyet</strong></td>
    <td><strong>Bilgi</strong></td>
	 <td><strong>Sözlesme</strong></td>
  </tr>
  <?



$sqla = mysql_query("select * from araclar where arac_ofis='$sehir2' ");

$bgcolor1="#EFEFEF";
$bgcolor2="#CDCDCD";
$c=2;

while ($listea=mysql_fetch_array($sqla))
{
if($c%2==0)
  {
  $c=$bgcolor1;
  }
  else
  {
  $c=$bgcolor2;
  }  


echo "<tr bgcolor=\"$c\">"; ?>
  <tr>
    <td bgcolor="#EFEFEF"><? echo "$listea[arac_ofis]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listea[arac_marka]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listea[arac_model]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listea[arac_yil]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listea[arac_mulk]"; ?></td>
    <td bgcolor="#EFEFEF">
    <form action="araclar2.php?id=<? echo"$listea[arac_id]"; ?> " method="post" name="4" id="4">
      <input name="submit22" type="submit" value="Bilgi" /></td>
    </form>
	  
	<td bgcolor="#EFEFEF">
    <form action="sozlesmeler/<? echo"$listea[arac_ofis]"; ?>/<? echo"$listea[arac_marka]"; ?>/3.pdf " method="get" name="4" id="4">
      <input name="submit2" type="submit" value="Sözlesme" /></td>
    </form>
  </tr>
  <?
$c=$c+1;
}
 
 

?>
</table>
<br />
<table width="50%" border="0" align="center">
  <tr>
    <td bgcolor="#FFFFCC">Ofis Ekipmanlar&#305; Bilgileri </td>
    <td>&nbsp;</td>
  </tr>
</table>
<table border="0" align="center" width="50%">
  <tr bgcolor="#CCCCCC">
    <td><strong>Ofis</strong></td>
    <td><strong>Cins</strong></td>
    <td><strong>Marka</strong></td>
    <td><strong>Model</strong></td>
    <td><strong>M&uuml;lkiyet</strong></td>
    <td><strong>Bilgi</strong></td>
    <td><strong>S&ouml;zlesme</strong></td>
  </tr>
  <?



$sqloe = mysql_query("select * from demirbaslar where demirbas_ofis='$sehir2' ");

$bgcolor1="#EFEFEF";
$bgcolor2="#CDCDCD";
$h=2;

while ($listoe=mysql_fetch_array($sqloe))
{
if($h%2==0)
  {
  $g=$bgcolor1;
  }
  else
  {
  $g=$bgcolor2;
  }  


echo "<tr bgcolor=\"$g\">"; ?>
  <tr>
    <td bgcolor="#EFEFEF"><? echo "$listoe[demirbas_ofis]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listoe[demirbas_cins]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listoe[demirbas_marka]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listoe[demirbas_model]"; ?></td>
    <td bgcolor="#EFEFEF"><? echo "$listoe[demirbas_tur]"; ?></td>
    <td>
    <form action="demirbaslar2.php?id=<? echo"$listoe[demirbas_id]"; ?> " method="post" name="4" id="4">
      <input name="submit222" type="submit" value="Bilgi" />
      </td>
    </form>
    <td>    <form action="sozlesmeler/<? echo"$listoe[demirbas_ofis]"; ?>/<? echo"$listoe[demirbas_marka]"; ?>/3.pdf " method="get" name="4" id="4">
      <input name="submit23" type="submit" value="S&ouml;zlesme" />
      </td>
    </form>
  </tr>
  <?
$h=$h+1;
}
 
 

?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p></html>
