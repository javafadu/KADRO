<?

session_start();

?>
<?




require "header.php";
include "level3_check.php";
include "baglanti.php";




$sql = mysql_query("select * from personel where sicil='$id' ");
$sql2 = mysql_query("select * from kadro where sicil='$id' ");
$sql3 = mysql_query("select * from personelbilgi where sicil='$id' ");
$sicil="$id";



while ($liste4=mysql_fetch_array($sql))
{




?>

<style type="text/css">
<!--
.style1 {color: #666666}
.style2 {color: #999999}
.style10 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style12 {font-size: 9px}
.style14 {color: #000000}
.style15 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 9px; color: #000000; }
.style25 {font-size: 10px}
.style20 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style21 {font-family: Verdana}
.style24 {	color: #990000;
	font-weight: bold;
}
-->
</style>
<body>
<form name="form1" method="post" action="kadrogir2edit.php?id=<? echo "$liste4[sicil]"; ?>">
  <table border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFC">
    <tr bgcolor="#EFEFEF">
      <td width="109" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="comment style12 style21"><span class="style1"><strong>KADRO B&#304;LG&#304;LER&#304; </strong></span></td>
      <td width="195" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="comment style1 style2">&nbsp;</td>
      <td width="8" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="data style10 style12 style14">&nbsp;</td>
      <td width="152" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="style16 style21 style12 data"><strong>KADRO B&#304;LG&#304;LER&#304; </strong></td>
      <td width="204" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="style1">&nbsp;</td>
      <td width="8" bordercolor="#FFFFFF" bgcolor="#FFFFFC" class="comment style1 style2">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td bordercolor="f4f4f4" bgcolor="#FFEAEA" class="style16 style21 style12 comment"><span class="style24">Sicil No: </span></td>
      <td bordercolor="f4f4f4" bgcolor="#FFEAEA" class="comment style1 style2"><input name="sicil" type="text" id="sicil" value="<? echo"$liste4[sicil]"; ?>">
        (Kesinlikle Girilmeli) </td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">Ofis Kodu </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="style1">
	  
	  <? 
	  $kadrolu=mysql_query("select * from kadro where sicil='$sicil' ");
	  while($liste5=mysql_fetch_array($kadrolu))
	  {
	  
	  echo"$liste5[ofis]";
	  
	  ?>
	  
	  
	  &nbsp;</td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFC" class="comment style1 style2">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td bordercolor="f4f4f4"><span class="data style12 style21 style16">&#304;sim Soyisim </span></td>
      <td bordercolor="f4f4f4"><span class="comment style1 style2">
        <input name="isim" type="text" id="isim" value="<? echo"$liste4[isim]"; ?>">
      </span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">&Uuml;nvan&#305;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="style1"><span class="style15">
        <label> </label>
        </span>
          <label><span class="comment style2 style1">
          <?
		echo "<select name=\"unvan\">";
        echo "<option value=\"$liste5[unvan]\">$liste5[unvan]</option> ";
        include 'includes/unvancon.php';
         echo "</select> ";

?>
          </span></label></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFC">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td bordercolor="f4f4f4"><span class="data style12 style21 style16">Tahsili</span></td>
      <td bordercolor="f4f4f4"><span class="comment style1 style2">
        <input name="tahsil" type="text" id="tahsil" value="<? echo"$liste4[tahsil]"; ?>">
      </span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">Kadro (&#304;&#351; Grubu) </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <label></label>
        <label>
        <input name="kadro" type="text" id="kadro" value="<?   echo"$liste5[kadro]"; ?>">
        </label>
        </span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFC">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td bordercolor="#FFFFFC" bgcolor="#FFFFFC">&nbsp;</td>
      <td bordercolor="#FFFFFC" bgcolor="#FFFFFC"><? echo"$liste4[tahsil]"; ?></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">&#304;&#351;e Ba&#351;lama Tarihi </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <label>
        <input name="bastarihi" type="text" id="bastarihi" value="<?  echo"$liste4[bastarihi]"; ?>" />
        </label>
      </span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFC">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="f4f4f4" bgcolor="#F4F4F4" class="comment style12 style16 style20"><span class="comment style1 style2"><span class="data style12 style21 style16">Para Birimi </span></span></td>
      <td bordercolor="f4f4f4" bgcolor="#F4F4F4" class="comment style10 style12 style14"><span class="comment style1 style2">
        <select name=para id="para" >
          <option  value="<? echo"$liste4[para]"; ?>" selected><? echo"$liste4[para]"; ?></option>
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
        </select>
      </span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="style15 style21 style16">&Uuml;nite Hareketleri </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <label>
        <textarea name="hareket" rows="3" id="hareket"><?  echo"$liste4[hareket]"; ?>
        </textarea>
        </label>
      </span></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFC" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bordercolor="f4f4f4" class="comment style2 style1"><span class="comment style10 style12 style16"><strong>Not:</strong> Kidem &uuml;cret ve net &uuml;creti girerken bin ay&#305;rac&#305; i&ccedil;in<br>
        nokta veya virg&uuml;l kullanmay&#305;n&#305;z. K&uuml;s&uuml;rat i&ccedil;in nokta  kullan&#305;n&#305;z <br>
        &ouml;r: 7200.50<br>
      </span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">&Ccedil;al&#305;&#351;t&#305;&#287;&#305; Yer </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><?
		echo "<select name=\"yer\">";
        echo "<option value=$liste5[yer]>$liste5[yer]</option> ";
        include 'includes/yercon.php';
         echo "</select> ";

?></td>
      <td bordercolor="#FFFFFF" bgcolor="#FFFFFC" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="comment style12 style16 style20"><span class="comment style2 style1"><span class="data style12 style21 style16">K&#305;dem &Uuml;creti</span></span></td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="comment style10 style12 style14"><span class="comment style2 style1"><span class="style1">
        <input name="kidemucret" type="text" id="kidemucret" value="<? echo"$liste4[kidemucret]"; ?>" />
      </span></span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">Merkezi/Mahalli</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <label>
        <select name="mahmer" id="mahmer">
          <option value="<? echo"$liste4[mahmer]"; ?>" selected><? echo"$liste5[mahmer]"; ?></option>
          <option value="Merkez">Merkez</option>
          <option value="Mahalli">Mahalli</option>
        </select>
        </label>
      </span></td>
      <td bordercolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="comment style12 style16 style20"><span class="data style12 style21 style16">Net &Uuml;creti</span></td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="comment style10 style12 style14"><span class="comment style2 style1"><span class="style15">
        <input name="netucret" type="text" id="netucret" value="<? echo"$liste4[netucret]"; ?>" />
      </span></span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">S&ouml;zle&#351;meli/Part Time/Kadrolu </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <select name="sozpart" id="sozpart">
          <option value="<? echo"$liste5[sozpart]"; ?>" selected><? echo"$liste5[sozpart]"; ?></option>
          <option value="S&ouml;zle&#351;meli">S&ouml;zle&#351;meli</option>
          <option value="Kadrolu">Kadrolu</option>
          <option value="Part Time">Part Time</option>
          <option value="Di&#287;er">Di&#287;er</option>
        </select>
      </span></td>
      <td bordercolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="comment style12 style16 style20"><span class="comment style2 style1"><span class="data style12 style20 style16">Bilgi</span></span></td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="comment style10 style12 style14"><span class="comment style2 style1"><span class="style15">
        <textarea name="bilgi" rows="3" id="bilgi"><? echo"$liste4[bilgi]"; ?></textarea>
      </span></span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">S&ouml;zle&#351;me Ba&#351;lang&#305;&ccedil; Tarihi </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <label>
        <input name="sozbas" type="text" id="sozbas" value="<? echo"$liste5[sozbit]"; ?>">
        <br>
          2004-10-22 &#351;eklinde olmal&#305;d&#305;r </label>
      </span></td>
      <td bordercolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="#F4F4F4" bgcolor="#F4F4F4" class="comment style12 style20 style16">&nbsp;</td>
      <td bordercolor="#F4F4F4" bgcolor="#F4F4F4" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">S&ouml;zle&#351;me Biti&#351; Tarihi </td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4"><span class="style15">
        <input name="sozbit" type="text" id="sozbit" value="<? echo"$liste5[sozbas]"; ?>">
        <br>
        2004-10-22 &#351;eklinde olmal&#305;d&#305;r,S&uuml;resiz ise 0 (s&#305;f&#305;r) </span></td>
      <td bordercolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="#F4F4F4" bgcolor="#F4F4F4" class="comment style12 style16 style20">&nbsp;</td>
      <td bordercolor="#F4F4F4" bgcolor="#F4F4F4" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4" class="data style12 style21 style16">&nbsp;</td>
      <td bordercolor="f4f4f4" bgcolor="f4f4f4">&nbsp;</td>
      <td bordercolor="#FFFFFF" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#FFFEE1" class="comment style12 style20 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#FFFEE1" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#FFFEE1" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#FFFEE1" class="data style12 style21 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#FFFEE1">&nbsp;</td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="ffffff" class="style16 style20 style12 comment"><span class="style16 style21"><strong>N&Uuml;FUS B&#304;LG&#304;LER&#304; </strong></span></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="style16 style21 style12 data"><strong>&#304;LET&#304;&#350;&#304;M B&#304;LG&#304;LER&#304; </strong></td>
      <td bordercolor="ffffff" bgcolor="ffffff">&nbsp;</td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
	<?
	
	while($liste6=mysql_fetch_array($sql3))
	  {
	  ?>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">TC Kimlik No </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><label>
        <input name="tckimlik" type="text" id="tckimlik" value="<? echo"$liste6[tckimlik]"; ?>">
      </label></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="data style12 style21 style16">&#304;kamet Adresi </td>
      <td rowspan="2" bordercolor="ffffff" bgcolor="#F4F4F4"><label>
        <textarea name="adres" rows="3" id="adres"><? echo"$liste6[adres]"; ?></textarea>
      </label></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#FFFFFF" class="data style12 style21 style16">&nbsp;</td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">SSK No </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><input name="sskno" type="text" id="sskno" value="<? echo"$liste6[sskno]"; ?>"></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="data style12 style21 style16">Ev Telefonu </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4"><input name="evtel" type="text" id="evtel" value="<? echo"$liste6[evtel]"; ?>"></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">Cinsiyet</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><label>
        <select name="cinsiyet" id="cinsiyet">
          <option value="<? echo"$liste6[cinsiyet]"; ?>" selected><? echo"$liste6[cinsiyet]"; ?></option>
		  <option value="Erkek">Erkek</option>
          <option value="Kad&#305;n">Kad&#305;n</option>
        </select>
      </label></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="data style12 style21 style16">Cep Telefonu </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4"><input name="ceptel" type="text" id="ceptel" value="<? echo"$liste6[ceptel]"; ?>"></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">Anne Ad&#305; </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><input name="anne" type="text" id="anne" value="<? echo"$liste6[anne]"; ?>"></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="data style12 style21 style16">&#304;&#351; Telefonu </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4"><input name="istel" type="text" id="istel" value="<? echo"$liste6[istel]"; ?>"></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">Baba Ad&#305; </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><input name="baba" type="text" id="baba" value="<? echo"$liste6[baba]"; ?>"></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="data style12 style21 style16">E-Mail Adresi </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4"><input name="email" type="text" id="email" value="<? echo"$liste6[email]"; ?>"></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">Do&#287;um Tarihi </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><input name="dogtar" type="text" id="dogtar" value="<? echo"$liste6[dogtarih]"; ?>"></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style12 style21 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff">&nbsp;</td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style12 style20 style16">Do&#287;um Yeri </td>
      <td bordercolor="ffffff" bgcolor="#F4F4F4" class="comment style10 style12 style14"><input name="dogyer" type="text" id="dogyer" value="<? echo"$liste6[dogumyer]"; ?>"></td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style12 style21 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff"><span class="style15">
        <input type="submit" name="Submit" value="Kaydet" />
        <input name="Submit2" type="reset" value="Temizle" />
      </span></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="ffffff" class="comment style12 style20 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style12 style21 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff">&nbsp;</td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
    <tr>
      <td bordercolor="ffffff" bgcolor="ffffff" class="comment style12 style20 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="comment style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style14">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff" class="data style10 style12 style16">&nbsp;</td>
      <td bordercolor="ffffff" bgcolor="ffffff"><span class="style15">
        <label></label>
      </span></td>
      <td bordercolor="#FFFFFF" class="comment">&nbsp;</td>
    </tr>
  </table>
  <span class="style2"> </span>
</form>
<?
		}
		?>
<?
		}
		?>
<?
		}
		?>
</body>
</html>
