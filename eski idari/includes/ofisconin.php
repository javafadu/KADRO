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
$queryofis = "SELECT sehir_kod FROM ofislist where ofisulke1  like 'TURKEY'  and sehir_kod not like'%Tic%' and sehir_kod not like'%GYB%' and sehir_kod not like'%PSB%' and sehir_kod not like'%dari%' and sehir_kod not like'%UPB%' and sehir_kod not like'%IGB%' and sehir_kod not like'%kargo%' ORDER BY sehir_kod ASC ";
$resultofis = mysql_query($queryofis) or die ("Couldn't execute query - OFISCON.PHP"); 
while($rowofis = mysql_fetch_array($resultofis)) {
$sehir_kod = $rowofis['sehir_kod'];
echo "<OPTION value=\"personelofistr.php?ofis=$sehir_kod\">$sehir_kod</OPTION>";
}
?>
