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


$sql = mysql_query("select * from gecicigorev where id='$id'");





while ($liste=mysql_fetch_array($sql))
{

$sicil=$liste[sicil];



?>
<link href="css/all.css" rel="stylesheet" type="text/css" />

<table width="60%" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><link type="text/css" rel="stylesheet" href="templates/default/tab.css" />
        <p align="right">
        <script type="text/javascript" src="templates/tabpane.js"></script></p>
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
            Ge&ccedil;ici Ofis: <? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "<font color='red'>$liste3[ofis]</font>";


}

?>
            </strong></td>
          </tr>
        </table>
        <br />
        <div class="tab-page" id="CB">
          <script type="text/javascript">
var tabPaneCB = new WebFXTabPane( document.getElementById( "CB" ), 0 )
        </script>
          <div class="tab-page" id="3">
            <h2 class="tab">HARCAMALAR  </h2>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            <table width="95%" border="0" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table cellpadding="1" cellspacing="0" border="0" width="95%" align="center">
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Harcirah  :</td>
                      <td><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[harcirah]"; echo " $liste3[harcirahc]";

$har=$liste3[harcirahc];
$harcirah=$liste3[harcirah];
}

?></td>
                  </tr>
                    <tr class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Yolluk  :</td>
                      <td><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[yolluk]"; echo " $liste3[yollukc]"; 

$yol=$liste3[yollukc];
$yolluk=$liste3[yolluk];
}

?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" nowrap="nowrap" bordercolor="#000000" style="font-weight:bold;width:40%;">Otel : </td>
                      <td nowrap="nowrap"><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[otel]"; echo " $liste3[otelc]";

$otl=$liste3[otelc];
$otel=$liste3[otel];
}

?></td>
                  </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" bgcolor="#FFFFFF" style="font-weight:bold;width:40%;">Pasaport: </td>
                      <td bgcolor="#FFFFFF"><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[pasaport]"; echo " $liste3[pasaportc]";

$pas=$liste3[pasaportc];
$pasaport=$liste3[pasaport];

}

?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Vize : </td>
                      <td><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[vize]"; echo " $liste3[vizec]";

$viz=$liste3[vizec];
$vize=$liste3[vize];
}

?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Sa&#287;l&#305;k  :</td>
                      <td><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[saglik]"; echo " $liste3[saglikc]";

$sgl=$liste3[saglikc];
$saglik=$liste3[saglik];
}

?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Yurt D&#305;&#351;&#305; &Ccedil;&#305;k&#305;&#351; Harc&#305; : </td>
                      <td><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[harc]"; echo " $liste3[harcc]";

$hrc=$liste3[harcc];
$harc=$liste3[harc];
}

?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Bilet : </td>
                      <td><? $sql3 = mysql_query("select * from gecicigorev where id='$id' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[bilet]"; echo " $liste3[biletc]";

$blt=$liste3[biletc];
$bilet=$liste3[bilet];
}

?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Toplam YTL : </td>
                      
					  
					  
					  
					  <td>
					  <?


 $sqlpara=mysql_query("select * from paradeger where id=0");
	
	while($listepara= mysql_fetch_array($sqlpara))
	{
	

					









					

$harytl=$harcirah*$listepara[$har];
$yolytl=$yolluk*$listepara[$yol];
$otlytl=$otel*$listepara[$otl];
$pasytl=$pasaport*$listepara[$pas];
$vizytl=$vize*$listepara[$viz];
$sglytl=$saglik*$listepara[$sgl];
$hrcytl=$harc*$listepara[$hrc];
$bltytl=$bilet*$listepara[$blt];
$toplamytl=$harytl+$yolytl+ $otlytl+ $pasytl + $vizytl+$sglytl +$hrcytl+$bltytl;
$toplamusd=$toplamytl/$listepara[USD];
$toplameur=$toplamytl/$listepara[EUR];

printf("%.2f",$toplamytl);  

?>					  </td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Toplam USD: </td>
                      <td><? printf("%.2f",$toplamusd); ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#000000" style="font-weight:bold;width:40%;">Toplam EUR: </td>
                      <td><? printf("%.2f",$toplameur); ?></td>
                    
					
					
			<?
			}
			?>
			
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
