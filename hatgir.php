<?
session_start();
include "level2_check.php";

require "header2.php";
?>


<style type="text/css">
<!--
.style1 {color: #666666}
-->
</style>
<link href="css/all.css" rel="stylesheet" type="text/css">
<body>
<form name="form1" method="post" action="hatgir2.php">
  <table width="59%" border="1" align="center" bgcolor="#EFEFEF" class="style1">
    <tr bgcolor="#FFFFFF" class="data"> 
      <td colspan="3"><span class="style2">Yeni Hat Giri&#351;i  </span></td>
    </tr>
    <tr bgcolor="#EFEFEF">
      <td class="data style2 style1">B&ouml;lge</td>
      <td><label>
        <select name="ofisbolge" id="ofisbolge">
          <option value="--" selected>Se&ccedil;iniz</option>
          <option value="Bat&#305; Avrupa ve Afrika">Bat&#305; Avrupa ve Afrika</option>
          <option value="Kuzey Avrupa ve T&uuml;rki Cmh">Kuzey Avrupa ve T&uuml;rki Cmh</option>
          <option value="G&uuml;ney Avrupa ve Balkanlar">G&uuml;ney Avrupa ve Balkanlar</option>
          <option value="Orta Avrupa">Orta Avrupa</option>
          <option value="Amerika ve Uzakdo&#287;u">Amerika ve Uzakdo&#287;u</option>
          <option value="Ortado&#287;u ve K&#305;br&#305;s">Ortado&#287;u ve K&#305;br&#305;s</option>
          <option value="Anadolu">Anadolu</option>
          <option value="Marmara Ege Akdeniz">Marmara Ege Akdeniz</option>
        </select>
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style2 style1">&Uuml;lke &#304;smi (&#304;ngilizce)  </td>
      <td width="38%"> 
        <input name="ofisulke1" type="text" id="ofisulke1">      </td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">&Uuml;lke &#304;smi (T&uuml;rk&ccedil;e) </td>
      <td><label>
        <input name="ofisulke" type="text" id="ofisulke">
      </label></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr> 
      <td width="34%" class="data style2 style1">&#350;ehir Ofisi  </td>
      <td width="38%"> 
        <input name="ofis_sehir" type="text" id="ofis_sehir">      </td>
      <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr bgcolor="#EFEFEF"> 
      <td width="34%" class="data style2 style1">&#350;ehir Ofisi Kodu  </td>
      <td width="38%"> 
        <input name="sehir_kod" type="text" id="sehir_kod">      </td> 
	  
	  <td width="28%" class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">Meydan Ofisi  </td>
      <td><input name="ofisname" type="text" id="ofisname"></td>
      <td class="comment style2 style1">Meydan Ofisi Yoksa &#350;ehir Ofisinin ismini yeniden giriniz </td>
    </tr>
    <tr> 
      <td width="34%" class="data style2 style1">Meydan Ofisi Kodu </td>
      <td width="38%">
        <input name="ofiskod" type="text" id="ofiskod">      </td>
      <?
	  
	  if($apass!=$sifre2)
	  {
	  echo "Sifreler uyumsuz";
	  }
	  ?>
	  
	  <td width="28%" class="comment style2 style1">Meydan Ofisi Yoksa &#350;ehir Ofisinin kodunu yeniden giriniz. </td>
    </tr>
    <tr>
      <td class="data style2 style1">&nbsp;</td>
      <td><span class="style2">
        <input name="ofisid" type="hidden" id="ofisid" />
      </span></td>
      <td class="comment style2 style1">&nbsp;</td>
    </tr>
    <tr>
      <td class="data style2 style1">&nbsp;</td>
      <td><span class="style2">
        <label>
        <input type="submit" name="Submit" value="Kaydet" />
        </label>
      </span></td>
      <td class="comment"><input name="Submit2" type="reset" value="Temizle" /></td>
    </tr>
  </table>
  <p class="style1">&nbsp;</p>
</form>
</body>
</html>
