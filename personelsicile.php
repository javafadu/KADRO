<?
session_start();

require "header.php";



$sql = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste=mysql_fetch_array($sql))

{
$sicil=$liste[sicil];
$sql3 = mysql_query("select * from personel where sicil='$sicil'");
while ($liste3=mysql_fetch_array($sql3))
{


?>
<link href="css/all.css" rel="stylesheet" type="text/css" />

<table cellpadding="5" cellspacing="0" border="0" width="60%">
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
            <strong>Personel  : <? echo "<font size='3' color='red'>$liste3[isim]</font>";   ?></strong></td>
            
            <td width="34%" align="right"><label> <? if($_SESSION['level']==3) echo"<a href='personeledit.php?id=$liste[sicil]'>:: <u>D&uuml;zenle</u> :: </a>"; ?>    <? if($_SESSION['level']==4) echo"<a href='personel2edit.php?id=$liste[sicil]'>:: <u>D&uuml;zenle</u> :: </a>"; ?></label></td>
            <td width="7%" align="right"><a href="personel2delete.php?id=<? echo "$liste[sicil]"; ?>">
              <? if($_SESSION['level']==4 OR $_SESSION['level']==3 ) echo"::Sil::"; ?>
            </a></td>
            <td width="7%" align="right"><a href="personel2pr.php?id=<? echo"$id"; ?>" target="_blank"><u>::PR&#304;NT::</u></a></td>
          </tr>
        </table>
        <br />
        <div class="tab-page" id="CB">
          <script type="text/javascript">
var tabPaneCB = new WebFXTabPane( document.getElementById( "CB" ), 0 )
        </script>
          <div class="tab-page" id="3">
            <h2 class="tab">&Ouml;ZL&Uuml;K B&#304;LG&#304;LER  </h2>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            <table cellpadding="5" cellspacing="0" border="0" width="95%">
              <tr>
                <td><table cellpadding="5" cellspacing="0" border="0" width="95%">
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Personel Sicil  :</td>
                      <td><strong><? echo "$liste[sicil]";   ?></strong></td>
                  </tr>
                    <tr class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Personel &#304;sim  :</td>
                      <td><strong><? echo "<b>$liste3[isim]</b>";   ?></strong></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Personel &Uuml;nvan : </td>
                      <td><strong><? echo "<b>$liste[unvan]</b>";   ?></strong>

</td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">&#304;&#351;e Ba&#351;lama Tarihi  :</td>
                      <td><? echo "$liste3[bastarihi]"; ?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Tahsili: </td>
                      <td><? echo "$liste3[tahsil]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h2 class="tab">AKT&#304;F G&Ouml;REV </h2>
            <script type="text/javascript">
  tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            <table cellpadding="5" cellspacing="0" border="0" width="95%">
              <tr>
                <td><table cellpadding="5" cellspacing="0" border="0" width="95%">
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">B&ouml;lge:</td>
                      <td><? echo "$liste[bolge]"; ?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; &Uuml;lke: </td>
                      <td><? $sql4 = mysql_query("select * from ofislist where ofiskod='$liste[ofis]' ");

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
                      <td><? $sql5 = mysql_query("select * from ofislist where ofiskod='$liste[ofis]' ");

while ($liste5=mysql_fetch_array($sql5))
{
$ofis_sehir=$liste5[ofis_sehir];

echo "$ofis_sehir"; 
}

?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry1>
                      <td valign="top" style="font-weight:bold;width:40%;">Ofis  : </td>
                      <td><? $sql6 = mysql_query("select * from ofislist where ofiskod='$liste[ofis]' ");

while ($liste6=mysql_fetch_array($sql6))
{
$ofisname=$liste6[ofisname];

echo "$ofisname ($ofis)"; 
}

?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">&Uuml;nvan:</td>
                      <td><? echo "$liste[unvan]"; ?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Kadro  : </td>
                      <td><? echo "$liste[kadro]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Merkezi / Mahalli  : </td>
                      <td><? echo "$liste[mahmer]"; ?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class="sectiontableentry2">
                      <td valign="top" style="font-weight:bold;width:40%;">S&ouml;zle&#351;meli / Part-Time: </td>
                      <td><? echo "$liste[sozpart]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">But&ccedil;e:</td>
                      <td><? echo "$liste[butce]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h2 class="tab">&Uuml;CRET B&#304;LG&#304;LER&#304; </h2>
            <script type="text/javascript">
  tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            <table cellpadding="5" cellspacing="0" border="0" width="95%">
              <tr>
                <td><table cellpadding="5" cellspacing="0" border="0" width="95%">
                    <tr class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;"><span class="data style2">K&#305;demi &Uuml;creti</span></td>
                      <td><? echo "$liste3[kidemucret] $liste3[para]"; ?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;"><span class="data style2">Net &Uuml;creti </span> : </td>
                      <td><? echo "$liste3[netucret] $liste3[para]";  ?></td>
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
            <table cellpadding="5" cellspacing="0" border="0" width="95%">
              <tr>
                <td><table cellpadding="5" cellspacing="0" border="0" width="95%">
                    <tr bgcolor="#E9FDFE" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Son &Uuml;nite Harketleri: </td>
                      <td><? echo "$liste3[hareket]"; ?></td>
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
            <h2 class="tab">&Ouml;ZEL B&#304;LG&#304; 
              <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            </h2>
            <table cellpadding="5" cellspacing="0" border="0" width="95%">
              <tr>
                <td><table cellpadding="5" cellspacing="0" border="0" width="95%">
                    <tr bgcolor="#E9FDFE" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Bilgi: </td>
                  <td><? if($_SESSION['level']==4 ) echo "$liste3[bilgi]";
					  else echo"**Gormeye Yetkiniz Yok**";
					  ?>                  </tr>
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

}
?>

</html>
