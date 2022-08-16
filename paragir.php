<?
session_start();
?>
<?
require "header2.php";
include "level2_check.php";

?>

<a href="http://finance.yahoo.com/currency/convert?amt=1&from=BHD&to=TRY&submit=Convert" target="_blank"><center><u> PAR&#304;TELER &#304;&Ccedil;&#304;N TIKLAYINIZ</u> </a> 

<table width="75%" border="0" align="center">
     <? $sql=mysql_query("select * from paradeger where id=0");
	
	while($liste= mysql_fetch_array($sql))
	{
	?>
    <div align="center"></div>
    <form name="form1" method="get" action="paragir2.php">
  
    <tr bgcolor="#999999">
    <td width="94"><span class="style1">&Uuml;LKE</span></td>
    <td width="120"><span class="style1">PARA ADI </span></td>
    <td width="83"><span class="style1">SAY. KOD </span></td>
    <td><span class="style1">KOD</span></td>
    <td width="163"><div align="center" class="style1">
      <div align="center">YTL De&#287;eri <br>
      1 br = ()Ytl </div>
    </div></td>
    <td width="141"><div align="center" class="style1">&Ouml;nceki YTL De&#287;eri </div></td>
    <td width="141"><span class="style1">&Ouml;nceki Dolar De&#287;eri </span></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>BULGARISTAN</td>
    <td>BULGARiSTAN LEVASI</td>
    <td>100</td>
    <td>BGN</td>
    <td><label>
      <div align="center">
        <input name="bgn" type="text" id="bgn" value="<? echo"$liste[BGN]"; ?>" size="12">
        </div>
    </label></td>
    <td><div align="center"><? echo"$liste[BGN]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[BGN]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>&Ccedil;&#304;N</td>
    <td>YUAN RENMINBI</td>
    <td>156</td>
    <td>CNY</td>
    <td><div align="center">
      <input name="cny" type="text" id="cny" value="<? echo"$liste[CNY]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[CNY]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[CNY]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>HIRVATISTAN</td>
    <td>HIRVATISTAN KUNASi</td>
    <td>191</td>
    <td>HRK</td>
    <td><div align="center">
      <input name="hrk" type="text" id="hrk" value="<? echo"$liste[HRK]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[HRK]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[HRK]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>&Ccedil;EKOSLAVAKYA</td>
    <td>&Ccedil;EKOSLOVAK KORUNASI</td>
    <td>200</td>
    <td>CSK</td>
    <td><div align="center">
      <input name="csk" type="text" id="csk" value="<? echo"$liste[CSK]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[CSK]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[CSK]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>DAN&#304;MARKA</td>
    <td>DANIMARKA KRONU</td>
    <td>208</td>
    <td>DKK</td>
    <td><div align="center">
      <input name="dkk" type="text" id="dkk" value="<? echo"$liste[DKK]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[DKK]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[DKK]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>HONG KONG</td>
    <td>HONG KONG DOLARi</td>
    <td>344</td>
    <td>HKD</td>
    <td><div align="center">
      <input name="hkd" type="text" id="hkd" value="<? echo"$liste[HKD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[HKD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[HKD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>MACARiSTAN</td>
    <td>MACAR FLORiNTi</td>
    <td>348</td>
    <td>HUF</td>
    <td><div align="center">
      <input name="huf" type="text" id="huf" value="<? echo"$liste[HKD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[HUF]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[HUF]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>IRAN</td>
    <td>IRAN RiYAL&#304;</td>
    <td>364</td>
    <td>IRR</td>
    <td><div align="center">
      <input name="irr" type="text" id="irr" value="<? echo"$liste[IRR]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[IRR]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[IRR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>JAPONYA</td>
    <td>JAPON YENI</td>
    <td>392</td>
    <td>JPY</td>
    <td><div align="center">
      <input name="jpy" type="text" id="jpy" value="<? echo"$liste[IRR]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[JPY]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[JPY]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>URDUN</td>
    <td>URDUN DINARI</td>
    <td>400</td>
    <td>JOD</td>
    <td><div align="center">
      <input name="jod" type="text" id="jod" value="<? echo"$liste[JOD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[JOD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[JOD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>KUVEYT</td>
    <td>KUVEYT DINARI</td>
    <td>414</td>
    <td>KWD</td>
    <td><div align="center">
      <input name="kwd" type="text" id="kwd" value="<? echo"$liste[KWD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[KWD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[KWD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>LIBYA</td>
    <td>LIBYA DINARI</td>
    <td>434</td>
    <td>LYD</td>
    <td><div align="center">
      <input name="lyd" type="text" id="lyd" value="<? echo"$liste[LYD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[LYD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[LYD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>NORVEC</td>
    <td>NORVEC KRONU</td>
    <td>578</td>
    <td>NOK</td>
    <td><div align="center">
      <input name="nok" type="text" id="nok" value="<? echo"$liste[NOK]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[NOK]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[NOK]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>PAKISTAN</td>
    <td>PAKISTAN RUPiSi</td>
    <td>586</td>
    <td>PKR</td>
    <td><div align="center">
      <input name="pkr" type="text" id="pkr" value="<? echo"$liste[PKR]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[PKR]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[PKR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>SUUDi ARABiSTAN</td>
    <td>S.ARABiSTAN RIYALI</td>
    <td>682</td>
    <td>SAR</td>
    <td><div align="center">
      <input name="sar" type="text" id="sar" value="<? echo"$liste[SAR]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[SAR]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[SAR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>S&#304;NGAPUR</td>
    <td>SiNGAPUR DOLARI</td>
    <td>702</td>
    <td>SGD</td>
    <td><div align="center">
      <input name="sgd" type="text" id="sgd" value="<? echo"$liste[SGD]";?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[SGD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[SGD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>&#304;SVE&Ccedil;</td>
    <td>ISVE&Ccedil; KRONU</td>
    <td>752</td>
    <td>SEK</td>
    <td><div align="center">
      <input name="sek" type="text" id="sek" value="<? echo"$liste[SEK]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[SEK]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[SEK]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>&#304;SV&#304;&Ccedil;RE</td>
    <td>ISV&#304;&Ccedil;RE FRANKI</td>
    <td>756</td>
    <td>CHF</td>
    <td><div align="center">
      <input name="chf" type="text" id="chf" value="<? echo"$liste[CHF]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[CHF]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[CHF]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>SURiYE</td>
    <td>SURIYE LiRASl</td>
    <td>760</td>
    <td>SYP</td>
    <td><div align="center">
      <input name="syp" type="text" id="syp" value="<? echo"$liste[SYP]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[SYP]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[SYP]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>TAYLAND</td>
    <td>TAYLAND BAHTi</td>
    <td>764</td>
    <td>THB</td>
    <td><div align="center">
      <input name="thb" type="text" id="thb" value="<? echo"$liste[THB]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[THB]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[THB]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>BARAP EMlRLiKLERf</td>
    <td>B.A.E. DIRHEM&#304;</td>
    <td>784</td>
    <td>AED</td>
    <td><div align="center">
      <input name="aed" type="text" id="aed" value="<? echo"$liste[AED]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[AED]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[AED]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>TUNUS</td>
    <td>TUNUS DINARI</td>
    <td>788</td>
    <td>TND</td>
    <td><div align="center">
      <input name="tnd" type="text" id="tnd" value="<? echo"$liste[TND]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[TND]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[TND]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>MISiR</td>
    <td>MISIR LiRASI</td>
    <td>818</td>
    <td>EGP</td>
    <td><div align="center">
      <input name="egp" type="text" id="egp" value="<? echo"$liste[EGP]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[EGP]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[EGP]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>INGILTERE</td>
    <td>INGiLlZ STERLiNi</td>
    <td>826</td>
    <td>GBP</td>
    <td><div align="center">
      <input name="gbp" type="text" id="gbp" value="<? echo"$liste[GBP]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[GBP]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[GBP]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>AMERIKA</td>
    <td>AMERiKAN DOLARI</td>
    <td>840</td>
    <td>USD</td>
    <td><div align="center">
      <input name="usd" type="text" id="usd" value="<? echo"$liste[USD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[USD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[USD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>EURO</td>
    <td>EURO</td>
    <td>978</td>
    <td>EUR</td>
    <td><div align="center">
      <input name="eur" type="text" id="eur" value="<? echo"$liste[EUR]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[EUR]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[EUR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#F9F9F9">
    <td>POLONYA</td>
    <td>POLONYA ZLOTY</td>
    <td>985</td>
    <td>PLN</td>
    <td><div align="center">
      <input name="pln" type="text" id="pln" value="<? echo"$liste[PLN]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[PLN]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[PLN]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>CEZAYIR</td>
    <td>CEZAYIR DiNARi</td>
    <td>12</td>
    <td>DZD</td>
    <td><div align="center">
      <input name="dzd" type="text" id="dzd" value="<? echo"$liste[DZD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[DZD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[DZD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>BAHREYN</td>
    <td>BAHREYN DINAR!</td>
    <td>48</td>
    <td>BHD</td>
    <td><div align="center">
      <input name="bhd" type="text" id="bhd" value="<? echo"$liste[BHD]"; ?>" size="12">
    </div></td>
    <td><div align="center"><? echo"$liste[BHD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[BHD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#F9F9F9">UKRAYNA</td>
    <td bgcolor="#F9F9F9">UKRAYNA</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">UAH</td>
    <td bgcolor="#F9F9F9"><div align="center">
      <input name="uah" type="text" id="uah" value="<? echo"$liste[UAH]"; ?>" size="12" />
    </div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? echo"$liste[UAH]"; ?></div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? printf("%.4f",$liste[UAH]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>RUSYA</td>
    <td>RUBLE</td>
    <td>48</td>
    <td>RUB</td>
    <td><div align="center">
        <input name="rub" type="text" id="rub" value="<? echo"$liste[RUB]"; ?>" size="12" />
    </div></td>
    <td><div align="center"><? echo"$liste[RUB]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[RUB]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#F9F9F9"><p>QUATAR Rial </p>      </td>
    <td bgcolor="#F9F9F9">R&#304;AL</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">QAR</td>
    <td bgcolor="#F9F9F9"><div align="center">
      <input name="qar" type="text" id="qar" value="<? echo"$liste[QAR]"; ?>" size="12" />
    </div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? echo"$liste[QAR]"; ?></div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? printf("%.4f",$liste[QAR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td>CZECH Koruna</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CZK</td>
    <td><div align="center">
        <input name="czk" type="text" id="czk" value="<? echo"$liste[CZK]"; ?>" size="12" />
    </div></td>
    <td><div align="center"><? echo"$liste[CZK]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[CZK]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#F9F9F9">SUDAN Dinar&#305; </td>
    <td bgcolor="#F9F9F9">Dinar</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">SDD</td>
    <td bgcolor="#F9F9F9"><div align="center">
        <input name="sdd" type="text" id="sdd" value="<? echo"$liste[SDD]"; ?>" size="12" />
    </div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? echo"$liste[SDD]"; ?></div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? printf("%.4f",$liste[SDD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#EBEBEB">AUSTRALIAN DOLLAR </td>
    <td bgcolor="#EBEBEB">Dollar</td>
    <td bgcolor="#EBEBEB">&nbsp;</td>
    <td bgcolor="#EBEBEB">AUD</td>
    <td><div align="center">
        <input name="aud" type="text" id="aud" value="<? echo"$liste[AUD]"; ?>" size="12" />
    </div></td>
    <td><div align="center"><? echo"$liste[AUD]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[AUD]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#F9F9F9">KOREAN WON </td>
    <td bgcolor="#F9F9F9">WON</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">KRW</td>
    <td bgcolor="#F9F9F9"><div align="center">
        <input name="krw" type="text" id="krw" value="<? echo"$liste[KRW]"; ?>" size="12" />
    </div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? echo"$liste[KRW]"; ?></div></td>
    <td bgcolor="#F9F9F9"><div align="center"><? printf("%.4f",$liste[KRW]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#EBEBEB">
    <td>HINDISTAN INDIA </td>
    <td>Rupee</td>
    <td>&nbsp;</td>
    <td>INR</td>
    <td><div align="center">
        <input name="inr" type="text" id="inr" value="<? echo"$liste[INR]"; ?>" size="12" />
    </div></td>
    <td><div align="center"><? echo"$liste[INR]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[INR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#F9F9F9">YEMEN Riyal </td>
    <td bgcolor="#F9F9F9">Riyal</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">YER</td>
    <td><div align="center">
        <input name="yer" type="text" id="yer" value="<? echo"$liste[YER]"; ?>" size="12" />
    </div></td>
    <td><div align="center"><? echo"$liste[YER]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[YER]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="#EBEBEB">
    <td>OMAN Riyal </td>
    <td>Riyal</td>
    <td>&nbsp;</td>
    <td>OMR</td>
    <td><div align="center">
        <input name="omr" type="text" id="omr" value="<? echo"$liste[OMR]"; ?>" size="12" />
    </div></td>
    <td><div align="center"><? echo"$liste[OMR]"; ?></div></td>
    <td><div align="center"><? printf("%.4f",$liste[OMR]/$liste[USD]); ?></div></td>
  </tr>
  <tr bgcolor="EBEBEB">
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td bgcolor="#F9F9F9">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><input name="id" type="hidden" id="id" value="<? echo"$liste[id]"; ?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td><?
}
?>

    <td><label>
      <input type="submit" name="Submit" value="KAYDET"> </form>
    <td>&nbsp;</td>
  </tr>
</table>




</html>
