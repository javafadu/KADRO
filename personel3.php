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


$sql = mysql_query("select * from kadro where id='$id'");





while ($liste=mysql_fetch_array($sql))
{
$ofis=$liste[ofis];



?>
<link href="css/all.css" rel="stylesheet" type="text/css" />

<table cellpadding="5" cellspacing="0" border="0" width="60%">
  <tr>
    <td>
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
            <strong>Bos Kadro  : </strong></td>
            
            <td width="34%" align="right"><label> <? echo "<a href='bosedit.php?id=$liste[id]'>:: <u>D&uuml;zenle</u> :: </a>"; ?>    </label></td>
            <td width="7%" align="right"><a href="bosdelete.php?id=<? echo "$liste[id]"; ?>">
              <? if($_SESSION['level']==4 OR $_SESSION['level']==3 ) echo"::Sil::"; ?>
            </a></td>
            
          </tr>
        </table>
        <br />
        
            <table cellpadding="5" cellspacing="0" border="0" width="95%">
              <tr>
                <td><table cellpadding="5" cellspacing="0" border="0" width="95%">
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Ba&#351;kanl&#305;k:</td>
                      <td><? echo "$liste[baskan]";?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">M&uuml;d&uuml;rl&uuml;k:</td>
                      <td><? echo "$liste[bolge]";?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
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
                    <tr bgcolor="#E9FDFE" class=sectiontableentry1>
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
                      <td valign="top" style="font-weight:bold;width:40%;">&Uuml;nvan:</td>
                      <td><? echo "$liste[unvan]";?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Kadro  : </td>
                      <td><? echo "$liste[kadro]";?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Durum:</td>
                      <td><? echo "$liste[durum]";?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">Merkezi / Mahalli  : </td>
                      <td><? echo "$liste[mahmer]";?></td>
                    </tr>
                    <tr bgcolor="#E9FDFE" class="sectiontableentry2">
                      <td valign="top" style="font-weight:bold;width:40%;">S&ouml;zle&#351;meli / Part-Time: </td>
                      <td><? echo "$liste3[sozpart]";?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF" class=sectiontableentry2>
                      <td valign="top" style="font-weight:bold;width:40%;">But&ccedil;e:</td>
                      <td><? echo "$liste3[butce]";?></td>
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
