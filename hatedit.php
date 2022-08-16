<?
session_start();
include "level2_check.php";
require "header2.php";
?>
<?


$count = mysql_query("select COUNT(*) from hatlar");
$sayi = mysql_fetch_assoc($count);





echo "<center>Sisteme Kayitli Hat Sayisi:  <font color='red'>" .$sayi['COUNT(*)']. "</font> </tr><br>Basliklara Tiklayarak Sirlama Yapabilirsiniz";
?>



<table width='95%' bgcolor='EFEFEF' align='center' border='0'>  
  <tr>
  <td colspan="2"><strong><u>YEN&#304;</u> OF&#304;S KOD B&#304;LG&#304; G&#304;R </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>M&uuml;d&uuml;rl&uuml;k</td>
    <td>Country</td>
    <td>Ulke</td>
    <td>Sistemde Kullan&#305;lack &#304;sim </td>
    <td>Kod</td>
    <td>Hatt&#305;n T&uuml;r&uuml; </td>
    <td>Ba&#287;l&#305; ise Kime </td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <form name="form1" method="post" action="hatgir2.php">
  <tr>
    <td><select name="baskan" id="baskan">
      <option value="--" selected="selected">Se&ccedil;iniz</option>
      <option value="Ticari Gn Md Yard">Ticari Gn Md Yard</option>
      <option value="&#304;dari &#304;&#351;ler Md">&#304;dari &#304;&#351;ler Md</option>
      <option value="Pazarlama Sat&#305;&#351; B&#351;k ">Pazarlama Sat&#305;&#351; B&#351;k </option>
      <option value="&Uuml;retim Planlama B&#351;k">&Uuml;retim Planlama B&#351;k</option>
      <option value="Gelir Y&ouml;netim B&#351;k">Gelir Y&ouml;netim B&#351;k</option>
      <option value="Kargo B&#351;k">Kargo B&#351;k</option>
      <option value="&#304;&#351; Geli&#351;tirme B&#351;k">&#304;&#351; Geli&#351;tirme B&#351;k</option>
    </select></td>
    <td><label>
      <input name="ofisbolge" type="text" id="ofisbolge" />
    </label></td>
    <td><label>
      <input name="ofisulke1" type="text" id="ofisulke1" />
    </label></td>
    <td><label>
      <input name="ofisulke" type="text" id="ofisulke" />
    </label></td>
    <td><label>
      <input name="ofis_sehir" type="text" id="ofis_sehir" />
    </label></td>
    <td><label>
      <input name="sehir_kod" type="text" id="sehir_kod" size="10" />
      <input name="ofisid" type="hidden" id="ofisid" />
    </label></td>
    <td><label>
      <select name="tur" id="tur">
        <option value="--" selected="selected">Se&ccedil;iniz</option>
        <option value="M&uuml;d&uuml;rl&uuml;k">M&uuml;d&uuml;rl&uuml;k</option>
        <option value="Ba&#287;l&#305; &#350;eflik">Ba&#287;l&#305; &#350;eflik</option>
        <option value="Kargo &#350;eflik">Kargo &#350;eflik</option>
      </select>
    </label></td>
    <td><?
		echo "<select name=\"bag\">";
        echo "<option value=\"a\">Müdürlük</option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?></td>
    <td align='center'><label>
      <input type="submit" name="Submit" value="Kaydet" />
    </label></td>
    <td align='center'>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align='center' bgcolor="#FFFFFF">&nbsp;</td>
    <td align='center' bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td><strong><a href="hatedit.php?order=baskan">Ba&#351;kanl&#305;k</a></strong></td>
<td><a href='hatedit.php?order=ofisbolge'><b>M&uuml;d&uuml;rl&uuml;k</b></a></td>
<td><a href='hatedit.php?order=ofisulke1'><b>Country</b></a></td>
<td><a href='hatedit.php?order=ofisulke'><b>Ulke</b></a></td>
<td><a href='hatedit.php?order=ofis_sehir'><b>Kullan&#305;lacak &#304;sim  </b></a></td>
<td><a href='hatedit.php?order=sehir_kod'><b>Kod</b></a></td>
<td><a href="hatedit.php?order=tur">T&uuml;r</a></td>
<td><a href="hatedit.php?order=bag">Ba&#287;</a></td>
<td align='center'>Düzenle</td>
<td align='center'>Sil</td>
</tr>


  <?
include "baglanti.php";




$sql = mysql_query("select * from ofislist order by '$order' ASC ");



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
  
<tr>
  <td><? echo "$liste[baskan]"; ?></td>
  <td><? echo "$liste[ofisbolge]"; ?></td>
<td><? echo "$liste[ofisulke1]"; ?></td>
<td><? echo "$liste[ofisulke]"; ?></td>
<td ><? echo "<font color='red'>$liste[ofis_sehir]</font>"; ?></td>
<td><? echo "$liste[sehir_kod]"; ?></td>	
<td><? echo "$liste[tur]"; ?></td>
<td><? echo "$liste[bag]"; ?></td>
<td align="center"> <form action="hatedit2.php?id=<? echo"$liste[ofisid]"; ?> " method="post">
	  
	  <input name="submit" type="submit" value="Düzenle" />      
	  </td></form>
	  
	  <td align="center"> <form action="hatdelete.php?id=<? echo"$liste[ofisid]"; ?> " method="post">
	  
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
