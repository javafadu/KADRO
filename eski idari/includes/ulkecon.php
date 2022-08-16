<?php
$queryulke = "SELECT ulke_name FROM ulkeler ORDER BY ulke_name";
$resultulke = mysql_query($queryulke) or die ("Couldn't execute query - ULKECON.PHP"); 
while($rowulke = mysql_fetch_array($resultulke)) {
$ulke_name = $rowulke['ulke_name'];
echo "<OPTION value=\"$ulke_name\">$ulke_name</OPTION>";
}
?>
