<?
session_start();
?>
<?
require "header.php";
include "level2_check.php";

?>

<?


$count1 = mysql_query(" SELECT
COUNT(`kadro`.`sicil`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` LIKE  '%TURKEY%' AND
`kadro`.`sicil` <>  '0' ");

$sayi1 = mysql_fetch_assoc($count1);


$count2 = mysql_query(" SELECT
COUNT(`kadro`.`sicil`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` NOT LIKE  '%TURKEY%' AND
`kadro`.`sicil` <>  '0' ");

$sayi2 = mysql_fetch_assoc($count2);


$count3 = mysql_query(" SELECT
COUNT(`kadro`.`sicil`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` NOT LIKE  'Turkey' AND
`kadro`.`sicil` =  '0' ");

$sayi3 = mysql_fetch_assoc($count3);

$count4 = mysql_query(" SELECT
COUNT(`kadro`.`sicil`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1`  LIKE  'Turkey' AND
`kadro`.`sicil` =  '0' ");

$sayi4 = mysql_fetch_assoc($count4);



$count5 = mysql_query("SELECT
COUNT(`kadro`.`sozpart`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` NOT LIKE  'TURKEY' AND
`kadro`.`sicil` <>  '0' AND
`kadro`.`sozpart` LIKE  '%meli%' ");
$sayi5 = mysql_fetch_assoc($count5);

$count6 = mysql_query("SELECT
COUNT(`kadro`.`sozpart`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` NOT LIKE  'TURKEY' AND
`kadro`.`sicil` <>  '0' AND
`kadro`.`sozpart` NOT LIKE  '%meli%' and `kadro`.`sozpart` NOT LIKE '%art%' and `kadro`.`sozpart` NOT LIKE '%ger%' ");
$sayi6 = mysql_fetch_assoc($count6);


$count7 = mysql_query("SELECT
COUNT(`kadro`.`sozpart`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` NOT LIKE  'TURKEY' AND
`kadro`.`sicil` <>  '0' AND
`kadro`.`sozpart` LIKE  '%art%' ");
$sayi7 = mysql_fetch_assoc($count7);




$count8 = mysql_query("SELECT
COUNT(`kadro`.`sozpart`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` LIKE  'TURKEY' AND
`kadro`.`sicil` <>  '0' AND
`kadro`.`sozpart` LIKE  '%meli%' ");
$sayi8 = mysql_fetch_assoc($count8);


$count9 = mysql_query("SELECT
COUNT(`kadro`.`sozpart`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` LIKE  'TURKEY' AND
`kadro`.`sicil` <>  '0' AND
`kadro`.`sozpart` NOT LIKE  '%meli%' and `kadro`.`sozpart` NOT LIKE '%art%' and `kadro`.`sozpart` NOT LIKE '%ger%' ");
$sayi9 = mysql_fetch_assoc($count9);

$count10 = mysql_query("SELECT
COUNT(`kadro`.`sozpart`)
FROM
`ofislist`
Inner Join `kadro` ON `kadro`.`ofis` = `ofislist`.`sehir_kod`
WHERE
`ofislist`.`ofisulke1` LIKE  'TURKEY' AND
`kadro`.`sicil` <>  '0' AND
`kadro`.`sozpart` LIKE  '%art%' ");
$sayi10 = mysql_fetch_assoc($count10);

//D Kadrolari

$count11 = mysql_query("SELECT
COUNT(`sicil`)
FROM
kadro
WHERE
`sicil` <>  '0' AND
`kadro`='D-1' ");
$sayi11 = mysql_fetch_assoc($count11);

$count12 = mysql_query("SELECT
COUNT(`sicil`)
FROM
kadro
WHERE
`sicil` <>  '0' AND
`kadro`='D-2' ");
$sayi12 = mysql_fetch_assoc($count12);

$count13 = mysql_query("SELECT
COUNT(`sicil`)
FROM
kadro
WHERE
`sicil` <>  '0' AND
`kadro`='D-3' ");
$sayi13 = mysql_fetch_assoc($count13);

$count14 = mysql_query("SELECT
COUNT(`sicil`)
FROM
kadro
WHERE
`sicil` <>  '0' AND
`kadro`='D-4' ");
$sayi14 = mysql_fetch_assoc($count14);

//D lerin Merksz Mahalli Sayilari

$count15 = mysql_query("SELECT
COUNT(`sicil`)
FROM
kadro
WHERE
`sicil` <>  '0' AND
`kadro`='D-2' AND mahmer like '%maha%' ");
$sayi15 = mysql_fetch_assoc($count15);


$count16 = mysql_query("SELECT
COUNT(`sicil`)
FROM
kadro
WHERE
`sicil` <>  '0' AND
`kadro`='D-3' AND mahmer like '%maha%' ");
$sayi16 = mysql_fetch_assoc($count16);

//Baskanliklara bagli personel sayisi


$count17 = mysql_query("select COUNT(*) from kadro where ofis like '%PSB%' and sicil<>0  ");
$sayi17 = mysql_fetch_assoc($count17);

$count18 = mysql_query("select COUNT(*) from kadro where ofis like '%GYB%' and sicil<>0  ");
$sayi18 = mysql_fetch_assoc($count18);

$count19 = mysql_query("select COUNT(*) from kadro where ofis like '%UPB%' and sicil<>0  ");
$sayi19 = mysql_fetch_assoc($count19);

$count20 = mysql_query("select COUNT(*) from kadro where ofis like '%IGB%' and sicil<>0  ");
$sayi20 = mysql_fetch_assoc($count20);

$count21 = mysql_query("select COUNT(*) from kadro where ofis like '%kargo%' and sicil<>0  ");
$sayi21 = mysql_fetch_assoc($count21);

$count22 = mysql_query("select COUNT(*) from kadro where ofis like '%dari%' and sicil<>0  ");
$sayi22 = mysql_fetch_assoc($count22);

$count23 = mysql_query("select COUNT(*) from kadro where ofis like '%Tic Gn%'  and sicil<>0  ");
$sayi23 = mysql_fetch_assoc($count23);


$count24 = mysql_query("SELECT
COUNT(`kadro`.`sicil`)
FROM
`ofislist`
Inner Join `kadro` ON `ofislist`.`sehir_kod` = `kadro`.`ofis`
WHERE
`kadro`.`sicil` <>  '0' AND
`ofislist`.`ofisulke1` LIKE  '%TURKEY%' AND
`kadro`.`ofis` NOT LIKE  '%PSB%' AND
`kadro`.`ofis` NOT LIKE  '%UPB%' AND
`kadro`.`ofis` NOT LIKE  '%IGB%' AND
`kadro`.`ofis` NOT LIKE  '%Kargo%' AND
`kadro`.`ofis` NOT LIKE  '%GYB%'
  ");
$sayi24 = mysql_fetch_assoc($count24);

?>
<link href="css/all.css" rel="stylesheet" type="text/css" />
<br />
<table width="82%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E8E8" bgcolor="fffffe">
            <tr>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td>&nbsp;</td>
              <td bgcolor="#FFFFCC">&nbsp;</td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bordercolor="#FFFFFE" bgcolor="#FFFFFE">&nbsp;</td>
              <td bgcolor="#FFFFFE"><strong>Genel M&uuml;d&uuml;rl&uuml;kteki Birimleri: </strong></td>
              <td bgcolor="#FFFFCC">&nbsp;</td>
            </tr>
            <tr>
              <td width="1%" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td width="32%">Sisteme Kay&#305;tl&#305; Yurtiçi Personel Say&#305;s&#305;:</td>
              <td width="6%" bgcolor="#FFFFCC"><strong><? echo"".$sayi1['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
              <td width="13%" bgcolor="f4f4f4">&nbsp;</td>
              <td width="1%" bordercolor="#FFFFFE" bgcolor="#FFFFFE">&nbsp;</td>
              <td width="43%" bgcolor="#FFFFFE">Pazarlama Sat&#305;&#351; Ba&#351;kanl&#305;&#287;&#305;na Ba&#287;l&#305; Personel Say&#305;s&#305;</td>
              <td width="4%" bgcolor="#FFFFCC"><strong><? echo"".$sayi17['COUNT(*)'].""; ?></strong></td>
            </tr>
            <tr>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td>Sisteme Kay&#305;tl&#305; Yurti&ccedil;i Bo&#351; Kadro Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi3['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bordercolor="#FFFFFE" bgcolor="#FFFFFE">&nbsp;</td>
              <td bgcolor="#FFFFFE">Gelir Y&ouml;netim Ba&#351;kanl&#305;&#287;&#305;na Ba&#287;l&#305; Personel Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi18['COUNT(*)'].""; ?></strong></td>
            </tr>
            <tr>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bordercolor="#FFFFFE" bgcolor="#FFFFFE">&nbsp;</td>
              <td bgcolor="#FFFFFE">&Uuml;retim Planlama Ba&#351;kanl&#305;&#287;&#305;na Ba&#287;l&#305; Personel Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi19['COUNT(*)'].""; ?></strong></td>
            </tr>
            <tr>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; Personel Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi2['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bordercolor="#FFFFFE" bgcolor="#FFFFFE">&nbsp;</td>
              <td bgcolor="#FFFFFE">&#304;&#351; Geli&#351;tirme Ba&#351;kanl&#305;&#287;&#305;na Ba&#287;l&#305; Personel Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi20['COUNT(*)'].""; ?></strong></td>
            </tr>
            <tr>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td>Sisteme Kay&#305;tl&#305; Yurti&ccedil;i Bo&#351; Kadro Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi4['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bordercolor="#FFFFFE" bgcolor="#FFFFFE">&nbsp;</td>
              <td bgcolor="#FFFFFE">Kargo Ba&#351;kanl&#305;&#287;&#305;na Ba&#287;l&#305; Personel Say&#305;s&#305; </td>
              <td bgcolor="#FFFFCC"><strong><? echo"".$sayi21['COUNT(*)'].""; ?></strong></td>
            </tr>
            <tr bgcolor="#E9F1F8">
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
              <td bgcolor="#E9F1F8">&nbsp;</td>
            </tr>
            <tr>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#ECFFFF"><strong>TOPLAM PERSONEL Say&#305;s&#305; </strong></td>
              <td bgcolor="#ECFFFF"><strong><? echo"".$sayi2['COUNT(`kadro`.`sicil`)']+$sayi1['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bgcolor="#ECFFFF">&nbsp;</td>
              <td bgcolor="#ECFFFF">&#304;dari &#304;&#351;ler Personel Say&#305;s&#305; </td>
              <td bgcolor="#ECFFFF"><strong><? echo"".$sayi22['COUNT(*)'].""; ?></strong></td>
            </tr>
            <tr>
              <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#ECFFFF"><strong>TOPLAM BO&#350; KADRO Say&#305;s&#305; </strong></td>
              <td bgcolor="#ECFFFF"><strong><? echo"".$sayi4['COUNT(`kadro`.`sicil`)']+$sayi3['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
              <td bgcolor="f4f4f4">&nbsp;</td>
              <td bgcolor="#ECFFFF">&nbsp;</td>
              <td bgcolor="#ECFFFF">Ticari Genel M&uuml;d&uuml;r Yard. Personel Say&#305;s&#305; </td>
              <td bgcolor="#ECFFFF"><strong><? echo"".$sayi23['COUNT(*)'].""; ?></strong></td>
            </tr>
</table>
 <br />
 <table width="82%" border="0" align="center">
  <tr>
    <td valign="top"><table width="80%" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E8E8E8" bgcolor="fffffe">
      <tr>
        <td width="4%" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="82%">Sisteme Kay&#305;tl&#305;<strong> Yurtd&#305;&#351;&#305; Kadrolu</strong> Personel Say&#305;s&#305;:</td>
        <td width="14%" bgcolor="#FFFFCC"><strong><? echo"".$sayi6['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; <strong>Yurtd&#305;&#351;&#305; S&ouml;zle&#351;meli</strong> Personel Say&#305;s&#305;:</td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi5['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; <strong>Yurtd&#305;&#351;&#305; Part-Time</strong> Personel Say&#305;s&#305;:</td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi7['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr bgcolor="#E9F1F8">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; <strong>Yurti&ccedil;i Kadrolu</strong> Personel Say&#305;s&#305;:</td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi9['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; <strong>Yurti&ccedil;i S&ouml;zle&#351;meli</strong> Personel Say&#305;s&#305;:</td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi8['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; <strong>Yurti&ccedil;i Part-Time</strong> Personel Say&#305;s&#305;:</td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi10['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bgcolor="#E9F1F8">&nbsp;</td>
        <td bgcolor="#E9F1F8">&nbsp;</td>
        <td bgcolor="#E9F1F8">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305;<strong> D-1</strong> Personel </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi11['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; <strong>D-2</strong> Personel </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi12['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305;<strong> D-3</strong> Personel </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi13['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; <strong>D-4</strong> Personel </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi14['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bgcolor="#E9F1F8">&nbsp;</td>
        <td bgcolor="#E9F1F8">&nbsp;</td>
        <td bgcolor="#E9F1F8">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; <strong>D-2 Mahalli </strong></td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi15['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; <strong>D-2 Merkez Atamal&#305; </strong></td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi12['COUNT(`sicil`)']-$sayi15['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; <strong>D-3 Mahalli </strong></td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi16['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Sisteme Kay&#305;tl&#305; Yurtd&#305;&#351;&#305; <strong>D-3 Merkez Atamal&#305; </strong></td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi13['COUNT(`sicil`)']-$sayi16['COUNT(`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td valign="top"><table width="80%" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E8E8E8" bgcolor="fffffe">
      <tr>
        <td width="4%" bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="82%">Yurtd&#305;&#351;&#305; Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri Personel Say&#305;s&#305; </td>
        <td width="14%" bgcolor="#FFFFCC"><strong><? echo"".$sayi2['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Yurti&ccedil;i Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri Personel Say&#305;s&#305; </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi24['COUNT(`kadro`.`sicil`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr bgcolor="#E9F1F8">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Yurtd&#305;&#351;&#305; Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri Erkek Personel Say&#305;s&#305; </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi9['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Yurtd&#305;&#351;&#305; Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri Bayan Personel Say&#305;s&#305; </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi8['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr bgcolor="#E9F1F8">
        <td bordercolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>Yurti&ccedil;i Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri Erkek Personel Say&#305;s&#305; </td>
        <td bgcolor="#FFFFCC"><strong><? echo"".$sayi10['COUNT(`kadro`.`sozpart`)'].""; ?></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Yurti&ccedil;i Sat&#305;&#351; M&uuml;d&uuml;rl&uuml;kleri Bayan Personel Say&#305;s&#305; </td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#E9F1F8">&nbsp;</td>
        <td bgcolor="#E9F1F8">&nbsp;</td>
        <td bgcolor="#E9F1F8">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td bordercolor="#FFFFFF" bgcolor="#FFFFFF">&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td bgcolor="#FFFFCC">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<div align="center"><br />
</div>
</body>
          </html>
        </p>
</div>
