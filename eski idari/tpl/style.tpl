<tr><td class="color2">

<table width="25%" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td colspan="3" class="tlabel-bg"><table border="0" cellspacing="0" cellpadding="0">
<tr valign="bottom">
<td><img src="images/tlabel-a.gif" width="18" height="11"></td>
<td class="color2" style="padding:0 8px"><span class="tlabel">Style</span></td>
<td><img src="images/tlabel-b.gif" width="3" height="11"></td>
</tr>
</table></td>
</tr>
<tr>
<td class="color5" width="1"><img src="images/1x1.gif" width="1" height="1"></td>
<td width="100%">
<SCRIPT language=Javascript src="js/color.js"></SCRIPT>
<SCRIPT language=JavaScript>
var cp = new ColorPicker('window');
var cp2 = new ColorPicker();
</SCRIPT>

<table border="0" width="100%" cellspacing="5" cellpadding="0">
<tr>
<td>
<FORM name="form1" action="style.php?do=save&forms=<#forms#>" method="POST">
<input type="hidden" name="referer" value="<#referer#>">
<TABLE align="center" width="100%" border="0">
<tr><td colspan="2"><b>Background</b></td></tr>
<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Color:</td>
<td>
 <INPUT name=bg_color size="10" value="<#bg_color#>" onclick="ChangeTpl();">
 <A id=c_pick0 onclick="cp2.select(document.form1.bg_color,'c_pick0');return false;" href="#" name=pick0>Pick</A>
</td>
</tr>
</table>


<TABLE align="center" width="100%" border="0">
<tr><td colspan="2"><b>Header</b></td></tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font:</td>
<td>
<div id="sel1">
<SELECT name="h1_font" onchange="ChangeTpl();">
<#header_font_opts#>
</SELECT>
</div>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size:</td>
<td>
<div id="sel2">
<SELECT name="h1_size" onchange="ChangeTpl();">
<#header_size_opts#>
</SELECT>
<div>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Color:</td>

<td>
 <INPUT name=h1_color size="10" value="<#head_color#>">
 <A id=c_pick1 onclick="cp2.select(document.form1.h1_color,'c_pick1');return false;" href="#" name=c_pick1>Pick</A>
</td>
</tr>
</table>


<TABLE align="center" width="100%" border="0">
<tr><td colspan="2"><b>Text</b></td></tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font:</td>
<td>
<div id="sel3">
<SELECT name="g_font" onchange="ChangeTpl();">
<#text_font_opts#>
</SELECT>
</div>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size:</td>
<td>
<div id="sel4">
<SELECT name="g_size" onchange="ChangeTpl();">
<#text_size_opts#>
</SELECT>
</div>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Color:</td>
<td>
 <INPUT name=g_color size="10" value="<#text_color#>">
 <A id=c_pick3 onclick="cp2.select(document.form1.g_color,'c_pick1');return false;" href="#" name=c_pick3>Pick</A>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrow:</td>
<td>
<INPUT name="g_acolor" size="10" value="<#arrow_color#>">
<A id="c_picka" onclick="cp2.select(document.form1.g_acolor,'c_picka');return false;" href="#" name=c_picka>Pick</A>
</td>
</tr>

</table>

<TABLE align="center" width="100%" border="0">
<tr><td colspan="2"><b>Form</b></td></tr>
<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background:</td>
<td>
 <INPUT name=form_bg_color size="10" value="<#form_bg_color#>">
 <A id=c_pick_bg onclick="cp2.select(document.form1.form_bg_color,'c_pick_bg');return false;" href="#" name=c_pick_bg>Pick</A>
</td>
</tr>

<tr>
<td width="40%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Border color:</td>
<td>
 <INPUT name=form_br_color size="10" value="<#form_br_color#>">
 <A id=c_pick_br onclick="cp2.select(document.form1.form_br_color,'c_pick_br');return false;" href="#" name=c_pick_br>Pick</A>
</td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Border width:</td>
<td>
<div id="sel5">
<SELECT name="form_br_t" onchange="ChangeTpl();">
<#form_width_opts#>
</SELECT>
</div>
</td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Margin:</td>
<td>
<div id="sel6">
<SELECT name="form_ma" onchange="ChangeTpl();">
<#margin_opts#>
</SELECT>
</div>
</td>
</tr>

</table>




<TABLE align="center" width="100%" border="0">
<tr><td colspan="2"><b>Fields</b></td></tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font:</td>
<td>
<div id="sel7">
<SELECT name="f_font" onchange="ChangeTpl();">
<#fields_font_opts#>
</SELECT>
</div>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size:</td>
<td>
<div id="sel8">
<SELECT name="f_size" onchange="ChangeTpl();">
<#fields_size_opts#>
</SELECT>
</div>
</td>
</tr>


<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foreground:</td>
<td>
 <INPUT name=f_fg_color size="10" value="<#fields_fg_color#>">
 <A id=c_pick_ffg onclick="cp2.select(document.form1.f_fg_color,'c_pick_ffg');return false;" href="#" name=c_pick_ffg>Pick</A>
</td>
</tr>


<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background:</td>
<td>
 <INPUT name=f_bg_color size="10" value="<#fields_bg_color#>">
 <A id=c_pick_fbg onclick="cp2.select(document.form1.f_bg_color,'c_pick_fbg');return false;" href="#" name=c_pick_fbg>Pick</A>
</td>
</tr>


<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Border:</td>
<td>
<INPUT type="radio" value="1" name="f_bord" <#border_yes#>onclick="ChangeTpl();"> Yes
<INPUT type="radio" value="0" name="f_bord" <#border_no#>onclick="ChangeTpl();"> No
</td>
</tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Border color:</td>
<td>
 <INPUT name=f_brd_color size="10" value="<#fields_br_color#>">
 <A id=c_pick_fbrd onclick="cp2.select(document.form1.f_brd_color,'c_pick_fbrd');return false;" href="#" name=c_pick_fbrd>Pick</A>
</td>
</tr>

</table>



<TABLE align="center" width="100%" border="0">
<tr><td colspan="2"><b>Submit button</b></td></tr>
<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font:</td>
<td>
<div id="sel9">
<SELECT name="sm_font" onchange="ChangeTpl();">
<#submit_font_opts#>
</SELECT>
</div>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size:</td>
<td>
<div id="sel10">
<SELECT name="sm_size" onchange="ChangeTpl();">
<#submit_size_opts#>
</SELECT>
</DIV>
</td>
</tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Color:</td>
<td>
 <INPUT name=smf_color size="10" value="<#submit_color#>">
 <A id=c_pick_smf onclick="cp2.select(document.form1.smf_color,'c_pick_smf');return false;" href="#" name=c_pick_smf>Pick</A>
</td>
</tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bold:</td>
<td>
<INPUT type="radio" value="1" name="sm_bold" <#bold_yes#>onclick="ChangeTpl();"> Yes
<INPUT type="radio" value="0" name="sm_bold" <#bold_no#>onclick="ChangeTpl();"> No
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Border width:</td>
<td>
<div id="sel11">
<SELECT name="sm_br_t" onchange="ChangeTpl();">
<#submit_width_opts#>
</SELECT>
</DIV>
</td>
</tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Border color:</td>
<td>
 <INPUT name=sm_br_c size="10" value="<#submit_br_color#>">
 <A id=c_pick_smbrc onclick="cp2.select(document.form1.sm_br_c,'c_pick_smbrc');return false;" href="#" name=c_pick_smbrc>Pick</A>
</td>
</tr>

<tr>
<td width="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background:</td>
<td>
 <INPUT name=smbg_color size="10" value="<#submit_bg_color#>">
 <A id=c_pick_smbg onclick="cp2.select(document.form1.smbg_color,'c_pick_fbg');return false;" href="#" name=c_pick_smbg>Pick</A>
</td>
</tr>

</table>

  </FORM>
   <SCRIPT language=JavaScript>cp.writeDiv()</SCRIPT>
</td>
</tr>

</table>

</td>
<td class="color5" width="1"><img src="images/1x1.gif" width="1" height="1"></td>
</tr>
<tr>
<td colspan="3" class="color5" height="1"><img src="images/1x1.gif" width="1" height="1"></td>
</tr>
</table>

<TABLE border="0" width="75%" cellpadding="0" cellspacing="0">
<tr><td valign="top" width="100%"> 
<table  border="0" cellspacing="0" cellpadding="0">
<tr>
<td colspan="3" class="tlabel-bg"><table border="0" cellspacing="0" cellpadding="0">
<tr valign="bottom">
<td><img src="images/tlabel-a.gif" width="18" height="11"></td>
<td class="color2" style="padding:0 8px"><span class="tlabel">Form design</span></td>
<td><img src="images/tlabel-b.gif" width="3" height="11"></td>
</tr>
</table></td>
</tr>
<tr>
<td class="color5" width="1"><img src="images/1x1.gif" width="1" height="1"></td>
<td width="100%">
<table border="0" cellspacing="2" cellpadding="0" width="100%">
<tr>
<td align="center">

<br>

<IFRAME id="tpl" name="tpl" width="90%" height="450" frameborder="text/html" style="border: 1px solid;"></IFRAME>

<br><br>

</td>
</tr>
<script language="JavaScript">

var sr = "<body bgcolor=\"white\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"ss: 1px;\">\n<table width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n<tr align=\"center\" valign=\"middle\"><td>\n<h1>Page Name</h1>\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"border\">\n<tr><td class=\"bg_color\">\n\n<div class=\"margins\">\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n<tr align=\"left\" valign=\"top\">\n<td>Text field<span class=\"arrow\">*</span></td>\n<td>&nbsp;&nbsp;</td>\n<td><input class=\"format\" class=\"border\" type=\"text\" size=\"25\" value=\"\" title=\"Text field\"></td>\n</tr>\n<tr align=\"left\" valign=\"top\">\n<td>Select</td>\n<td>&nbsp;&nbsp;</td>\n<td><select class=\"format\" title=\"Select\"><option>option1</option><option>option2</option></select></td>\n</tr>\n<tr align=\"left\" valign=\"top\">\n<td>Browse</td>\n<td>&nbsp;&nbsp;</td>\n<td><input class=\"format\" type=\"file\" size=\"25\" title=\"Browse\"></td>\n</tr>\n<tr align=\"left\" valign=\"top\">\n<td>Text area<span class=\"arrow\">*</span></td>\n<td>&nbsp;&nbsp;</td>\n<td><textarea class=\"format\" rows=\"5\" cols=\"25\"></textarea></td>\n</tr>\n<tr align=\"left\" valign=\"top\">\n<td>Multiple list</td>\n<td>&nbsp;&nbsp;</td>\n<td><select class=\"format\" size=\"2\" multiple title=\"Multiple list\"><option>option 1</option><option>option 2</option><option>option 3</option><option>option 4</option></select></td>\n</tr>\n<tr align=\"left\" valign=\"top\">\n<td>checkbox</td>\n<td>&nbsp;&nbsp;</td>\n<td><input class=\"format_1\" type=\"checkbox\" value=\"option 1\" title=\"checkbox\">option 1<br><input class=\"format_1\" type=\"checkbox\" value=\"option 2\" title=\"checkbox\">option 2<br></td>\n</tr>\n<tr align=\"left\" valign=\"top\">\n<td>radio</td>\n<td>&nbsp;&nbsp;</td>\n<td><input class=\"format_1\" type=\"radio\" value=\"option 1\" title=\"radio\">option 1<br><input class=\"format_1\" type=\"radio\" value=\"option 2\" title=\"radio\">option 2<br></td>\n\n</table>\n\n<CENTER>\n<INPUT class=\"submit\" TYPE=\"SUBMIT\" VALUE=\"Submit\">\n</CENTER>\n\n</div>\n</td></tr>\n</table>\n</td></tr>\n</table>\n</body>\n</html>";	

function ChangeTpl()
{
	var f = document.form1;
	
	var sm_bold = f.sm_bold[0].checked ? "Bold" : "Normal";
	
var rr  = "<HTML>\n<STYLE>\n"
	rr += "BODY {BACKGROUND-COLOR: "+f.bg_color.value+"; }\n";
	rr += "H1 {	Color : "+f.h1_color.value+";\n	Font-Family : "+f.h1_font.value+";\n	Font-Size : "+f.h1_size.value+";	Font-Weight : Bold;\n	padding-bottom : 2px;\n	margin-bottom : 2px; }\n";
	rr += "TD {Color : "+f.g_color.value+"; Font-Family : "+f.g_font.value+"; Font-Size : "+f.g_size.value+";}\n";
	rr += "TD.bg_color {\n	BACKGROUND-COLOR : "+f.form_bg_color.value+";\n}\n";
	rr += "TABLE.border {\n	BORDER-RIGHT: "+f.form_br_t.value+" solid;\n	BORDER-TOP: "+f.form_br_t.value+" solid;\n	BORDER-LEFT: "+f.form_br_t.value+" solid;\n	BORDER-BOTTOM: "+f.form_br_t.value+" solid;\n	Border-Color: "+f.form_br_color.value+";\n}";
	rr += ".margins {\n	margin: "+f.form_ma.value+", "+f.form_ma.value+", "+f.form_ma.value+", "+f.form_ma.value+";\n}";
	rr += ".arrow {\n	Color: "+f.g_acolor.value+";\n}\n";
	
	rr += "INPUT.format { \n";
	rr += "font-size: "+f.f_size.value+";\n";
	rr += "color: "+f.f_fg_color.value+";\n";
	rr += "background-color : "+f.f_bg_color.value+";\n";
	rr += "width : 150px;\n";
	rr += "height : 18px;\n";
	
	if (f.f_bord[0].checked)
	{
	rr += "BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid;\n";
	rr += "Border-Color: "+f.f_brd_color.value+";\n";
	}
	
	rr += "}\n";
	
	rr += "INPUT.format_1 {\n";
	rr += "font-size: "+f.f_size.value+";\n";
	rr += "color: "+f.f_fg_color.value+";\n";
	rr += "}\n";
	
	rr += "SELECT.format {\n";
	rr += "font-size: "+f.f_size.value+";\n";
	rr += "background-color : "+f.f_bg_color.value+";\n";
	rr += "color: "+f.f_fg_color.value+";\n";
	rr += "}\n";
	
	rr += "TEXTAREA {\n";
	rr += "font-size: "+f.f_size.value+";\n";
	rr += "color: "+f.f_fg_color.value+";\n";
	rr += "background-color : "+f.f_bg_color.value+";\n";
	rr += "width : 150px;\n";
	if (f.f_bord[0].checked)
	{
	rr += "BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid;\n";
	rr += "Border-Color: "+f.f_brd_color.value+";\n";
	}
	rr += "}\n";
	
	rr += "INPUT.submit {\n";
	rr += "font-size: "+f.sm_size.value+";\n";
	rr += "color: "+f.smf_color.value+";\n";
	rr += "Font-Family : "+f.sm_font.value+";\n";
	rr += "Font-Weight : "+sm_bold+";\n";
	rr += "background-color : "+f.smbg_color.value+";\n";
	rr += "BORDER-RIGHT: "+f.sm_br_t.value+" solid; BORDER-TOP: "+f.sm_br_t.value+" solid; BORDER-LEFT: "+f.sm_br_t.value+" solid; BORDER-BOTTOM: "+f.sm_br_t.value+" solid;\n";
	rr += "Border-Color: "+f.sm_br_c.value+";}\n";
	
	rr += "</STYLE>\n" + sr;
	
document.frames['tpl'].document.open();
document.frames['tpl'].document.writeln(rr);
document.frames['tpl'].document.close();


}
</script>

</table>
</td>
<td class="color5" width="1"><img src="images/1x1.gif" width="1" height="1"></td>
</tr>
<tr>
<td colspan="3" class="color5" height="1"><img src="images/1x1.gif" width="1" height="1"></td>
</tr>
</table>

<TABLE border="0" width="100%" cellpadding="0" cellspacing="0">
<tr><td valign="top" width="55%"> 
</TABLE>

</td>
<td>
<img src="images/1x1.gif" width="1" height="1">
</td>

</tr>
</TABLE>
</td>
</tr><tr>
<td class="color5"><img src="images/1x1.gif" width="1" height="1"></td>
</tr><tr>
<td align="center" class="color2">
<input type="button" class="buttons" value="<#msg_save#>" onclick="document.form1.submit();">
<input type="button" class="button" value="<#msg_cancel#>" onclick="document.location = document.referrer;">
</table></td>
</tr>
</tr>
<SCRIPT language="JavaScript">
ChangeTpl();
</SCRIPT>
