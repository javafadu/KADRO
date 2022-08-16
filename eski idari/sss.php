<?
session_start();
include "level2_check.php";

require "header.php";
?>
<link rel="stylesheet" type="text/css" href="takvim/epoch_styles.css" />
<script type="text/javascript" src="takvim/epoch_classes.js"></script>
<script type="text/javascript">
/*You can also place this code in a separate file and link to it like epoch_classes.js*/
	var bas_cal,dp_cal,ms_cal;      
window.onload = function () {
	
	dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container3'));
	ms_cal  = new Epoch('epoch_multi','flat',document.getElementById('multi_container'),true);
};
</script>
<style type="text/css">
<!--
.style1 {color: #990000}
.style3 {font-family: Verdana}
.style5 {font-family: Verdana; font-size: 12px; }
.style6 {color: #0000FF}
.style7 {color: #FF0000}
.style8 {color: #0000CC}
-->
</style>
<body>







  <table width="60%" border="0" align="center">
    <tr>
      <td colspan="2"><strong>SIK&Ccedil;A SORULAN SORULAR</strong></td>
      <td width="2%">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%">&nbsp;</td>
      <td width="88%" bgcolor="#FFFFFF"><a href="#0" class="style5">1- Yeni Personeli Nas&#305;l Eklerim ?</a><br>
  <a href="#1" class="style5">2- Bo&#351; Kadro Nas&#305;l Ekleyebilirim?</a> <br>
  <a href="#2" class="style5">3- Vekalet G&ouml;rev nas&#305;l Ekleyebilirim?</a> <br>
  <a href="#3" class="style5">4- Ge&ccedil;ici G&ouml;rev Nas&#305;l Ekleyebilirim?</a> <br>
  <a href="#4" class="style5">5- &#304;&#351;ten &Ccedil;&#305;kan Personeli Nas&#305;l Silebilirim?</a> <br>
  <a href="#5" class="style5">6- Yanl&#305;&#351; Girdi&#287;im Personel veya Kadro bilgisini Nas&#305;l D&uuml;zeltebilirim?</a> <br>
  <a href="#6" class="style5">7- Yanl&#305;&#351;l&#305;kla Sildi&#287;im Ki&#351;iyi Nas&#305;l Geri Getirebilirim?</a> <br>
  <a href="#7" class="style5">8- Yanl&#305;&#351;l&#305;kla Silinen Bilginin Kimin Taraf&#305;ndan Silindi&#287;ini &Ouml;&#287;renebilir miyim?</a> <br>
  <a href="#8" class="style5">9- Bir m&uuml;d&uuml;rl&uuml;kteki kadroyu di&#287;er m&uuml;d&uuml;rl&uuml;&#287;e nas&#305;l ta&#351;&#305;yabilirim?</a> <br>
  <a href="#9" class="style5">10- Yurti&ccedil;inden yurtd&#305;&#351;&#305;na tayin olan personelin bilgisinde de&#287;i&#351;iklik yapma?</a> <br>
  <a href="#10" class="style5">11- B&uuml;t&uuml;n ofislerin norm kadro, personel say&#305;s&#305; ve bo&#351; kadro say&#305;s&#305;n&#305; nas&#305;l g&ouml;rebilirim?</a> <br>
  <a href="#11" class="style5">12- G&ouml;rd&uuml;&#287;&uuml;m baz&#305; sorunlar&#305; veya &ouml;nerilerimi y&ouml;neticilere nas&#305;l iletebilirim?</span></a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="50%" border="1" align="center" bordercolor="f4f4f4">
    <tr>
      <td width="94%" bgcolor="#FFFFFF"><span class="style3"><a name="0"></a><span class="style1"><b>1-Yeni Personel Bilgisi Girme</b> -<strong> Yeni Kadro Bilgisi Girme - Bo&#351; Kadro Girme </strong>:</span><br>
Yeni personel bilgisi girme, yeni kadro bilgisi girme veya bo&#351; kadro bilgisi girme i&#351;lemleri ayn&#305; yerden yap&#305;lmakta, Anasayfada <strong>Yeni Bilgi Giri&#351;i </strong>kutusu i&ccedil;indeki <a href="kadrogir.php" class="style6">Yeni Personel Bilgisi Gir</a> b&ouml;l&uuml;m&uuml;nden yapabilirsiniz, bo&#351; kadro bilgisi girerken sicil numaras&#305; girilmedi&#287;i i&ccedil;in sistem onun bo&#351; kadro oldu&#287;unu otomatik olarak anlamaktad&#305;r. </span></td>
    </tr>
    <tr>
      <td valign="top"><p>&nbsp;</p>      </td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="1" id="1"></a><span class="style1"><b>2-Bo&#351; Kadro Bilgisi Girme </b><strong></strong>:</span><br>
Bir &uuml;stte anlat&#305;ld&#305;&#287;&#305; gibi anasayfadaki<strong>Yeni Bilgi Giri&#351;i </strong>kutusu i&ccedil;indeki <a href="kadrogir.php" class="style6">Yeni Personel Bilgisi Gir</a> b&ouml;l&uuml;m&uuml;nden yapabilirsiniz,</span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF" class="style3"><a name="2" id="2"></a><span class="style1"><b>3-Vekalet G&ouml;rev, Vekil Atama &#304;&#351;lemi </b><strong></strong>:</span><br>
Vekalet g&ouml;rev bilgisi girmek veya birisine vekalet g&ouml;rev atamak i&ccedil;in ,Anasayfada <strong>Yeni Bilgi Giri&#351;i </strong>kutusu i&ccedil;indeki <span class="style6"><A href="vekaletgir.php">Vekalet G&ouml;revli Gir</A> </span>b&ouml;l&uuml;m&uuml;nden yapabilirsiniz. Personel bilgisi gir i&#351;lemlerine benzeyen bir i&#351;lemdir. Vekalet g&ouml;rev verece&#287;iniz ki&#351;i daha &ouml;nce sisteme girilmi&#351; olmas&#305; gerekiyor. Girilip girilmedi&#287;ini anasayfadaki sicile g&ouml;re sorgula b&ouml;l&uuml;m&uuml;nden arayat&#305;p g&ouml;rebilirsiniz. </td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF" class="style3"><a name="3" id="3"></a><span class="style1"><b>4-Ge&ccedil;ici G&ouml;rev Bilgisi Girme </b><strong></strong>:</span><br>
Ge&ccedil;ici g&ouml;rev bilgisi girmek veya birisine ge&ccedil;ici g&ouml;rev vermek i&ccedil;in ,Anasayfada <strong>Yeni Bilgi Giri&#351;i </strong>kutusu i&ccedil;indeki <span class="style6"><A href="gecicigir.php">Ge&ccedil;ici G&ouml;rev Bilgisi Gir</A> <A href="vekaletgir.php"></A> </span>b&ouml;l&uuml;m&uuml;nden yapabilirsiniz. Personel bilgisi gir i&#351;lemlerine benzeyen bir i&#351;lemdir. Ge&ccedil;ici g&ouml;rev verece&#287;iniz ki&#351;i daha &ouml;nce sisteme girilmi&#351; olmas&#305; gerekiyor. Girilip girilmedi&#287;ini anasayfadaki sicile g&ouml;re sorgula b&ouml;l&uuml;m&uuml;nden arat&#305;p g&ouml;rebilirsiniz. </span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="4" id="4"></a><span class="style1"><b>5-&#304;&#351;ten Ayr&#305;lan Personelin Bilgisini Silme </b><strong></strong>:</span><br> 
        &#304;&#351;ten ayr&#305;lan personelin bilgisini sistemden silme i&#351;lemini yapmak i&ccedil;in silinecek ki&#351;iyi sorgulama alanlar&#305;ndan herhangi biri ile bulup ayr&#305;nt&#305;l&#305; bilgi k&#305;sm&#305;na girerek &quot;S&#304;L&quot; butonuna (ayr&#305;nt&#305;l&#305; bilgi sayfas&#305;ndan &uuml;stte sa&#287;da g&ouml;rebilirsiniz) t&#305;klayarak silebiliriz
</span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="5" id="5"></a><span class="style1"><b>6-Yanl&#305;&#351; Bilgi Girilen Personel veya Kadro Bilgisi D&uuml;zeltme </b><strong></strong>:</span><br> 
        Yanl&#305;&#351;l&#305;kla girilen veya eksik girilmi&#351; personel bilgilerini kolayl&#305;kla de&#287;i&#351;tirebilirsiniz. Bunun i&ccedil;in bilgisinden de&#287;i&#351;iklik yapaca&#287;&#305;n&#305;z ki&#351;iyi sorgulama alanlar&#305;n&#305;n herhangi biri ile bularak ayr&#305;nt&#305;l&#305; bilgi sayfas&#305;n&#305; a&ccedil;&#305;p &uuml;stte sa&#287;da &quot;D&uuml;zenle&quot; butonuna t&#305;klayarak istedi&#287;iniz de&#287;i&#351;ikli&#287;i yapabilirsiniz.<br>
        <span class="style7">NOT :        </span>Sicil numaras&#305; yanl&#305;&#351; girilen personelin bilgisini d&uuml;zeltmeniz i&ccedil;in &ouml;nce silip sonra yeniden  Anasayfada <strong>Yeni Bilgi Giri&#351;i </strong>kutusu i&ccedil;indeki <a href="kadrogir.php" class="style6">Yeni Personel Bilgisi Gir</a> b&ouml;l&uuml;m&uuml;nden yapman&#305;z gerekmektedir </span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="6" id="6"></a><span class="style1"><b>7-Yanl&#305;&#351;l&#305;kla Sililen Bilgi Geri Getirilir mi? </b><strong></strong>:</span><br> 
      Yanl&#305;&#351;l&#305;kla silinen bilgi geri getirilemez. Bilgisi silinen ki&#351;inin sicili sistemde yap&#305;lan de&#287;i&#351;ikliklerden bak&#305;larak ar&#351;iv dosyalar&#305;ndan geri getirilebilir. Bu i&#351;i de sistem y&ouml;neticisi yapabilir. B&ouml;yle bir durum oldu&#287;u zaman sistem y&ouml;neticisine hemen bildirmeniz gerekmektedir. </span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="7" id="7"></a><span class="style1"><b>8-Yanl&#305;&#351;l&#305;kla Silinen ya da De&#287;i&#351;tirilen Bilginin Kimin Taraf&#305;ndan Yap&#305;ld&#305;&#287;&#305;n&#305; &ouml;&#287;renme </b><strong></strong>:</span><br> 
      Sistemde yap&#305;lan ve veritaban&#305;n&#305; direk etkileyen de&#287;i&#351;iklikler s&uuml;rekli olarak kaydedilmekte, de&#287;i&#351;iklik yapan ki&#351;i, de&#287;i&#351;iklik yapt&#305;&#287;&#305; tarih, saat bilgisi sistemde tutulmaktad&#305;r.
</span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="8" id="8"></a><span class="style1"><b>9-Bir M&uuml;d&uuml;rl&uuml;kteki Kadroyu Ba&#351;ka M&uuml;d&uuml;rl&uuml;&#287;e Ta&#351;&#305;ma </b><strong></strong>:</span><br>
Herhangi bir kadroyu bo&#351; olsun veya dolu olsun istedi&#287;iniz m&uuml;d&uuml;rl&uuml;&#287;e ta&#351;&#305;yabilirsiniz. Bunun personel veya kadro bilgisi d&uuml;zenleme &ouml;zelli&#287;ini kullanarak yapabilirsiniz. Ta&#351;&#305;mak istedi&#287;iniz kadronun veya personelin bilgilerine gelerek d&uuml;zenleme b&ouml;l&uuml;m&uuml;nden ofis k&#305;sm&#305;na ta&#351;&#305;mak istedi&#287;iniz ofisin kodunu se&ccedil;erek yapabilirsiniz. Bunun neticesinde kadro o m&uuml;d&uuml;rl&uuml;kten al&#305;narak ta&#351;&#305;mak istedi&#287;iniz m&uuml;d&uuml;rl&uuml;&#287;e ge&ccedil;mi&#351; olur. . </span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="9" id="9"></a><span class="style1"><b>10-Yurti&ccedil;inden Yurtd&#305;&#351;&#305;na tayini olan personel bilgisinde de&#287;i&#351;iklik yapma </b><strong></strong>:</span><br> 
        Bu i&#351;lem tamamen personel bilgilerini d&uuml;zenleme olay&#305;d&#305;r. Atanacak personelin bilgisinde sorgulama alanlar&#305;ndan herhangi biri ile ula&#351;arak d&uuml;zenle k&#305;sm&#305;ndan kadro, ofis, unvan ... gibi bilgilerini d&uuml;zenleyebilirsiniz.
</span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="10" id="10"></a><span class="style1"><b>11-B&uuml;t&uuml;n Ofislerin norm kadrolar&#305;n&#305; bo&#351; kadrolar&#305;n&#305; g&ouml;rme </b><strong></strong>:</span><br> 
        Anasayfada <strong>Bilgi Bankas&#305; </strong>kutucu&#287;u i&ccedil;indeki <A href="ofisnorm.php" class="style8">Ofislerin Norm/Bos Kadro Durumu</A> butonuna t&#305;klayarak ula&#351;abilirsiniz. </span></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><span class="style3"><a name="11" id="11"></a><span class="style1"><b>12-G&ouml;r&uuml;len Eksikliklerin, Yeni g&ouml;r&uuml;&#351; ve &ouml;nerilerin y&ouml;neticilere bildirilmesi </b><strong></strong>:</span><br>
Anasayfada <strong>Di&#287;er </strong>kutucu&#287;u i&ccedil;indeki <A href="iletisim.php" class="style8">Istek-&Ouml;neri-G&ouml;r&uuml;s Bildir</A>  butonuna t&#305;klayarak isteklerinizi ve &ouml;nerilerini y&ouml;neticilere iletebilirsiniz. </span></td>
    </tr>
  </table>
  <p align="left">&nbsp;</p>
<p align="left" class="style3">&nbsp;</p>
<p align="left">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>
</body>
</html>
