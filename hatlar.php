<?
session_start();

include "level1_check.php";

require "header2.php";
?>
<div align="center">&#304;ncelemek &#304;stedi&#287;iniz Hatt&#305; Se&ccedil;iniz </div>

<form action="hatlar1.php" method="get">
  <div align="center">
    <?
		echo "<select name=\"hat\">";
        echo "<option value=\"\"></option> ";
        include 'includes/hatcon.php';
         echo "</select> ";

?>
    <input type="submit" name="Submit" value="Git">
  </div>
  <label>
  <div align="center"><br>
  Hatta ait ofis, m&uuml;d&uuml;r, ara&ccedil; ve m&uuml;d&uuml;r evi bilgilerini g&ouml;rebilirsiniz. </div>
  </label>
</form>