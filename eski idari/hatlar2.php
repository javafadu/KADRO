<?
session_start();

include "level2_check.php";
?>



<?
include "baglanti.php";
$ofis=$_SESSION['userofis'];

$sql1 = mysql_query("select * from ofislist where sehir_kod='$hat' ");






?>

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
</script>
<style type="text/css">
<!--
.style5 {font-family: Verdana; font-size: 9px; }
.style6 {font-size: 9px}
.style12 {font-family: Verdana}
.style14 {font-family: Verdana; font-size: 9px; color: #000000; }
.style15 {color: #000000}
.style16 {font-family: Verdana; color: #000000; }
-->
</style>


<div id="divButtons" name="divButtons">
<input type="button" value = "Print" onclick="printPage()">
<input type="button" value = "Close" onclick="JavaScript:window.close();">
<hr noshade>
</div> 
<?


while ($liste1=mysql_fetch_array($sql1))
{

$sehir=$liste1[ofiskod];
$sehir2=$liste1[sehir_kod];
$sql = mysql_query("select * from ofisler where ofis_sehir='$sehir' ");

while ($liste=mysql_fetch_array($sql))
{


?>



<style type="text/css">
<!--
body {
	margin-top: 0px;
}
.style1 {
	font-family: Verdana;
	font-size: 10px;
}
.style6 {font-size: 10px}
.style11 {font-size: 10px; color: #000000; }
.style12 {color: #000000}
.style15 {color: #000000; font-family: Verdana;}
-->
</style><table cellpadding="0" cellspacing="0" border="0" width="70%" align="center">
  <tr>
    <td class="style1">

        
        <table width="100%" border="0">
          <tr>
            <td width="28%" height="44" valign="bottom">
              
              
            <strong>&#304;NCELENEN OF&#304;S   : <? echo "<font size='3'>$liste[ofis_sehir] </font>";   ?> <? echo "$liste[ofis_tur]"; ?> </strong></div></td>
            <td width="29%" valign="top"><div align="right"><strong><img src="images/destek/thylogo.jpg" width="201" height="42"></strong>
              </div>
            </div>                </td>
          </tr>
        </table>
        
            <h3 >Genel Bilgiler </h3>
            
            <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#EBEBEB">
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" bordercolor="#EBEBEB" class="style15 style12 style6" style="font-weight:bold;width:40%;">Ofisin Bulunduðu Ülke :</td>
                      <td bgcolor="#F4F4F4" class="style6"><span class="style1">
                      <? $sql2 = mysql_query("select * from ofislist where ofiskod='$sehir' ");

while ($liste2=mysql_fetch_array($sql2))
{
$ofisulke=$liste2[ofisulke];
$ofisulke1=$liste2[ofisulke1];
echo "<a href='ulkeler2.php?ulke_name=$ofisulke1'><u>$ofisulke</u></a>";
}

?>
                      </span></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Bulunduðu Þehir :</span></td>
                      <td class="style6"><span class="style1">
                      <? $sql4 = mysql_query("select * from ofislist where ofiskod='$sehir' ");

while ($liste4=mysql_fetch_array($sql4))
{
$ofis_sehir=$liste4[ofis_sehir];

echo "<font color='black'>$ofis_sehir</font>"; 
}

?>
                      </span></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style5">Ofisin Ad&#305;: </span></td>
                      <td bgcolor="#F4F4F4" class="style6"><span class="style1">
                      <? $sql3 = mysql_query("select * from ofislist where ofiskod='$sehir' ");

while ($liste3=mysql_fetch_array($sql3))
{
$ofisname=$liste3[ofisname];

echo "$ofisname"; 
}

?>
                      </span></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry2">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Türü :</span></td>
                      <td class="style6"><span class="style1"><? echo "$liste[ofis_tur]"; ?></span></td>
                  </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Teleks Kodu: </span></td>
                      <td bgcolor="#F4F4F4" class="style6"><span class="style1"><? echo "$liste[ofis_teleks]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Telefonu: </span></td>
                      <td class="style6"><span class="style1"><? echo "$liste[ofis_tel]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Faksý: </span></td>
                      <td bgcolor="#F4F4F4" class="style6"><span class="style1"><? echo "$liste[ofis_fax]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Alaný: </span></td>
                      <td class="style6"><span class="style1"><? echo "$liste[ofis_alan]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin Adresi :</span></td>
                      <td bgcolor="#F4F4F4" class="style6"><span class="style1"><? echo "$liste[ofis_adres]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style6" style="font-weight:bold;width:40%;"><span class="style15 style12 style6">Ofisin M&uuml;d&uuml;r&uuml; : </span></td>
                      <td class="style6"><span class="style1">
                      <? $sql6 = mysql_query("select * from mudurler where mudur_ofis='$sehir' ");

while ($liste6=mysql_fetch_array($sql6))
{
$mudur_name=$liste6[mudur_name];
$mudur_id=$liste6[mudur_id];


echo "<a href='mudurler2.php?id=$mudur_id'><u>$mudur_name</u></a>";

}

?>
                      </span></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          
            <h3 >Finans Bilgileri </h3>
            
            <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#EBEBEB">
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ofisin Kirasý (aylýk)  : </span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_kira]"; echo "$liste[ofis_kirac]"; ?></span></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry1">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ofisin Vergi Oraný (%)  : </span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_vergi]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ödenen Vergi (aylýk) :</span></span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_vergi2]"; echo "$liste[ofis_vergi2c]"; ?></span></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Verilen Depozito / Peþinat  : </span></span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_depozito]"; echo "$liste[ofis_depozitoc]";
 ?></span></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Verilen Emlakçý Komisyonu : </span></span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_emlakci]"; echo "$liste[ofis_emlakcic]"; ?></span></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Harcanan Yan Giderler(aylýk)  : </span></span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_yan]"; echo "$liste[ofis_yanc]"; ?></span></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira süresince ödenecek toplam kira tutarý (vergi ve yan giderler hariç) : </span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_kiratoplam]"; echo "$liste[ofis_kiratoplamc]";
 ?></span></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira süresince ödenecek toplam kira tutarý (vergi ve yan giderlerdahil): </span></td>
                      <td class="style15"><span class="style1"><? echo "$liste[ofis_kiratoplam2]"; echo "$liste[ofis_kiratoplam2c]"; ?></span></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          
            <h3 >S&ouml;zle&#351;me Bilgileri </h3>
           
            <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center"><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#EBEBEB">
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Ba&#351;lang&#305;&ccedil; Tarihi :</span></span></td>
                      <td class="style15"><? echo "$liste[ofis_kirabas]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Biti&#351; Tarihi : </span></span></td>
                      <td class="style15"><? echo "$liste[ofis_kirabit]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me &#304;mza Tarihi :</span></span></td>
                      <td class="style15"><? echo "$liste[ofis_kiraimza]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Sözleþme Süresi: </span></td>
                      <td class="style15"><? echo "$liste[ofis_kirasure]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira Art&#305;&#351; Oran&#305; :</span></span></td>
                      <td class="style15"><? echo "$liste[ofis_kiraartis]"; ?></td>
                  </tr>
                    <tr class="sectiontableentry2">
                      <td valign="top" bgcolor="#FFFFFF" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira Art&#305;&#351; Ko&#351;ulu :</span></span></td>
                      <td bgcolor="#FFFFFF" class="style15"><? echo "$liste[ofis_kiraartis2]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira &Ouml;deme &#350;ekli :</span></span></td>
                      <td class="style15"><? echo "$liste[ofis_kiraodeme]"; ?></td>
                  </tr>
                    <tr class="sectiontableentry2">
                      <td valign="top" bgcolor="#FFFFFF" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Feshi i&ccedil;in &#304;hbar Tarihi:</span></span></td>
                      <td bgcolor="#FFFFFF" class="style15"><? echo "$liste[ofis_kirafesh]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Fesih Ko&#351;ulu :</span></span></td>
                      <td class="style15"><? echo "$liste[ofis_kirafesh_kosul]"; ?></td>
                  </tr>
                    <tr class="sectiontableentry2">
                      <td valign="top" bgcolor="#FFFFFF" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Devredilebilir mi? : </span></span></td>
                      <td bgcolor="#FFFFFF" class="style15"><? echo "$liste[ofis_kiradevir]"; ?></td>
                    </tr>
                    <tr class="sectiontableentry2">
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td class="style15">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          
            <h3 >Di&#287;er Bilgiler </h3>
           
            <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#EBEBEB">
                    <tr class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" bgcolor="#F4F4F4" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ofisin Mülkiyeti: </span></td>
                      <td bgcolor="#F4F4F4" class="style15"><? echo "$liste[ofis_mulk]"; ?></td>
                    </tr>
                    <tr class="sectiontableentry2">
                      <td valign="top" bgcolor="#FFFFFF" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ofisle Ýlgili Diðer Bilgiler </span></td>
                      <td bgcolor="#FFFFFF" class="style15"><? echo "$liste[ofis_aciklama]"; ?></td>
                    </tr>
                    <tr class="sectiontableentry2">
                      <td class="style15" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td class="style15">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
    </div></td>
  </tr>
</table>
<br style="page-break-before:always;">
<?
}
}

?>


<?
// buradan sonrasina MUDUR BILGILERI eklenecek

?>
<?

$sqlm = mysql_query("select * from mudurler where mudur_ofis='$sehir2' ");

while ($listem=mysql_fetch_array($sqlm))
{
?>
<br style="page-break-after:always;">
<table cellpadding="1" cellspacing="0" border="0" width="70%" align="center">
  <tr>
    <td>
        <table width="100%" border="0">
          <tr>
            <td width="68%"><style type="text/css">
.dynamic-tab-pane-control h3 {
	text-align:	center;
	width:		auto;
}

.dynamic-tab-pane-control h3 a {
	display:	inline;
	width:		auto;
}

.dynamic-tab-pane-control a:hover {
	background: transparent;
}
            </style>
              <strong>Müdürün Baðlý Olduðu Ofis : <? echo "<font size='3'>$listem[mudur_ofis]"; ?></strong></td>
            <td width="32%"><img src="images/destek/thylogo.jpg" width="201" height="42" /></td>
          </tr>
        </table>
        <div class="tab-page" id="CB">
          <script type="text/javascript">
var tabPaneCB = new WebFXTabPane( document.getElementById( "CB" ), 0 )
        </script>
          <div class="tab-page" id="3">
            <h3 class="tab">Müdür Bilgileri  </h3>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="EBEBEB">
                    <tr bgcolor="#F4f4f4" class=sectiontableentry2>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Müdürün Adý :</span></td>
                      <td class="style15"><? echo "$listem[mudur_name]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Göreve Baþlama Tarihi: </span></span></td>
                      <td class="style15"><? echo "$listem[mudur_baslama]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4f4f4" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Müdürün E-Posta Adresi:</span></span></td>
                      <td class="style15"><? echo "$listem[mudur_eposta]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Müdürün Telefonu :</span></span></td>
                      <td class="style15"><? echo "$listem[mudur_telefon]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4f4f4" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">M&uuml;d&uuml;rl&uuml;k Cep Telefonu:</span></td>
                      <td class="style15"><? echo "$listem[mudur_cep]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Müdürl&uuml;k Faksý :</span></span></td>
                      <td class="style15"><? echo "$listem[mudur_fax]"; ?></td>
                  </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Müdürl&uuml;k Teleksi :</span></td>
                      <td class="style15"><table width="100%" border="0">
                         
                            <? $sql5 = mysql_query("select DISTINCT(ofis_sehir),ofis_teleks,ofis_tur from ofisler where ofis_sehir='$listem[mudur_ofis]' ");

while ($liste5=mysql_fetch_array($sql5))
{
?>
 <tr>
 <?
 
$ofis_teleks=$liste5[ofis_teleks];
$ofis_tur=$liste5[ofis_tur];
?><td width="26%"> <? echo "$ofis_teleks";?></td>
                            <td width="74%"><? echo"$ofis_tur<br>"; 


?></td> 
 </tr>
                            <?
}
?>

                       
                      </table></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Müdürl&uuml;k Adresi :</span></td>
                      <td class="style15"><? echo "$listem[mudur_posta]"; ?></td>
                  </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">M&uuml;d&uuml;r&uuml;n Yetkisi: </span></td>
                      <td class="style15"><? echo "$listem[mudur_yetki]"; ?> <? echo "$listem[mudur_seflik]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h3 class="tab">Diðer Bilgiler  </h3>
            <script type="text/javascript">
  tabPaneCB.addTabPage( document.getElementById( "2" ) );</script>
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table cellpadding="1" cellspacing="0" border="0" width="95%">
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" bgcolor="#f4f4f4" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Diðer Bilgileri </span></td>
                      <td bgcolor="#f4f4f4" class="style15">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
      </div></td>
  </tr>
</table>
<br style="page-break-after:always;">
  <?
}
?>
<hr noshade>


<?
//BURAYA MÜDÜR EVI BILGILERINI KOYUYORUZ

 
$sqle = mysql_query("select * from evler where ev_sehir='$sehir2' ");

while ($listee=mysql_fetch_array($sqle))
{
?> 
 
  
<table cellpadding="1" cellspacing="0" border="0" width="70%" align="center">
  <tr>
    <td>
        <table width="100%" border="0">
          <tr>
            <td width="85%"><style type="text/css">
.dynamic-tab-pane-control h3 {
	text-align:	center;
	width:		auto;
}

.dynamic-tab-pane-control h3 a {
	display:	inline;
	width:		auto;
}

.dynamic-tab-pane-control a:hover {
	background: transparent;
}
            </style>
              <strong>EV&#304;N BA&#286;LI BULUNDU&#286;U OF&#304;S: <? echo "<font size='3'>$listee[ev_sehir]";   ?></strong></td>
            <td width="15%"><img src="images/destek/thylogo.jpg" width="201" height="42" /></td>
          </tr>
        </table>
        <div class="tab-page" id="CB">
          
          <div class="tab-page" id="3">
            <h3 class="tab">Genel Bilgiler </h3>
           
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td bordercolor="1"><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="EBEBEB">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" bordercolor="EBEBEB" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Evi Kullanan Ki&#351;i  :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><strong><? echo "$listee[ev_mudur]";   ?></strong></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="EBEBEB" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Evin Alaný: </span></td>
                      <td class="style15"><? echo "$listee[ev_alan]"; ?> m&sup2; </td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry1>
                      <td valign="top" bordercolor="EBEBEB" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Evin Adresi :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_adres]"; ?></td>
                  </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h3 class="tab">Finans Bilgileri </h3>
            
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td bgcolor="#FFFFFF"><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="EBEBEB">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ayl&#305;k Kira Bedeli (net)   : </span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_kira]"; echo "$listee[ev_kirac]"; ?></td>
                  </tr>
                    <tr class=sectiontableentry1>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Evin Vergi Oraný (%)  : </span></td>
                      <td class="style15">%<? echo "$listee[ev_vergi]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ödenen Vergi (aylýk) :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_vergi2]"; echo "$listee[ev_vergi2c]"; ?></td>
                  </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Verilen Depozito / Peþinat  : </span></td>
                      <td class="style15"><? echo "$listee[ev_depozito]"; echo "$listee[ev_depozitoc]";
 ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Verilen Emlakçý Komisyonu : </span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_emlakci]"; echo "$listee[ev_emlakcic]"; ?></td>
                  </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Harcanan Yan Giderler(aylýk)  : </span></td>
                      <td class="style15"><? echo "$listee[ev_yan]"; echo "$listee[ev_yanc]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h3 class="tab">S&ouml;zle&#351;me Bilgileri </h3>
            
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="EBEBEB">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Ba&#351;lang&#305;&ccedil; Tarihi :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_kirabas]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Biti&#351; Tarihi : </span></td>
                      <td class="style15"><? echo "$listee[ev_kirabit]"; ?></td>
                  </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me &#304;mza Tarihi :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_kiraimza]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Sözleþme Süresi: </span></td>
                      <td class="style15"><? echo "$listee[ev_kirasure]"; ?></td>
                  </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira Art&#305;&#351; Oran&#305; :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_kiraartis]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Kira Art&#305;&#351; Ko&#351;ulu :</span></td>
                      <td class="style15"><? echo "$listee[ev_kiraartis2]"; ?></td>
                  </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Feshi i&ccedil;in &#304;hbar Tarihi :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_kirafesh]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Fesih Ko&#351;ulu :</span></td>
                      <td class="style15"><? echo "$listee[ev_kirafesh_kosul]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">S&ouml;zle&#351;me Devredilebilir mi? : </span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_kiradevir]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h3 class="tab">Di&#287;er Bilgiler </h3>
           
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="EBEBEB">
                    <tr bgcolor="#E9FDFE" class=sectiontableentry1>
                      <td valign="top" bordercolor="EBEBEB" bgcolor="#F4F4F4" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Evin Mülkiyeti: </span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listee[ev_mulk]"; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ev ile  Ýlgili Diðer Bilgiler </span></td>
                      <td class="style15"><? echo "$listee[ev_aciklama]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
    </div></td>
  </tr>
</table>

<br style="page-break-after:always;">

<?
}


?>

<hr noshade>

<?
//BURAYA ARAÇLARI EKLIYORUZ

$sqla = mysql_query("select * from araclar where arac_ofis='$sehir2' ");

while ($listea=mysql_fetch_array($sqla))
{
?> 

<table cellpadding="1" cellspacing="0" border="0" width="70%" align="center">
  <tr>
    <td><table width="100%" border="0">
          <tr>
            <td width="80%"  valign="bottom"><style type="text/css">
.dynamic-tab-pane-control h3 {
	text-align:	center;
	width:		auto;
}

.dynamic-tab-pane-control h3 a {
	display:	inline;
	width:		auto;
}

.dynamic-tab-pane-control a:hover {
	background: transparent;
}
            </style>
            <strong>Aracýn Baðlý Olduðu Ofis : <? echo "<font size='3'>$listea[arac_ofis]"; ?></strong></td>
            <td valign="bottom"><img src="images/destek/thylogo.jpg" width="201" height="42" /></td>
          </tr>
        </table>
        
         
            <h3 class="tab">Teknik Bilgiler </h3>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="EBEBEB">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Arac&#305;n Markas&#305;:</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listea[arac_marka]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Arac&#305;n Modeli:</span></td>
                      <td class="style15"><? echo "$listea[arac_model]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Arac&#305;n Motor Hacmi:</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listea[arac_motor]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Arac&#305;n Y&#305;l&#305;:</span></td>
                      <td class="style15"><? echo "$listea[arac_yil]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Arac&#305;n Teknik &Ouml;zellikleri :</span></td>
                      <td bgcolor="f4f4f4" class="style15"><? echo "$listea[arac_teknik]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" bordercolor="ebebeb" class="style15" style="font-weight:bold;width:40%;"><span class="style5">Ara&ccedil;  ile &#304;lgili Di&#287;er A&ccedil;&#305;klamalar :</span></td>
                      <td class="style15"><? echo "$listea[arac_aciklama]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          
         
            <h3 class="tab">Finans Bilgileri </h3>
           
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="ebebeb">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Al&#305;m Bedeli : </td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_alimbedel]"; echo "$listea[arac_alimbedelc]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Yakla&#351;&#305;k Bedeli : </td>
                      <td class="style14"><? echo "$listea[arac_yaklasikbedel]"; echo "$listea[arac_yaklasikbedelc]";
 ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Sigorta Bedeli Y&#305;ll&#305;k:</td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_sigorta]"; echo "$listea[arac_sigortac]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Kira Bedeli Ayl&#305;k (vergi, sigorta ve yan giderler hari&ccedil;) : </td>
                      <td class="style14"><? echo "$listea[arac_kira_ay]"; echo "$listea[arac_kira_ayc]";
 ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Kira Bedeli Ayl&#305;k (vergi, sigorta ve yan giderler dahil) : </td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_kira_ay2]"; echo "$listea[arac_kira_ay2c]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Vergi Oran&#305; : </td>
                      <td class="style14"><? echo "$listea[arac_vergi]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Vergisi (ayl&#305;k) : </td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_vergi2]"; echo "$listea[arac_vergi2c]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Verilen Deozito / Pesinat : </td>
                      <td class="style14"><? echo "$listea[arac_depozito]"; echo "$listea[arac_depozitoc]";
 ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Harcanan Yan Giderler : </td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_yan]"; echo "$listea[arac_yanc]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Arac&#305;n Y&#305;ll&#305;k Bak&#305;m Masraf&#305; :</td>
                      <td class="style14"><? echo "$listea[arac_yillik]"; echo "$listea[arac_yillikc]"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td class="style14" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td class="style14">&nbsp;</td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td class="style14" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td class="style14">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
        
         
            <h3 class="tab">S&ouml;zle&#351;me Bilgileri </h3>
            
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="ebebeb">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Kira Sonunda Sat&#305;n Almak i&ccedil;in &Ouml;denecek Bedel :</td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_bedel]    "; echo "$listea[arac_bedelc]";  ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry1>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Kira S&uuml;resince &Ouml;denecek Toplam Tutar :</td>
                      <td class="style14"><? echo "$listea[arac_kira_toplam]   "; echo "$listea[arac_kira_toplamc]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Kira K&#305;sa S&uuml;reli ise Ay Say&#305;s&#305; : </td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_sure]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Ba&#351;lang&#305;&ccedil; Tarihi :</td>
                      <td class="style14"><? echo "$listea[arac_kirabas]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Biti&#351; Tarihi : </td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_kirabit]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me &#304;mza Tarihi :</td>
                      <td class="style14"><? echo "$listea[arac_kiraimza]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Kira Art&#305;&#351; Oran&#305; :</td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_kiraartis]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Kira Art&#305;&#351; Ko&#351;ulu :</td>
                      <td class="style14"><? echo "$listea[arac_kiraartis2]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Kira &Ouml;deme &#350;ekli :</td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_kiraodeme]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Feshi i&ccedil;in &#304;hbar Tarihi :</td>
                      <td class="style14"><? echo "$listea[arac_kirafesh]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Fesih Ko&#351;ulu :</td>
                      <td bgcolor="f4f4f4" class="style14"><? echo "$listea[arac_kirafesh_kosul]"; ?></td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">S&ouml;zle&#351;me Devredilebilir mi? : </td>
                      <td class="style14"><? echo "$listea[arac_kiradevir]"; ?></td>
                    </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">&nbsp;</td>
                      <td class="style14">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
         
            <h3 class="tab">Di&#287;er Bilgiler </h3>
            
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="ebebeb">
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style16" style="font-weight:bold;width:40%;"><span class="style6">Arac&#305;n Ba&#287;l&#305; Oldu&#287;u Ofis </span></td>
                      <td bgcolor="f4f4f4" class="style16"><? echo "$listea[arac_ofis]"; ?></td>
                  </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" class="style16" style="font-weight:bold;width:40%;"><span class="style6">Arac&#305;n M&uuml;lkiyeti :</span></td>
                      <td class="style16"><? echo "$listea[arac_mulk]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry1>
                      <td valign="top" class="style16" style="font-weight:bold;width:40%;"><span class="style6">Kime tahsis edildigi:</span></td>
                      <td bgcolor="f4f4f4" class="style16"><? echo "$listea[arac_kisi]"; ?></td>
                  </tr>
                    <tr class=sectiontableentry2>
                      <td valign="top" class="style16" style="font-weight:bold;width:40%;"><span class="style6">Arac&#305;n &#350;&ouml;f&ouml;r&uuml; Var m&#305;?</span></td>
                      <td class="style16"><? echo "$listea[arac_sofor]"; ?></td>
                    </tr>
                    <tr bgcolor="f4f4f4" class=sectiontableentry2>
                      <td valign="top" class="style16" style="font-weight:bold;width:40%;"><span class="style6">&#350;of&ouml;r&uuml;n Ayl&#305;k &Uuml;creti (varsa) </span></td>
                      <td bgcolor="f4f4f4" class="style16"><? echo "$listea[arac_sofor_ucret]"; echo "$listea[arac_sofor_ucretc]";
 ?></td>
                  </tr>
                </table></td>
              </tr>
            </table>
          </div>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><br style="page-break-before:always;">
  
  <?
}
?>
  
  <hr noshade>
<?
//Buraya demirbaslari ekleyelim


$sqlc = mysql_query("select * from demirbaslar where demirbas_ofis='$sehir2' ");

while ($listc=mysql_fetch_array($sqlc))
{
?>

<table cellpadding="5" cellspacing="0" border="1" width="70%" align="center">
  <tr>
    <td><link type="text/css" rel="stylesheet" href="templates/default/tab.css" />
        <p>
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
            <strong>OF&#304;S&#304;N KODU  : <? echo "<font size='3'>$listc[demirbas_ofis]";   ?></strong></td>
          </tr>
        </table>
        <br />
        <div class="tab-page" id="CB">
          
          <div class="tab-page" id="3">
            <h2 class="tab">Genel Bilgiler </h2>
            <script type="text/javascript">tabPaneCB.addTabPage( document.getElementById( "3" ) );</script>
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="0">
              <tr>
                <td><table width="95%" border="1" align="center" cellpadding="1" cellspacing="0" bordercolor="#EBEBEB">
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" bordercolor="#EBEBEB" class="style5 style15" style="font-weight:bold;width:40%;">Ekipman Cinsi  :</td>
                      <td bgcolor="#F4F4F4" class="style5"><? echo "$listc[demirbas_cins]"; ?></td>
                  </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" bordercolor="#EBEBEB" bgcolor="#FFFFFF" class="style5 style15" style="font-weight:bold;width:40%;">Ekipman M&uuml;lkiyeti :</td>
                      <td bgcolor="#FFFFFF" class="style5"><? echo "$listc[demirbas_tur]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#EBEBEB" class="style5 style15" style="font-weight:bold;width:40%;">Ekipman Markas&#305;  </td>
                      <td bgcolor="#F4F4F4" class="style5"><? echo "$listc[demirbas_marka]"; ?></td>
                    </tr>
                    <tr class=sectiontableentry1>
                      <td valign="top" bordercolor="#EBEBEB" class="style5 style15" style="font-weight:bold;width:40%;">Ekipman Modeli: </td>
                      <td class="style5"><? echo "$listc[demirbas_model]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#EBEBEB" class="style5 style15" style="font-weight:bold;width:40%;">Demirba&#351; Adet : </td>
                      <td bgcolor="#F4F4F4" class="style5"><? echo "$listc[demirbas_adet]"; ?></td>
                    </tr>
                    <tr class="sectiontableentry1">
                      <td valign="top" bordercolor="#EBEBEB" class="style5 style15" style="font-weight:bold;width:40%;">Kullan&#305;m Yeri: </td>
                      <td class="style5"><? echo "$listc[demirbas_kullanim]"; ?></td>
                    </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry1>
                      <td valign="top" bordercolor="#EBEBEB" class="style5 style15" style="font-weight:bold;width:40%;">Di&#287;er &Ouml;zellikler : </td>
                      <td class="style5"><? echo "$listc[demirbas_ozellik]"; ?></td>
                    </tr>
                </table></td>
              </tr>
            </table>
          </div>
          <div class="tab-page" id="2">
            <h2 class="tab">Finans Bilgileri </h2>
           
            <table width="95%" border="1" align="center" cellpadding="1" cellspacing="1">
              <tr>
                <td><table width="95%" border="1" align="center" cellpadding="1" cellspacing="0" bordercolor="#EBEBEB">
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Ekipman&#305;n Al&#305;m Tarihi/Hizmete girdi&#287;i tarih   : </td>
                      <td class="style5"><? echo "$listc[demirbas_altarih]"; ?> &nbsp;</td>
                  </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Ekipman Al&#305;m Bedeli  </span>:</td>
                      <td class="style5"><? echo "$listc[demirbas_alimbedel]"; ?> &nbsp;<? echo "$listc[demirbas_alimbedelc]"; ?></td>
                  </tr>
                    <tr bgcolor="#F4F4F4" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Ekipman&#305;n Ayl&#305;k Vergisi   : </span></td>
                      <td class="style5"><? echo "$listc[demirbas_vergi]"; ?> &nbsp;<?  echo "$listc[demirbas_vergic]";
 ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" class="style14" style="font-weight:bold;width:40%;">Ekipman i&ccedil;in Harcanan yan masraflar (y&#305;ll&#305;k): </span></td>
                      <td class="style5"><? echo "$listc[demirbas_yan]"; ?> &nbsp;<? echo "$listec[demirbas_yanc]"; ?></td>
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
  
  
</p>
<p>&nbsp;</p>
</html>
