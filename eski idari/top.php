<?php


session_start();
include "level1_check.php";

?>
<link href="css/all.css" rel="stylesheet" type="text/css" />

<table width="70%" border="0" align="center">
  <tr>
    <td colspan="4"><div align="center">PAZARLAMA SATI&#350; BA&#350;KANLI&#286;I - DESTEK M&Uuml;D&Uuml;RL&Uuml;&#286;&Uuml; VER&#304; BANKASI </div></td>
  </tr>
  <tr>
    <td width="41%"> <?php
echo "Hosgeldin :".$_SESSION['username']."<br>";?>
      <?php
echo "Yetki seviyeniz :".$_SESSION['level']."<br>";?>
      <?php
echo "Yetki Ofisiniz :".$_SESSION['userofis']."<br>";?>
      <br />
    </td></tr></table>
	  
	  
      <div align="center">
        <?php if($_SESSION['level']==1)
	
	echo "
	<center><table>
	<tr>
	<td bgcolor='#EFEFEF'><a href='ulkeler.php'>.:&Uuml;lke Bilgileri:. </a></td>
    <td>&nbsp;</td>
 
 
    
	<td bgcolor='#EFEFEF'><a href='mudurler.php'>.:M&uuml;d&uuml;r Bilgileri:. </a></td>
    <td>&nbsp;</td>
 
  
    
	<td bgcolor='#EFEFEF'><a href='ofisler.php'>.:Ofis Bilgileri:. </a></td>
    <td>&nbsp;</td>
   
 
    
	<td bgcolor='#EFEFEF'><a href='araclar.php'>.:Ara&ccedil; Bilgileri:. </a></td>
    <td>&nbsp;</td>
 
  
    
	<td bgcolor='#EFEFEF'><a href='evler.php'>.:Ev Bilgileri:. </a></td>
    <td>&nbsp;</td>

 <td bgcolor='#EFEFEF'><a href='araclar.php'>.:Araçlar:.</a></td>
    <td>&nbsp;</td>
   
	<td bgcolor='#EFEFEF'><a href='talepler.php'>.:Yap&#305;lan Talepler:. </a></td>
    <td>&nbsp;</td>

 
    
	
	
	
	<td bgcolor='#EFEFEF'><a href='telepgir.php'>.:Yeni Talep:.</a></td>
    <td>&nbsp;</td>
	
	</tr></table>
 "; ?> 
        </tr>
    </table>
        
        
        
      </div>
      <p align="center"><a href="evgir.php" target="main">deneme</a></p>
