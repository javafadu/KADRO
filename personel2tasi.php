<?

session_start();

?>
<?




require "header.php";
include "level3_check.php";
include "baglanti.php";
$onay = $id;
		




?>  
<link href="css/all.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-size: 12px;
	font-weight: bold;
	color: #990000;
}
.style3 {font-size: 14px}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style15 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 9px; color: #000000; }
-->
</style>
<div align="center">
  <p class="style2">Ta&#351;&#305;mak &#304;stedi&#287;iniz Ofisi Se&ccedil;in
  <form id="form1" name="form1" method="get" action="personel2tasi2.php">
    <span class="style2"><span class="style15">
    <?
		echo "<select name=\"ofis\">";
        echo "<option value=\"\"></option> ";
        include 'includes/ofiscon.php';
         echo "</select> ";

?>
    </span></span>
    <label>
    <input type="submit" name="Submit" value="Se&ccedil;" />
    </label>
    <input name="sicil" type="hidden" id="sicil" value="<? echo"$onay"; ?>"/>
  </form>
  <p class="style2">
  
  <h2>&nbsp;</h2>
  <p>&nbsp;</p>
</div>
