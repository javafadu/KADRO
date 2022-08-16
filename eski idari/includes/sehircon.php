<?php
$queryofisname = "SELECT ofis_sehir FROM ofislist ORDER BY ofis_sehir";
$resultofisname = mysql_query($queryofisname) or die ("Couldn't execute query - SEHIRCON.PHP"); 
while($rowofisname = mysql_fetch_array($resultofisname)) {
$ofis_sehir = $rowofisname['ofis_sehir'];
echo "<OPTION value=\"$ofis_sehir\">$ofis_sehir</OPTION>";
}
?>
