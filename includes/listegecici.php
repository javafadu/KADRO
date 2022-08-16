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
echo "<OPTION value=\"personel2.php?id=$listg[sicil]\">Gör</OPTION>";
echo "<OPTION value=\"geciciedit.php?id=$listg[id]\">Geçici Düzenle</OPTION>";
echo "<OPTION value=\"gecici2delete.php?id=$listg[id]\">Geçici Sil</OPTION>";
echo "<OPTION value=\"harcamalar2.php?id=$listg[id]\">Harcamalar</OPTION>";

?>
