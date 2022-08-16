<?
session_start();



include "level1_check.php";
require "header.php";

include "baglanti.php";

?>
 
<?

$countd = mysql_query("select COUNT(*) from degisiklikler");
$sayid = mysql_fetch_assoc($countd);

$count1 = mysql_query("select COUNT(*) from personel");
$sayi1 = mysql_fetch_assoc($count1);

$count2 = mysql_query("select COUNT(*) from kadro where sicil=0");
$sayi2 = mysql_fetch_assoc($count2);

$count3 = mysql_query("select COUNT(*) from vekalet");
$sayi3 = mysql_fetch_assoc($count3);

$count4 = mysql_query("select COUNT(*) from gecicigorev");
$sayi4 = mysql_fetch_assoc($count4);

$count5 = mysql_query("select COUNT(*) from ofislist");
$sayi5 = mysql_fetch_assoc($count5);

$count6 = mysql_query("select COUNT(*) from unvanlar");
$sayi6 = mysql_fetch_assoc($count6);

$count7 = mysql_query("select COUNT(*) from iletisim");
$sayi7 = mysql_fetch_assoc($count7);

$count8 = mysql_query("select COUNT(*) from yerler");
$sayi8 = mysql_fetch_assoc($count8);

$count12 = mysql_query("select COUNT(*) from ofisaciklama");
$sayi12 = mysql_fetch_assoc($count12);

$countiz = mysql_query("select COUNT(*) from izingorev");
$sayiiz = mysql_fetch_assoc($countiz);
?>
<link href="css/all.css" rel="stylesheet" type="text/css" />
        
        
      
		  <table width='60%' align="center"><tr>
          
		       
		
		
		<?php if($_SESSION['level']==1)
		ECHO"</tr><table align='center' width='50%'><td rowspan='2' bgcolor='#EDF2F6'>&nbsp;</td>
  <td bgcolor='#EDF2F6'>&nbsp;</td>
  <td>&nbsp;</td>
  <td rowspan='2' bgcolor='#EDF2F6'>&nbsp;</td>
  <td bgcolor='#EDF2F6'><strong>Bilgi Bankas&#305; </strong></td>
</tr>
<tr>
          
		  <td bgcolor='#FFFFFF'>&nbsp;</td>
		  
		  
		  
          <td>&nbsp;</td>
          <td bgcolor='#FFFFFF'><li><a href='personelliste.php'>Sisteme Kayitli Personel</a><font color='red'> " .$sayi1['COUNT(*)']. "</font></li> 
            <br> 
            <li><a href='boskadro.php'>Sisteme Kayitli Bos Kadro</a><font color='red'>  ".$sayi2['COUNT(*)']."</font></li>
            <br>
            <li><a href=''></a><font color='red'>  ".$sayia['COUNT(*)']."</font></li>
            <br>
            <li><a href=''></a><font color='red'>  ".$sayie['COUNT(*)']."</font></li></td>
  </tr><tr></tr>
		
		
		

 

 
  <tr>
    <td rowspan='2' bgcolor='#EDF2F6'>&nbsp;</td>
    <td bgcolor='#EDF2F6'>&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan='2' bgcolor='#EDF2F6'>&nbsp;</td>
    <td bgcolor='#EDF2F6'>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
  <tr></tr>
</table>"; ?>
		
		<tr>
			<?php if($_SESSION['level']==2 OR  $_SESSION['level']==3 OR $_SESSION['level']==4)
		ECHO"<br><table width='70%' align='center' border='0'><td rowspan='2' bgcolor='#EDF2F6'><img src='images/destek/thumb/2.jpg' width='80' height='64'></td>
  <td bgcolor='#EDF2F6'><strong>Personel-Kadro</strong></td>
  <td>&nbsp;</td>
  <td rowspan='2' bgcolor='#EDF2F6'><img src='images/thumb/data.gif' width='80' height='64'></td>
  <td bgcolor='#EDF2F6'><strong>Bilgi Bankas&#305; </strong></td>
</tr>
<tr>
          
		  <td bgcolor='#FFFFFF' valign='top'>
		  
		  <li><a href='bilgiler.php'>Ofisler Için Girilmis Açiklamalar</a><font color='red'>  ".$sayi12['COUNT(*)']."</font></li>
          
            <br>
            <li><a href='ofisnorm.php'>Ofislerin Norm/Bos Kadro Durumu</a></li>	
			
            <br>
           
            <li><a href='istatistik.php'>Personel Istatistikleri</a></li>
            <br>
          
            <li><a href='sozlesmebit.php'>Personel Sözlesme Bitis Tarihleri</a></li>
			<br>
			<hr>
            <li><a href=''></a><a href='unvanedit.php'>Ünvan Bilgisi Gör/Düzenle/Sil</a><font color='red'> ".$sayi6['COUNT(*)']."</font></li>	
			
			<br>
            <li><a href=''></a><a href='yeredit.php'>Çalisma Yeri Gör/Düzenle/Sil</a><font color='red'> ".$sayi8['COUNT(*)']."</font></li>
			</td>
		     
			 
		  
		  
          <td>&nbsp;</td>
          <td bgcolor='#FFFFFF' valign='top'><li><a href='personelliste.php'>Sisteme Kayitli Personel</a><font color='red'> " .$sayi1['COUNT(*)']. "</font></li> 
          <br>
            <li><a href='boskadro.php'>Sisteme Kayitli Bos Kadro</a><font color='red'>  ".$sayi2['COUNT(*)']."</font></li>
            
            <br>
            <li><a href='vekaletler.php'>Vekalet Görevliler</a><font color='red'>  ".$sayi3['COUNT(*)']."</font></li>
			<br>
            <li><a href='geciciler.php'>Geçici Görevliler</a><font color='red'>  ".$sayi4['COUNT(*)']."</font></li>
			<br>
            <li><a href='izinliler.php'>Izin Verilmis Personel</a><font color='red'>  ".$sayiiz['COUNT(*)']."</font></li>
			
		
            
			
			
			
			
			
			
			
			</td>
  </tr><tr></tr>
		
		
		

 

 
  <tr>
    <td rowspan='2' bgcolor='#EDF2F6'><img src='images/thumb/talep.gif' width='80' height='64' /></td>
    <td bgcolor='#EDF2F6'><strong>Diger</strong></td>
    <td>&nbsp;</td>
    <td rowspan='2' bgcolor='#EDF2F6'><img src='images/thumb/yonetim.jpg' width='80' height='64' /></td>
    <td bgcolor='#EDF2F6'><strong>Y&ouml;netim Men&uuml;s&uuml; </strong></td>
  </tr>
  <tr>
    <td bgcolor='#FFFFFF' valign='top'><li><a href='degisiklikler.php'>Sistemde Yapilan Degisiklikler </a><font color='red'> ".$sayid['COUNT(*)']."</font></li>
            <br>
            
            <li><a href=''></a> </li></td>
    <td>&nbsp;</td>
    <td bgcolor='#FFFFFF'><li><a href='adduser.php'>Kullanici Ekle</a></li>
            <br>
            <li><a href='admin.php'>Kullanici Düzenle</a></li>
            
            <br>


            <li><a href='hatedit.php'>Ofis Kod Bilgisi Gör/Düzenle/Sil</a><font color='red'>  ".$sayi5['COUNT(*)']."</font></li> 
			
			<br>


            <li></li>
			<li><a href='paragir.php'>Para Degerlerini Güncelle</a></li>
            <br>
			
			<li><a href='iletisimler.php'>Gelen Istek-öneri-görüs Kutusu</a><font color='red'>  ".$sayi7['COUNT(*)']."</font></li>
            <br>    </td>
  </tr>
  <tr></tr>
</table>"; ?></td>
		  </tr></table>
	  
      </html>