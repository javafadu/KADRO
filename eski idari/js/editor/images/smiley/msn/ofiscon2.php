<?php
$query = "SELECT DISTINCT title FROM $taskstable WHERE (statusname != 'Cancelled' AND statusname != 'Complete') ORDER BY title";
$result = mysql_query($query) or die ("Couldn't execute query."); 
while($row = mysql_fetch_array($result)) {
$ofiskod = $row['title'];
echo "<OPTION value=\"$ofiskod\">$ofiskod</OPTION>";
}
?>