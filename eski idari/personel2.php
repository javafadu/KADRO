<?
session_start();
?>


<?



?>
<?
require "header.php";
include "baglanti.php";
?>



<?


$sql = mysql_query("select * from personel where sicil='$id'");





while ($liste=mysql_fetch_array($sql))
{

$sicil=$liste[sicil];



?>
<link href="css/all.css" rel="stylesheet" type="text/css" />

<table cellpadding="5" cellspacing="0" border="0" width="70%">
  <tr>
    <td><link type="text/css" rel="stylesheet" href="templates/default/tab.css" />
        <p align="right">
        <script type="text/javascript" src="templates/tabpane.js"></script>
        </p>
        <table width="100%" border="0">
          <tr>
            <td width="59%"><style type="text/css">
.dynamic-tab-pane-control h2 {
	text-align:	center;
	width:		auto;
}

.dynamic-tab-pane-control h2 a {
	display:	inline;
	width:		auto;
}

.dynamic-tab-pane-control a:hover {
	background: transparent;
}
            </style>
            <strong>Personel  : <? echo "<font size='3' color='red'>$liste[isim]</font>";   ?> 
            <br />
            Ofis : <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "<font color='red'>$liste3[ofis]</font>";

$ofof=$liste3[ofis];
}

?>
            </strong></td>
            
            <td width="34%" align="right"><label> <? if($_SESSION['level']==3) echo"<a href='personeledit.php?id=$liste[sicil]'>:: <u>D&uuml;zenle</u> :: </a>"; ?>    <? if($_SESSION['level']==4) echo"<a href='personel2edit.php?id=$liste[sicil]'>:: <u>D&uuml;zenle</u> :: </a>"; ?></label></td>
            <td width="7%" align="right"><a href="personel2delete.php?id=<? echo "$liste[sicil]"; ?>">
              <? if($_SESSION['level']==4 OR $_SESSION['level']==3 ) echo"::Sil::"; ?>
            </a></td>
            <td width="7%" align="right"><a href="personel2pr.php?id=<? echo"$id"; ?>" target="_blank">PR&#304;NT</a></td>
          </tr>
        </table>
        <br />
        <div class="tab-page" id="CB">
          <script type="text/javascript">
var tabPaneCB = new WebFXTabPane( document.getElementById( "CB" ), 0 )
        </script>
          <div class="tab-page" id="3">
            <h2 class="tab">S&#304;C&#304;L B&#304;LG&#304;LER  </h2>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr class=sectiontableentry2>
                      <td width="45%" rowspan="13" align="center" valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;"><div align="left"><img src="personelfoto/0<? echo"$liste[sicil].jpg"; ?>" width="200" /></div></td>
                      <td width="19%" valign="top" bordercolor="#000000" bgcolor="efefef" style="font-weight:bold;width:40%;"><div align="left">Personel Sicil  :</div></td>
                      <td width="36%" bgcolor="efefef"><div align="left"><strong><? echo "$liste[sicil]";   ?></strong></div></td>
                  </tr>
                    <tr class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;"><div align="left">Personel &#304;sim  :</div></td>
                      <td><div align="left"><strong><? echo "<b>$liste[isim]</b>";   ?></strong></div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" bgcolor="efefef" style="font-weight:bold;width:40%;"><div align="left">Ba&#287;l&#305; Ba&#351;kanl&#305;k: </div></td>
                      <td bgcolor="efefef"><div align="left">
                        <? $sql3 = mysql_query("select * from ofislist where sehir_kod='$ofof' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[baskan]";




?>
                      </div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;"><div align="left">Ba&#287;l&#305; M&uuml;d&uuml;rl&uuml;k: </div></td>
                      <td bgcolor="#FFFFFF"><div align="left">
                        <? 

echo "$liste3[ofisbolge]";


}

?>
                      </div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" bgcolor="efefef" style="font-weight:bold;width:40%;"><div align="left">Personel &Uuml;nvan : </div></td>
                      <td bgcolor="efefef"><div align="left">
                        <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[unvan]";
$ofis="$liste3[ofis]";

}

?>
                      </div></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;"><div align="left">&#304;&#351;e Ba&#351;lama Tarihi  :</div></td>
                      <td><div align="left"><? echo "$liste[bastarihi]"; ?></div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="efefef" style="font-weight:bold;width:40%;"><div align="left">Tahsili: </div></td>
                      <td bgcolor="efefef"><div align="left"><? echo "$liste[tahsil]"; ?></div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td bgcolor="#FFFFFF">
					  <?
					  
					  $bilgi0=mysql_query("select * from personelbilgi where sicil='$id' ");
		  
		 while($bl0=mysql_fetch_array($bilgi0))
		 {
		 $ook=$bl0[okul];
		 
		 
		 }
				
				echo"$ook";
				
				?>	  
					  
					  
					  
					  
					  
					  
					  </td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;"><div align="left">Personel &Ouml;zge&ccedil;mi&#351;i</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><? echo"<a href='ozgecmisler/$liste[sicil].doc' target='blank'>Özgecmisi Indirin</a>";   ?></div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;"><div align="left"></div></td>
                      <td bgcolor="#FFFFFF"><div align="left"></div></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h2 class="tab">KADRO </h2>
            <script type="text/javascript">
  tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">B&ouml;lge:</td>
                      <td><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[bolge]";

}

?></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; &Uuml;lke: </td>
                      <td><? $sql4 = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

while ($liste4=mysql_fetch_array($sql4))
{
$ofisulke=$liste4[ofisulke];
$ofisulke2=$liste4[ofisulke2];
echo "$ofisulke";
}

?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; &#350;ehir    : </td>
                      <td><? $sql5 = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

while ($liste5=mysql_fetch_array($sql5))
{
$ofis_sehir=$liste5[ofis_sehir];

echo "$ofis_sehir"; 
}

?></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" style="font-weight:bold;width:40%;">Ofis  : </td>
                      <td><? $sql6 = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

while ($liste6=mysql_fetch_array($sql6))
{
$ofisname=$liste6[ofisname];

echo "$ofisname ($ofis)"; 
}

?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; Yer: </td>
                      <td bgcolor="#FFFFFF"><? $sql13 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste13=mysql_fetch_array($sql13))
{


echo "$liste13[yer]";

}

?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&Uuml;nvan:</td>
                      <td><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[unvan]";

}

?></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">Kadro  : </td>
                      <td bgcolor="#FFFFFF"><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[kadro]";

}

?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Ek G&ouml;rev :</td>
                      <td><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "<font color='brown'><b>$liste3[durum]</b></font>";

}
$vekildurum=mysql_query("select * from vekalet where sicil='$sicil' ");
while($vl=mysql_fetch_array($vekildurum))
{
echo" $vl[unvan], Vekalet Ofisi : $vl[ofis]";
}
$gecicidurum=mysql_query("select * from gecicigorev where sicil='$sicil' ");
while($gl=mysql_fetch_array($gecicidurum))
{
echo" $gl[unvan], Geçic Görev Ofisi : $gl[ofis]";
}

?></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">Mahalli/Merkezi   : </td>
                      <td bgcolor="#FFFFFF"><? $sql5 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste5=mysql_fetch_array($sql5))
{


echo "$liste5[mahmer]";

}

?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class="sectiontableentry2">
                      <td valign="top" style="font-weight:bold;width:40%;">S&ouml;zle&#351;meli / Part-Time: </td>
                      <td><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[sozpart]";

}

?></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Ba&#351;. Tar. </td>
                      <td bgcolor="#FFFFFF"><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[sozbas]";

}

?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Bit. Tar. </td>
                      <td><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[sozbit]";

}

?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h2 class="tab">&Uuml;CRET B&#304;LG&#304;LER&#304; </h2>
            <script type="text/javascript">
  tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;"><span class="data style2">K&#305;demi &Uuml;creti</span></td>
                      <td><? echo "$liste[kidemucret] $liste[para]"; ?></td>
                    </tr>
                    <tr bgcolor="#efefef" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;"><span class="data style2">Net &Uuml;creti </span> : </td>
                      <td><? echo "$liste[netucret] $liste[para]";  ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h2 class="tab">&Uuml;N&#304;TE HARKETLER&#304;
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            </h2>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Son &Uuml;nite Harketleri: </td>
                      <td bgcolor="#efefef"><? echo "$liste[hareket]"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
		  
		  
		  <div class="tab-page" id="2">
            <h2 class="tab">KURS B&#304;LG&#304;LER&#304;
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            </h2>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Almas&#305; Gereken Kurslar </td>
                      <td bgcolor="#efefef">Ald&#305;&#287;&#305; Kurslar </td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">-</td>
                      <td>-</td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">-</td>
                      <td>-</td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">-</td>
                      <td>-</td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">-</td>
                      <td>-</td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">-</td>
                      <td>-</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
		  
		  
		  <?
		  
		  
		  $bilgi=mysql_query("select * from personelbilgi where sicil='$id' ");
		  
		 while($bl=mysql_fetch_array($bilgi))
		 {
		 $tk=$bl[tckimlik];
		 $ssk=$bl[sskno];
		 $cins=$bl[cinsiyet];
		 $anne=$bl[anne];
		 $baba=$bl[baba];
		 $dtar=$bl[dogtarih];
		 $dyer=$bl[dogumyer];
		 
		 
		 $adres=$bl[adres];
		 $evtel=$bl[evtel];
		 $ceptel=$bl[ceptel];
		 $istel=$bl[istel];
		 $email=$bl[email];
		 
		 }
		 
		  
		  
		  ?>
		  
		  
		  
		  <div class="tab-page" id="2">
            <h2 class="tab">N&Uuml;FUS B&#304;LG&#304;LER&#304;
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            </h2>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">TC Kimlik No  </td>
                      <td bgcolor="#efefef"><? echo "$tk"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">SSK No </td>
                      <td><? echo "$ssk"; ?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">Cinsiyet</td>
                      <td><? echo "$cins"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">Anne Ad&#305; </td>
                      <td><? echo "$anne"; ?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">Baba Ad&#305; </td>
                      <td><? echo "$baba"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">Do&#287;um Tarihi </td>
                      <td><? echo "$dtar"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td bgcolor="#EFEFEF" style="font-weight:bold;width:40%;">Do&#287;um Yeri </td>
                      <td bgcolor="#EFEFEF"><? echo "$dyer"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
		  
		  
		  
		  
		  
		  <div class="tab-page" id="2">
            <h2 class="tab">ADRES ve &#304;LET&#304;&#350;&#304;M
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            </h2>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="#efefef" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">&#304;kamet Adresi </td>
                      <td bgcolor="#efefef"><? echo "$adres"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Ev Telefonu </td>
                      <td><? echo "$evtel"; ?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">Cep Telefonu </td>
                      <td><? echo "$ceptel"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">&#304;&#351; Telefonu </td>
                      <td><? echo "$istel"; ?></td>
                    </tr>
                    <tr bgcolor="#EFEFEF" class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">Mail Adresi </td>
                      <td><? echo "$email"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
		  
	  </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>



<?
}


?>

</html>
