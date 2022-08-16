<?php
$queryofis = "SELECT sehir_kod FROM ofislist ORDER BY sehir_kod ASC ";
$resultofis = mysql_query($queryofis) or die ("Couldn't execute query - OFISCON.PHP"); 
while($rowofis = mysql_fetch_array($resultofis)) {
$sehir_kod = $rowofis['sehir_kod'];
echo "<OPTION value=\"$sehir_kod\">$sehir_kod</OPTION>";
}
?>
