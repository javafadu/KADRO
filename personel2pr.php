<?
session_start();


include "baglanti.php";
?>



<?


$sql = mysql_query("select * from personel where sicil='$id'");






while ($liste=mysql_fetch_array($sql))
{

$sicil=$liste[sicil];



?>
<style type="text/css">
<!--
.style7 {font-size: 16px}
-->
</style>







<link href="css/all.css" rel="stylesheet" type="text/css" />
<table width="60%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td valign="top" class="lined">
        <script language="JavaScript">
function printPage() {
if(document.all) {
document.all.divButtons.style.visibility = 'hidden';
window.print();
document.all.divButtons.style.visibility = 'visible';
} else {
document.getElementById('divButtons').style.visibility = 'hidden';
window.print();
document.getElementById('divButtons').style.visibility = 'visible';
}
}
</script><input type="button" value = "Print" onclick="printPage()">
<input type="button" value = "Close" onclick="JavaScript:window.close();">
<div id="divButtons" name="divButtons">
<hr noshade>
</div> </p>
        <table width="100%" border="0">
          <tr>
            <td width="59%">
            <strong>Personel  : <? echo "<font size='3' color='red'>$liste[isim]</font>";   ?></strong></td>
            
            <td width="34%" align="right"><label></label>
            <div align="center"><img src="personelfoto/0<? echo"$liste[sicil].jpg"; ?>" width="200" /></div></td>
            <td width="7%" align="right"><a href="personel2delete.php?id=<? echo "$liste[sicil]"; ?>"></a></td>
          </tr>
        </table>
        <br />
       
          
 
        &Ouml;ZL&Uuml;K B&#304;LG&#304;LER 
           <table width="95%" border="1" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr bgcolor="ebebeb">
                      <td valign="top" bordercolor="#000000" class="sectiontableentry2" style="font-weight:bold;width:40%;">Personel Sicil  :</td>
                      <td class="sectiontableentry2"><strong><? echo "$liste[sicil]";   ?></strong></td>
                  </tr>
                    <tr>
                      <td valign="top" bordercolor="#000000" class="sectiontableentry1" style="font-weight:bold;width:40%;">Personel &#304;sim  :</td>
                      <td class="sectiontableentry1"><strong><? echo "<b>$liste[isim]</b>";   ?></strong></td>
                    </tr>
                    <tr bgcolor="ebebeb">
                      <td valign="top" bordercolor="#000000" class="sectiontableentry2" style="font-weight:bold;width:40%;">Personel &Uuml;nvan : </td>
                      <td class="sectiontableentry2">
                      <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[unvan]";
$ofis="$liste3[ofis]";

}

?>                      </td>
                  </tr>
                    <tr bgcolor="#FFFFFF">
                      <td valign="top" bordercolor="#000000" class="sectiontableentry2" style="font-weight:bold;width:40%;">&#304;&#351;e Ba&#351;lama Tarihi  :</td>
                      <td class="sectiontableentry2"><? echo "$liste[bastarihi]"; ?></td>
                    </tr>
                    <tr bgcolor="ebebeb">
                      <td valign="top" bordercolor="#000000" class="sectiontableentry1" style="font-weight:bold;width:40%;">Tahsili: </td>
                      <td class="sectiontableentry1"><? echo "$liste[tahsil]"; ?></td>
                  </tr>
                </table></td>
              </tr>
      </table>
      </div>
          <div id="2"> KADRO 
            <table width="95%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">B&ouml;lge:</td>
                        <td class="sectiontableentry2">
                          <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[bolge]";

}

?>                      </td>
                </tr>
        <tr bgcolor="#EBEBEB">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; &Uuml;lke: </td>
                        <td class="sectiontableentry2">
                          <? $sql4 = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

while ($liste4=mysql_fetch_array($sql4))
{
$ofisulke=$liste4[ofisulke];
$ofisulke2=$liste4[ofisulke2];
echo "$ofisulke";
}

?>                      </td>
                </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; &#350;ehir    : </td>
                        <td class="sectiontableentry2">
                          <? $sql5 = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

while ($liste5=mysql_fetch_array($sql5))
{
$ofis_sehir=$liste5[ofis_sehir];

echo "$ofis_sehir"; 
}

?>                      </td>
                </tr>
        <tr bgcolor="#EBEBEB">
          <td valign="top" class="sectiontableentry1" style="font-weight:bold;width:40%;">Ofis  : </td>
                        <td class="sectiontableentry1">
                          <? $sql6 = mysql_query("select * from ofislist where sehir_kod='$ofis' ");

while ($liste6=mysql_fetch_array($sql6))
{
$ofisname=$liste6[ofisname];

echo "$ofisname ($ofis)"; 
}

?>                      </td>
                </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">&Uuml;nvan:</td>
                        <td class="sectiontableentry2">
                          <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[unvan]";

}

?>                      </td>
                </tr>
        <tr bgcolor="#EBEBEB">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">Kadro  : </td>
                        <td class="sectiontableentry2">
                          <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[kadro]";

}

?>                      </td>
                </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">Durum:</td>
          <td class="sectiontableentry2"><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[durum]";

}

?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">Merkezi / Mahalli  : </td>
                        <td class="sectiontableentry2">
                          <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[mahmer]";

}

?>                      </td>
                </tr>
        <tr bgcolor="#EBEBEB">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">S&ouml;zle&#351;meli / Part-Time: </td>
                        <td bgcolor="#EBEBEB" class="sectiontableentry2">
                          <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[sozpart]";

}

?>                      </td>
                </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Ba&#351;.Tar. </td>
          <td class="sectiontableentry2"><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[sozbas]";

}

?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" bgcolor="#EBEBEB" class="sectiontableentry2" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Bit. Tar. </td>
          <td bgcolor="#EBEBEB" class="sectiontableentry2"><? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[sozbit]";

}

?></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">But&ccedil;e:</td>
                        <td class="sectiontableentry2">
                          <? $sql3 = mysql_query("select * from kadro where sicil='$sicil' ");

while ($liste3=mysql_fetch_array($sql3))
{


echo "$liste3[butce]";

}

?>                      </td>
                </tr>
        </table></td>
          </tr>
    </table>
          </div>
          <div id="2"> &Uuml;CRET B&#304;LG&#304;LER&#304;
  <table width="95%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr>
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">K&#305;demi &Uuml;creti</td>
                        <td class="sectiontableentry2"><? echo "$liste[kidemucret] $liste[para]"; ?></td>
                </tr>
        <tr bgcolor="#EBEBEB">
          <td valign="top" class="sectiontableentry2" style="font-weight:bold;width:40%;">Net &Uuml;creti  : </td>
                        <td class="sectiontableentry2"><? echo "$liste[netucret] $liste[para]";  ?></td>
                </tr>
        </table></td>
          </tr>
    </table>
          </div>
          <div id="2"> &Uuml;N&#304;TE HARKETLER&#304;
  <table width="95%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td><table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr bgcolor="#EBEBEB">
          <td valign="top" bordercolor="#000000" class="sectiontableentry1" style="font-weight:bold;width:40%;">Son &Uuml;nite Harketleri: </td>
                        <td class="sectiontableentry1"><? echo "$liste[hareket]"; ?></td>
                </tr>
        </table></td>
          </tr>
    </table>
          </div>
          </div></td>
  </tr>
</table>



<?
}


?>

</html>
