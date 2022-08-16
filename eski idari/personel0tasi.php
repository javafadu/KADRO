<?

session_start();

?>
<?




require "header.php";
include "level3_check.php";
include "baglanti.php";




$sql = mysql_query("select * from personel where sicil='$id' ");
$sql2 = mysql_query("select * from kadro where sicil='$id' ");
$sicil="$id";



while ($liste4=mysql_fetch_array($sql))
{




?>

<style type="text/css">
<!--
.style1 {color: #666666}
.style2 {color: #999999}
.style3 {
	color: #990000;
	font-weight: bold;
}
-->
</style>
<body>
<form name="form1" method="post" action="kadrogir2tasiedit.php?id=<? echo "$liste4[sicil]"; ?>">
  <table width="60%" border="0" align="center" cellspacing="2" bgcolor="#EFEFEF">
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style3">Ta&#351;&#305;mak &#304;stedi&#287;iniz Ofisi Se&ccedil;iniz </td>
      <td width="38%"><label>
	  <? while ($liste5=mysql_fetch_array($sql2))
{

        ?>  
      <?
		echo "<select name=\"ofis\">";
        echo "<option value=\"$liste5[ofis]\">$liste5[ofis]</option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
      </label></td>
      <td width="28%" class="comment style2 style1"><a href="ofiskodlari.html" target="blank"><font size="1">Ofis Kodlarini G&ouml;rmek</font></a>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; Yer : </td>
      <td colspan="2"><span class="comment style2 style1">
        <?
		echo "<select name=\"yer\">";
        echo "<option value=\"$liste5[yer]\">$liste5[yer]</option> ";
        include 'includes/yercon.php';
         echo "</select> ";

?>
      </span></td>
    </tr>
    <tr>
      <td class="data style2 style1">&Uuml;nite Hareketleri </td>
      <td><label>
        <textarea name="hareket" rows="3" id="hareket"><? echo "$liste4[hareket]"; ?></textarea>
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td class="data style2 style1">K&#305;dem &Uuml;creti </td>
      <td><label>
        <input name="kidemucret" type="text" id="kidemucret" value="<? echo "$liste4[kidemucret]"; ?>" />
      </label></td>
      <td rowspan="2" class="comment style2"><select name=para id="para" >
        <option  value="<? echo "$liste4[para]"; ?>" selected><? echo "$liste4[para]"; ?></option>
        <option  value="ADF" >ADF Andorra (Franc)</option>
        <option  value="ADP">ADP Andorra (Peseta)</option>
        <option  value="AED">AED United Arabic Emir.</option>
        <option  value="AFA">AFA Afghanistan</option>
        <option  value="ALL">ALL Albania</option>
        <option  value="AMD">AMD Armenia</option>
        <option  value="ANG">ANG NL Antilla</option>
        <option  value="AON">AON Angola</option>
        <option  value="ARS">ARS Argentina</option>
        <option  value="ATS">ATS Austria (-> Euro)</option>
        <option  value="AUD">AUD Australia</option>
        <option  value="AWG">AWG Aruba</option>
        <option  value="AZM">AZM Azerbaijan</option>
        <option  value="BBD">BBD Barbados</option>
        <option  value="BDT">BDT Bangladesh</option>
        <option  value="BEF">BEF Belgium (-> Euro)</option>
        <option  value="BGL">BGL Bulgaria</option>
        <option  value="BHD">BHD Bahrain</option>
        <option  value="BIF">BIF Burundi</option>
        <option  value="BMD">BMD Bermuda</option>
        <option  value="BND">BND Brunei</option>
        <option  value="BOB">BOB Bolivia</option>
        <option  value="BRL">BRL Brasil</option>
        <option  value="BSD">BSD Bahamas</option>
        <option  value="BTN">BTN Bhutan</option>
        <option  value="BWP">BWP Botswana</option>
        <option  value="BYR">BYR Belarus</option>
        <option  value="BZD">BZD Belize</option>
        <option  value="CAD">CAD Canada</option>
        <option  value="CDF">CDF Congo/Kinshasa</option>
        <option  value="CHF">CHF Switzerland</option>
        <option  value="CLP">CLP Chile</option>
        <option  value="CNY">CNY China</option>
        <option  value="COP">COP Colombia</option>
        <option  value="CRC">CRC Costa Rica</option>
        <option  value="CUP">CUP Cuba</option>
        <option  value="CVE">CVE Cape Verde</option>
        <option  value="CYP">CYP Cyprus</option>
        <option  value="CZK">CZK Czech Republic</option>
        <option  value="DEM">DEM Germany (-> Euro)</option>
        <option  value="DJF">DJF Djibouti</option>
        <option  value="DKK">DKK Denmark</option>
        <option  value="DOP">DOP Dominican Republic</option>
        <option  value="DZD">DZD Algeria</option>
        <option  value="ECS">ECS Ecuador</option>
        <option  value="EEK">EEK Estonia</option>
        <option  value="EGP">EGP Egypt</option>
        <option  value="ERN">ERN Eritrea</option>
        <option  value="ESP">ESP Spain (-> Euro)</option>
        <option  value="ETB">ETB Ethiopia</option>
        <option  value="EUR">EUR Euroland</option>
        <option  value="FIM">FIM Finland (-> Euro)</option>
        <option  value="FJD">FJD Fiji</option>
        <option  value="FKP">FKP Falkland Islands</option>
        <option  value="FRF">FRF France (-> Euro)</option>
        <option  value="GBP">GBP Great-Britain</option>
        <option  value="GEL">GEL Georgia</option>
        <option  value="GHC">GHC Ghana</option>
        <option  value="GIP">GIP Gibraltar</option>
        <option  value="GMD">GMD Gambia</option>
        <option  value="GNF">GNF Guinea</option>
        <option  value="GRD">GRD Greece (-> Euro)</option>
        <option  value="GTQ">GTQ Guatemala</option>
        <option  value="GYD">GYD Guyana</option>
        <option  value="HKD">HKD Hong-Kong</option>
        <option  value="HNL">HNL Honduras</option>
        <option  value="HRK">HRK Croatia</option>
        <option  value="HTG">HTG Haiti</option>
        <option  value="HUF">HUF Hungary</option>
        <option  value="IDR">IDR Indonesia</option>
        <option  value="IEP">IEP Ireland (-> Euro)</option>
        <option  value="ILS">ILS Israel</option>
        <option  value="IMP">IMP Isle of Man</option>
        <option  value="INR">INR India</option>
        <option  value="IQD">IQD Iraq</option>
        <option  value="IRR">IRR Iran</option>
        <option  value="ISK">ISK Iceland</option>
        <option  value="ITL">ITL Italy (-> Euro)</option>
        <option  value="JEP">JEP Jersey</option>
        <option  value="JMD">JMD Jamaica</option>
        <option value="JOD">JOD Jordania</option>
        <option  value="JPY">JPY Japan</option>
        <option  value="KES">KES Kenya</option>
        <option  value="KGS">KGS Kyrgyzstan</option>
        <option  value="KHR">KHR Cambodia</option>
        <option  value="KMF">KMF Comoros</option>
        <option  value="KPW">KPW North Korea</option>
        <option  value="KRW">KRW South Korea</option>
        <option  value="KWD">KWD Kuwait</option>
        <option  value="KYD">KYD Cayman Islands</option>
        <option  value="KZT">KZT Kazakhstan</option>
        <option  value="LAK">LAK Laos</option>
        <option  value="LBP">LBP Lebanon</option>
        <option  value="LKR">LKR Sri Lanka</option>
        <option  value="LRD">LRD Liberia</option>
        <option  value="LSL">LSL Lesotho</option>
        <option  value="LTL">LTL Lithuania</option>
        <option  value="LUF">LUF Luxembourg (-> Euro)</option>
        <option  value="LVL">LVL Latvia</option>
        <option  value="LYD">LYD Libya</option>
        <option  value="MAD">MAD Morocco</option>
        <option  value="MDL">MDL Moldova</option>
        <option  value="MGF">MGF Madagascar</option>
        <option  value="MKD">MKD Macedonia</option>
        <option  value="MMK">MMK Myanmar</option>
        <option  value="MNT">MNT Mongolia</option>
        <option  value="MOP">MOP Macau</option>
        <option  value="MRO">MRO Mauritania</option>
        <option  value="MTL">MTL Malta</option>
        <option  value="MUR">MUR Mauritius Island</option>
        <option  value="MVR">MVR Maldives</option>
        <option  value="MWK">MWK Malawi</option>
        <option  value="MXN">MXN Mexico</option>
        <option  value="MYR">MYR Malaysia</option>
        <option  value="MZM">MZM Mozambique</option>
        <option  value="NAD">NAD Namibia</option>
        <option  value="NGN">NGN Nigeria</option>
        <option  value="NIO">NIO Nicaragua</option>
        <option  value="NLG">NLG Holland (-> Euro)</option>
        <option  value="NOK">NOK Norway</option>
        <option  value="NPR">NPR Nepal</option>
        <option  value="NTD">NTD Taiwan</option>
        <option  value="NZD">NZD New-Zealand</option>
        <option  value="OMR">OMR Oman</option>
        <option  value="PAB">PAB Panama</option>
        <option  value="PEN">PEN Peru</option>
        <option  value="PGK">PGK Papua New Guinea</option>
        <option  value="PHP">PHP Philippines</option>
        <option  value="PKR">PKR Pakistan</option>
        <option  value="PLN">PLN Poland</option>
        <option  value="PSL">PSL Seborga</option>
        <option  value="PTE">PTE Portugal (-> Euro)</option>
        <option  value="PYG">PYG Paraguay</option>
        <option  value="QAR">QAR Qatar</option>
        <option  value="ROL">ROL Romania</option>
        <option  value="RUB">RUB Russia</option>
        <option  value="RWF">RWF Rwanda</option>
        <option  value="SAR">SAR Saudi Arabia</option>
        <option  value="SBD">SBD Solomon Islands</option>
        <option  value="SCR">SCR Seychelles</option>
        <option  value="SDD">SDD Sudan (Dinar)</option>
        <option  value="SDP">SDP Sudan (Pound)</option>
        <option  value="SEK">SEK Sweden</option>
        <option  value="SGD">SGD Singapore</option>
        <option  value="SHP">SHP Saint Helena</option>
        <option  value="SIT">SIT Slovenia</option>
        <option  value="SKK">SKK Slovakia</option>
        <option  value="SLL">SLL Sierra Leone</option>
        <option  value="SOS">SOS Somalia</option>
        <option  value="SRG">SRG Suriname</option>
        <option  value="STD">STD Saint Tome/Principe</option>
        <option  value="SVC">SVC El Salvador</option>
        <option  value="SYP">SYP Syria</option>
        <option  value="SZL">SZL Swaziland</option>
        <option  value="THB">THB Thailand</option>
        <option  value="TJS">TJS Tajikistan</option>
        <option  value="TMM">TMM Turkmenistan</option>
        <option  value="TND">TND Tunisia</option>
        <option  value="TOP">TOP Tonga</option>
        <option  value="TRL">TRL Turkey (-2004)</option>
        <option  value="TRY">TRY Turkey (2005-)</option>
        <option  value="TTD">TTD Trinidad & Tobago</option>
        <option  value="TVD">TVD Tuvalu</option>
        <option  value="TWD">TWD Taiwan (NTD)</option>
        <option  value="TZS">TZS Tanzania</option>
        <option  value="UAH">UAH Ukraine</option>
        <option  value="UGX">UGX Uganda</option>
        <option  value="USD">USD United States</option>
        <option  value="UYP">UYP Uruguay</option>
        <option  value="UZS">UZS Uzbekistan</option>
        <option  value="VEB">VEB Venezuela</option>
        <option  value="VND">VND Vietnam</option>
        <option  value="VUV">VUV Vanuatu</option>
        <option  value="WST">WST Samoa (Western)</option>
        <option  value="XAF">XAF CFA Franc BEAC</option>
        <option  value="XAG">XAG Silver gram</option>
        <option  value="XAU">XAU Gold gram</option>
        <option  value="XCD">XCD East Caribbean</option>
        <option  value="XDR">XDR Special Drawing Right</option>
        <option  value="XEU">XEU ECU-European Curr. Unit</option>
        <option  value="XOF">XOF CFA Franc BCEAO</option>
        <option  value="XPD">XPD Palladium gram</option>
        <option  value="XPF">XPF French Pacific</option>
        <option  value="XPT">XPT Platinium gram</option>
        <option  value="YER">YER Yemen</option>
        <option  value="YUN">YUN Yugoslavia</option>
        <option  value="ZAR">ZAR South Africa</option>
        <option  value="ZMK">ZMK Zambia</option>
        <option  value="ZWD">ZWD Zimbabwe</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td class="data style2 style1">Net &Uuml;creti </td>
      <td><span class="style2">
        <label>
        <input name="netucret" type="text" id="netucret" value="<? echo "$liste4[netucret]"; ?>" />
        </label>
      </span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td class="data style2 style1">&Uuml;nvan&#305;</td>
      <td><label><span class="comment style2 style1">
      <?
		echo "<select name=\"unvan\">";
        echo "<option value=\"$liste5[unvan]\">$liste5[unvan]</option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?>
      </span></label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">Kadro</td>
      <td><label>
        <input name="kadro" type="text" id="kadro" value="<? echo "$liste5[kadro]"; ?>">
      </label></td>
      <td class="comment style2 style1"><input name="sicil" type="hidden" id="sicil" value="<? echo"$sicil"; ?>"></td>
    </tr>
    <tr>
      <td class="data style2 style1">&nbsp;</td>
      <td><span class="style2">
        <label>
        <input name="Submit" type="submit" id="Submit" value="Kaydet" />
        </label>
      </span></td>
      <td class="comment"><input name="Submit2" type="reset" value="Temizle" /></td>
    </tr>
  </table>
  <span class="style2">
 
  </span>
</form>
<?
		}
		?>
<?
}


?>
</body>
</html>
