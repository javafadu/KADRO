<html>
<head>
<title>İDARİ İŞLER MÜDÜRLÜĞÜ - KADRO BİLGİ SİSTEMİ</title>
<link href="css/all.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"><style type="text/css">
<!--
body {
	background-repeat: repeat;
	background-image: url(images/bg.gif);
}
.style1 {color: #000066}
-->
</style><table width="70%" border="0" align="center">
  <tr bgcolor="#FFFFFF">
    <td width="41%">
      <?php
echo "Hosgeldin :".$_SESSION['username']."   ";?>
<br>
<a href="logout.php"><font color="brwon">Güvenli Çikis</font></a>    </td><td align="right">
	  <?php
echo "Yetki seviyeniz :".$_SESSION['level']."<br>";?>
      <?php
echo "Yetki Ofisiniz :".$_SESSION['userofis']."";?>
      <br />
	  
  </td></tr></table>
	  
	  
      
<div align="center">
<center>
</style>
</tr>
</table>
<?php if($_SESSION['level']==2 OR $_SESSION['level']==3 OR $_SESSION['level']==4)
	
	echo "
	<table bgcolor='#FFFFE8' align='ceter'>
	<tr>
	
	
	<td bgcolor='#FFFFE8'><a href='index.php'>Anasayfa</a></td>
    <td width='10'>&nbsp;</td>
	
	 <td bgcolor='#FFFFE8'><a href='kadrogir.php'>Yeni Kadro Oluştur </a></td>
    <td width='10'>&nbsp;</td>
 
 
   <td bgcolor='#FFFFE8'><a href='vekaletler.php'>Vekalet Görevliler </a></td>
    <td width='10'>&nbsp;</td>
    
	<td bgcolor='#FFFFE8'><a href='geciciler.php'>Geçici Görevliler </a></td>
    <td width='10'>&nbsp;</td>
	
	<td bgcolor='#FFFFE8'><a href='izinliler.php'>İzinli Personel </a></td>
    <td width='10'>&nbsp;</td>
	
	<td bgcolor='#FFFFE8'><a href=''>Müdür İletişi Bilgileri</a></td>
    <td width='10'>&nbsp;</td>
	
	
	
  </tr></table>"; ?>
<br>
<? 
include "baglanti.php";
?>
<table width="100%" border="0" bgcolor="f4f4f4">
  <tr>
       <td bgcolor="#CCCCCC"><strong>&#304;sime G&ouml;re Sorg.</strong></td>
       <td bgcolor="#CCCCCC"><div align="left"><strong>Sicile</strong></div></td>
       <td colspan="4" bordercolor="#000000"><div align="center"><strong>Ofise G&ouml;re Sorgula</strong></div></td>
       <td bgcolor="#CCCCCC"><div align="center"><strong>Ünvana Göre Sorgulama </strong></div></td>
  </tr>
     <tr>
       <td valign="top"><form id="form2" name="form2" method="get" action="personelisme.php">
         
         <input name="isim" type="text" id="isim" value="İsimYadaSoyisim" size="15" />
         <input type="submit" name="Submit2" value="Git" />
         </form>       </td>
       <td valign="top"><form id="form1" name="form1" method="get" action="personel2.php">
        
          <input name="id" type="text" id="id" value="SicilNo" size="6" maxlength="6" />
       
          <input type="submit" name="Submit" value="Git" />
        </form></td>
       <td valign="top" bordercolor="#000000"><form name="form3" method="get" action="personelofise.php">
         <div align="center">
           <?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Yurt Dışı</option> ";
        include 'includes/ofisconout.php';
         echo "</select> ";
?>
         </div>
       </form>	     </td>
       <td valign="top" bordercolor="#000000"><form name="form3" method="get" action="personelofistr.php">
         <div align="center">
           <?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Yurt İçi</option> ";
        include 'includes/ofisconin.php';
         echo "</select> ";
?>
         </div>
       </form>     
       </td>
	   
	   
	   
       <td valign="top" bordercolor="#000000"><form name="form3" method="get" action="personelofistr.php">
         <div align="center">
           <?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Genel Müdürlük</option> ";
        include 'includes/ofiscongm.php';
         echo "</select> ";
?>
         </div>
       </form>   </td>
	   
	   
       <td valign="top" bordercolor="#000000"><form name="form3" method="get" action="personelofistr.php">
         <div align="center">
           <?
		echo "<select name=\"ofis\" class=\"input\" onChange=\"MM_jumpMenu('parent',this,0)\">";
        echo "<option value=\"\">Kargo</option> ";
        include 'includes/ofisconkargo.php';
         echo "</select> ";
?>
         </div>
       </form>   </td>
	   
	   
	   
	   
       <td valign="top"><form name="form11" method="get" action="personelunvana.php">

         <div align="center">
           <?
		echo "<select name=\"unvan\">";
        echo "<option value=\"\"></option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?>
           <input type="submit" name="Submit3" value="Git" />
         </div>
       </form></td>
  </tr>
</table>
  
 
 

