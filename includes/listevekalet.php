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
echo "<OPTION value=\"personel2.php?id=$listc[sicil]\">Gör</OPTION>";
echo "<OPTION value=\"vekaletedit.php?id=$listc[id]\">Vekalet Düzenle</OPTION>";
echo "<OPTION value=\"vekalet2delete.php?id=$listc[id]\">Vekalet Sil</OPTION>";

?>
