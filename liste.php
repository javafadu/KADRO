<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
if(selObj.options[selObj.selectedIndex].value !== "-1"){
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
}
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<?php
echo "<OPTION value=\"personel2.php?id=$liste[sicil]\">Gör</OPTION>";
echo "<OPTION value=\"personeledit.php?id=$liste[sicil]\">Düzenle</OPTION>";
echo "<OPTION value=\"personel2delete.php?id=$liste[sicil]\">Sil</OPTION>";
echo "<OPTION value=\"personel1tasi.php?id=$liste[sicil]\">Tasi</OPTION>";
echo "<OPTION value=\"vekaletgir.php?id=$liste[sicil]\">Vekalet Ver</OPTION>";
echo "<OPTION value=\"gecicigir.php?id=$liste[sicil]\">Geçici Görev ver</OPTION>";
echo "<OPTION value=\"izingir.php?id=$liste[sicil]\">Izin Ver</OPTION>";
echo "<OPTION value=\"bilgigir.php?id=$liste[sicil]\">Bilgi Gir</OPTION>";
echo "<OPTION value=\"personel2pr.php?id=$liste[sicil]\">Kimlik Kart</OPTION>";
echo "<OPTION value=\"ozgecmisler/$liste[sicil].doc\" target=\"blank\">CV'sini Indir</OPTION>";

?>
