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
echo "<OPTION value=\"izinedit.php?id=$liste[id]\">Izin Düzenle</OPTION>";
echo "<OPTION value=\"izin2delete.php?id=$liste[id]\">Izin Sil</OPTION>";

?>
