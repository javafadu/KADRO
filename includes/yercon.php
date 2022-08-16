<?php
$queryyername = "SELECT yer FROM yerler ORDER BY yer";
$resultyername = mysql_query($queryyername) or die ("Couldn't execute query - yerCON.PHP"); 
while($rowyername = mysql_fetch_array($resultyername)) {
$yer = $rowyername['yer'];
echo "<OPTION value=\"$yer\">$yer</OPTION>";
}
?>
