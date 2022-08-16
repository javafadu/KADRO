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
echo "<OPTION value=\"bosedit.php?id=$listebos[id]\">Bos Kdr Düzenle</OPTION>";
echo "<OPTION value=\"bosdelete.php?id=$listebos[id]\">Bos Kdr Sil</OPTION>";

?>
