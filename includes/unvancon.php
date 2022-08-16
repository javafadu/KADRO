<?php
$queryunvanname = "SELECT unvan FROM unvanlar ORDER BY unvan";
$resultunvanname = mysql_query($queryunvanname) or die ("Couldn't execute query - UNVANCON.PHP"); 
while($rowunvanname = mysql_fetch_array($resultunvanname)) {
$unvan = $rowunvanname['unvan'];
echo "<OPTION value=\"$unvan\">$unvan</OPTION>";
}
?>
