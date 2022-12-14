<?php
include_once("inc/draw.php");
require_once("./db.conf.php");

function Generate($form_id)
{
	global $uid;

	$row = @mysql_fetch_row(@mysql_query("SELECT name, site_id, dir, redirect, style FROM forms WHERE id = ".$form_id.";"));

	$form_name = $row[0];
	$site_id   = $row[1];
	$dir 		= "users/".$row[2];
	$form_code = $row[2];
	$redir_url = $row[3];
	
	$style		= empty($row[4]) ? null : unserialize($row[4]);

	if ($site_id == 0)
	{
		$smtp = "localhost";
		$refs = array();
		$site_name = "Form Maker Pro server";
	}
	else 
	{
		$row = @mysql_fetch_row(@mysql_query("SELECT refs, name FROM sites WHERE id = ".$site_id.";"));
		$refs      = array_map("trim",@explode(',',$row[0]));
		$site_name = $row[1];
		$site_name = ((substr(strtolower($site_name), 0, 7) != 'http://') && (substr(strtolower($site_name), 0, 8) != 'https://')) ? "http://".$site_name : $site_name;
	}
	
	$uname = @implode("",@mysql_fetch_row(@mysql_query("SELECT login FROM users WHERE id = ".$uid.";")));

	if ( is_dir($dir) )
	{
		deldir($dir);
		@mkdir($dir);
	}
	else
	{
		mkdir($dir);
	}

	// Creating formprocessorpro.cfg file
	$cfg = fopen($dir."/formprocessorpro.cfg",'w+');

	$content  = "mail_server = ".$smtp."\r\n";

	foreach ($refs as $ref)
	{
		$content .= "Referers = ".$ref."\r\n";
	}

	$content .= "Referers = ".$_SERVER['SERVER_NAME']."\r\n";
	$content .= "Referers = www.".$_SERVER['SERVER_NAME']."\r\n";
	$content .= "Referers = ".$_SERVER['HTTP_HOST']."\r\n";
	$content .= "Referers = www.".$_SERVER['HTTP_HOST']."\r\n";
	$content .= "Referers = locahost\r\n";

	$content .= "base_path = ./\r\n";
	$content .= "attachments_path = attachments/\r\n";
	$content .= "attachments_ttl =	3600\r\n";
	$content .= "max_file_size	= 512\r\n";
	$content .= "mail_format =	plain\r\n";
	$content .= "date_format =	dd month yyyy\r\n";

	fwrite($cfg, $content);
	fclose($cfg);

	// FORM.CFG generation

	$form = fopen($dir."/form.cfg",'w+');
	// Creating pages
	$res       = @mysql_query("SELECT id, name, url, preview FROM pages WHERE form_id = ".$form_id." ORDER BY pos;");
	$page_col  = @mysql_num_rows($res);
	$first_url = "";
	
	$page_num = 1;
	$page_arr = array();
	
	$is_thx = intval(@implode("",@mysql_fetch_row(@mysql_query("SELECT COUNT(*) FROM pages WHERE form_id=".$form_id." AND thx=1"))));

	while ($page = @mysql_fetch_row($res))
	{

			$first_url = empty($first_url) ? $page[2] : $first_url;
	
			$page_name = pathinfo($page[2]);
			$page_name = urldecode($page_name["basename"]);
			$base_href = @explode('/',$page[2]);
			array_pop($base_href);
			$base_href = @implode("/",$base_href).'/';
			
			$main .= ($page_num>1) ? "_browser_out".$bo." = ".$page[2]."\r\n" : "";

		if($is_thx == 0)
		{
			$submit = true;
		}
		else
		{
			$submit = ($page_num<$page_col) ? true : false;
		}
		
		CreatePage($dir."/".$page_name,$page[0],$page[1], $submit, $form_code, $base_href, $page[3], $form_id, $style, $first_url);
		$bo = ($page_num>1) ? $bo+1 : $bo;
		$page_num++;

		$page_arr[] = $dir."/".$page_name;
		
		
		//////////
		$addresses .= $page[2]."\r\n";
		//////////
	}
			
 if ($is_thx==0)
 {
  $first_url = empty($redir_url) ? ($site_id == 0 ? $first_url : $site_name) : $redir_url;
  $first_url = ((substr(strtolower($first_url), 0, 7) != 'http://') && (substr(strtolower($first_url), 0, 8) != 'https://')) ? "http://".$first_url : $first_url;
  $main .= "_redirect = ".$first_url."\r\n";
 }
 
		///////////
		$readme_fp = fopen($dir."/readme.txt", "w+");
		fwrite($readme_fp, "Dear ".$uname.",\r\nFor correct form processing you should place downloaded pages to the following addresses:\r\n\r\n".$addresses);
		fclose($readme_fp);
		
		$page_arr[] = $dir."/readme.txt";
		///////////

		
	// Creating Email templates
	$i=1;
	$res = @mysql_query("SELECT * FROM emails WHERE form_id = ".$form_id.";");
	while($row = @mysql_fetch_array($res))
	{
		$main .= "_send_email".$i." = email".$i.".txt\r\n";
		CreateEmail($dir."/email".$i.".txt",$row);
		$i++;
	}

	// Creating Log templates
	$num = 0;
	$res = @mysql_query("SELECT * FROM logs WHERE form_id = ".$form_id.";");
	while($row = @mysql_fetch_array($res))
	{
		$num = ($num==0) ? '' : $num;
		$main .= "out_file".$num." = log".$num.".txt\r\n";
		CreateLog($dir."/log".$num.".txt",$row,$dir."/");
		$num++;
	}

	// Creating MySQL templates
	$i=1;
	$res = @mysql_query("SELECT * FROM dbs WHERE form_id = ".$form_id.";");
	while($row = @mysql_fetch_array($res))
	{
		$main .= "_mysql_out".$i." = mysql".$i.".txt\r\n";
		CreateMySQL($dir."/mysql".$i.".txt",$row);
		$i++;
	}

	fwrite($form,$main);
	fclose($form);

	mkdir($dir."/attachments");

	$tm = fopen($dir."/attachments/test.txt","w+");
	fwrite($tm,"");
	fclose($tm);

	if ($site_id == 0)
	{
		return array();
	}
	else 
	{
		return $page_arr;
	}
}


function CreatePage($file,$page_id,$name,$draw_submit,$dir, $base_href, $preview = 0, $form_id, $style, $furl = "")
{
  global $_LANG;
  $req		= array();
  $email	= array();
  $digits	= array();
  $currs	= array();
  
  $styled = is_array($style);
  
  if ($preview == 0)
  {
  	$fields = "<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">";
	$res = @mysql_query("SELECT * FROM flds WHERE page_id = ".$page_id." && type <> 8 ORDER BY pos;");
	while ($row = @mysql_fetch_array($res))
	{
		switch ($row['type'])
		{
			case TEXT:
			$fields .= DrawTextfield($row, false, false, false, $styled);
			break;
			case SELECT:
			$fields .= DrawSelectField($row, false, false, false, $styled);
			break;
			case BROWSE:
			$fields .= DrawBrowseField($row, false, false, false, $styled);
			break;
			case TEXTAREA:
			$fields .= DrawTextarea($row, false, false, false, $styled);
			break;
			case MULTILIST:
			$fields .= DrawMultilist($row, false, false, false, $styled);
			break;
			case CHECKBOX:
			$fields .= DrawCheckbox($row, false, false, false, $styled);
			break;
			case RADIO:
			$fields .= DrawRadiobox($row, false, false, false, $styled);
			break;
			case LABEL:
			$fields .= DrawLabel($row, false, false, false, $styled);
			break;
			case CALC_OUT:
			$fields .= DrawCalculation($row,false,false,false,true);
			break;
		}
		
		$field_name = FieldPrefix($row).$row['name'];
		
		if ($row['req']   == 1) 		$req[] = $field_name;
		if ($row['valid'] == EMAIL)		$email[] = $field_name;
		if ($row['valid'] == DIGITS)	$digits[] = $field_name;
		if ($row['valid'] == CURRENCY)	$currs[] = $field_name;
	}
	
	$fields .= "</table>\r\n\r\n";
  }
  else
  {
  	include_once("inc/preview.gen.php");
  	$fields = PreviewGen($form_id);
  }
	
    if ($draw_submit)
    {
    	$res2 = @mysql_query("SELECT subtext FROM pages WHERE id = ".$page_id.";");
    	$row2 = @mysql_fetch_row($res2);
       	$submit = "<INPUT TYPE=\"SUBMIT\" VALUE=\"".$row2[0]."\"".($styled ? " class=\"submit\"" : "").">";
       	
       	if ($preview != 0)
       	{
       		$submit .= "&nbsp;&nbsp;&nbsp;<INPUT TYPE=\"BUTTON\" VALUE=\"".$_LANG['msg_cancel']."\" class=\"submit\" onclick=\"document.location = '".$furl."'\"><br><br>";	
       	}
    }
    
	$fullpath = '';
	$path = explode( '/', $_SERVER['SCRIPT_NAME'] );
	for( $i = 0; $i < sizeof($path) - 1; $i++ ) $fullpath .= $path[$i]."/";
	$fullpath = substr($fullpath,0,strlen($fullpath) - 1);
	$p = "http://".$_SERVER['SERVER_NAME'].$fullpath."/users/formprocessorpro.php";
	
	$form_start  = $draw_submit ? "<FORM ACTION=\"".$p."\" METHOD=\"POST\" ENCTYPE=\"multipart/form-data\" onsubmit=\"return ValidForm(this);\">\r\n<INPUT TYPE=\"hidden\" NAME=\"___form_id_\" VALUE=\"".$dir."\">\r\n" : "";
	$form_finish = $draw_submit ? "</FORM>\r\n" : "";
	
	$html = "<HTML>\r\n<HEAD>";
	
	if($styled)
	{
		$html .= "<STYLE>\r\n";
		$html .= "BODY {BACKGROUND-COLOR: ".$style['bg_color']."; }\r\n";
		$html .= "TD{Color : ".$style['text_color']."; Font-Family : ".$style['text_font']."; Font-Size : ".$style['text_size'].";}";
		$html .= "H1 { Color : ".$style['head_color'].";	Font-Family : ".$style['head_font'].";	Font-Size : ".$style['head_size']."; Font-Weight : Bold; padding-bottom : 2px; margin-bottom : 2px;}\r\n";
		$html .= "TD.bg_color {	BACKGROUND-COLOR : ".$style['form_bg_color'].";}";
		$html .= "TABLE.border { BORDER-RIGHT: ".$style['form_border_width']." solid; BORDER-TOP: ".$style['form_border_width']." solid; BORDER-LEFT: ".$style['form_border_width']." solid; BORDER-BOTTOM: ".$style['form_border_width']." solid; Border-Color: ".$style['form_border_color']."; }\r\n";
		$html .= ".margins {	margin: ".$style['form_margin'].", ".$style['form_margin'].", ".$style['form_margin'].",".$style['form_margin']."; }\r\n";
		$html .= ".arrow {	Color: ".$style['text_arrow']."; }\r\n";
		$html .= "INPUT.format { font-size: ".$style['fields_size']."; color: ".$style['fields_fg']."; background-color : ".$style['fields_bg']."; width : 150px; height : 18px;\r\n";
		$html .= $style['fields_border'] ? "BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid;\r\n Border-Color: ".$style['fields_border_c'].";\r\n}\r\n" : "\r\n}\r\n";
		$html .= "INPUT.format_1 { font-size: ".$style['fields_fg']."; color: ".$style['fields_fg']."; }\r\n";
		$html .= "SELECT.format { font-size: ".$style['fields_size']."; color: ".$style['fields_fg']."; }\r\n";
		$html .= "TEXTAREA { font-size: ".$style['fields_size']."; color: ".$style['fields_fg']."; background-color : ".$style['fields_bg']."; width : 150px;";
		$html .= $style['fields_border'] ? "BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid;\r\n	Border-Color: ".$style['fields_border_c'].";\r\n			}\r\n" : "\r\n}\r\n";
		$html .= "INPUT.submit { font-size: ".$style['submit_size']."; color: ".$style['submit_color']."; Font-Family : ".$style['submit_font']."; Font-Weight : ".($style['submit_bold'] ? "Bold" : "Normal")."; background-color : ".$style['submit_bg_color']."; BORDER-RIGHT: ".$style['submit_b_width']." solid; BORDER-TOP: ".$style['submit_b_width']." solid; BORDER-LEFT: ".$style['submit_b_width']." solid; BORDER-BOTTOM: ".$style['submit_b_width']." solid; Border-Color: ".$style['submit_b_color'].";\r\n}\r\n";
		$html .= "</STYLE>\r\n";
	}
	
	$html .= "<SCRIPT LANGUAGE = \"JavaScript\">
	function isFilled(str){ return (str != \"\"); }
	function isEmail(string) { return (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1); }
 	function isDigital(str)	{ return(parseFloat(str,10)==(str*1)); }
 	function isCurrency(val) { 	var re = /^(\\\$?\\d+\\\$?|\\\$?\\d+\\.\\d+\\\$?)\$/; return (re.test(val)); }
		function ValidForm(form) {
		var field, i;
		var req = new Array(".count($req).");
		var email = new Array(".count($email).");
		var digits = new Array(".count($digits).");
		var currs = new Array(".count($currs).");\r\n";
	
		$i = 0;
		foreach ($req as $field)
		{
			$html .= "		req[".$i++."] = \"".$field."\";\r\n";	
		}
		$i = 0;
		foreach ($email as $field)
		{
			$html .= "		email[".$i++."] = \"".$field."\";\r\n";			
		}
		$i = 0;
		foreach ($digits as $field)
		{
			$html .= "		digits[".$i++."] = \"".$field."\";\r\n";			
		}
		$i = 0;
		foreach ($currs as $field)
		{
			$html .= "		currs[".$i++."] = \"".$field."\";\r\n";			
		}
			
		$html .="
		for (i=0;i<".count($req).";i++)	{
			eval(\"field = form.\" + req[i]);
			if (!isFilled(field.value))	{
				alert(\"Field '\" + field.title + \"' is required to be filled in before successful submission.\");
				field.focus();
				return false;
				break;
			}}
		for (i=0;i<".count($email).";i++)	{
			eval(\"field = form.\" + email[i]);
			if (!isEmail(field.value)) {
				alert(\"Field '\" + field.title + \"' is required to be filled in with valid email addresses before successful submission.\");
				field.focus();
				return false;
				break;
			}}
		for (i=0;i<".count($digits).";i++)	{
			eval(\"field = form.\" + digits[i]);
			if (!isDigital(field.value)) {
				alert(\"Field \" + field.title + \" is required to be filled in only with digits (0-9) and decimal point before successful submission.\");
				field.focus();
				return false;
				break;
			}}
		for (i=0;i<".count($currs).";i++)	{
			eval(\"field = form.\" + currs[i]);
			if (!isCurrency(field.value)) {
				alert(\"Field \" + field.title + \" is required to be filled in only with digits (0-9) a decimal point, or a dollar sign before successful submission.\");
				field.focus();
				return false;
				break;
			}}
		return true; }
</SCRIPT>
<TITLE>".$name."</TITLE>

<!-- ATTENTION! Do not remove this string -->
<BASE href=\"".$base_href."\">
<!-- ... end of attention string -->

</HEAD>
<BODY  bgcolor=\"white\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">
<table width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr align=\"center\" valign=\"middle\"><td>";

		if ($draw_submit)
		{
			$html .= "<!-- header -->\r\n";
			$html .= "<h1>".$name."</h1>\r\n";
			$html .= "<!-- /header -->\r\n";
		}
$html .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"border\">
<tr><td class=\"bg_color\">

<div class=\"margins\">
				
".$form_start."
".$fields."
<CENTER>
".$submit."
</CENTER>
".$form_finish."
</div>

</td></tr>
</table>

</td></tr>
</table>

</body>
</html>";

		$handle = fopen($file,'w+');
		fwrite($handle,$html);
		fclose($handle);
}

function CreateEmail($file,$data)
{
	$handle = fopen($file,'w+');

	$content  = "To: ".$data['komu']."\r\n";
	$content .= ($data['cc'] != '') ? "Cc: ".$data['cc']."\r\n" : '';
	$content .= ($data['bcc'] != '') ? "Bcc: ".$data['bcc']."\r\n" : '';
	$content .= "From: ".$data['ot']."\r\n";
	$content .= "Subject: ".$data['subject']."\r\n";
	$content .= ($data['attach'] != '') ? "Attachment: ".$data['attach']."\r\n" : '';
	//$content .= "Format: ".(($data['format']==1) ? 'html' : 'plain') ."\r\n";
	$content .= "\r\n";
	$content .= $data['body'];

	if ($data['preset'] > 0)
	{
		$preset_flds = "";
		$res = @mysql_query("SELECT t1.* FROM flds AS t1, pages AS t2 WHERE t1.page_id = t2.id && t1.type <> 2 && t1.type <> 7 && t1.type <> 9 && t2.form_id = ".$data['form_id']." ORDER BY t2.pos, t1.pos;");
		while($row = @mysql_fetch_array($res))
		{
			$preset_flds .= $row['title'].": [".FieldPrefix($row).$row['name']."]\r\n";	
		}
		
		$content = preg_replace("/(\<\!-- BEGIN AUTOGENERATING DATA --\>)(.*?)(\<\!-- END AUTOGENERATING DATA --\>)/si", $preset_flds, $content);
		
		$body = preg_replace("/(\<\!-- BEGIN AUTOGENERATING DATA --\>)(.*?)(\<\!-- END AUTOGENERATING DATA --\>)/si", "<!-- BEGIN AUTOGENERATING DATA -->\n".$preset_flds."<!-- END AUTOGENERATING DATA -->", $data['body']); 
		@mysql_query("UPDATE emails SET body = '".mysql_escape_string($body)."' WHERE id = ".$data['id'].";");
	}
	
	fwrite($handle,$content);
	fclose($handle);
}

function CreateLog($file,$data,$path)
{
	$handle   = fopen($file,'w+');
	$content  = $data['file']."\r\n";
	$content .= $data['body']."\r\n";
	fwrite($handle,$content);
	fclose($handle);

	$handle   = fopen($path.$data['file'],'w+');
	fwrite($handle, '');
	fclose($handle);
}

function CreateMySQL($file,$data)
{
	$handle = fopen($file,'w+');

	$fields = empty($data['flds']) ? array() : explode('|',$data['flds']);

	$i = 0;
	foreach ($fields AS $field)
	{
		
		$res = @mysql_query("SELECT * FROM flds WHERE id = '".$field."';");
		$row = @mysql_fetch_array($res);
		
		$fname = FieldPrefix($row).$row['name'];
		$uploaded = ($row['type'] == BROWSE) ? "_uploaded" : "";
		
		$fname = ($row['type'] == CALCULATION) ? "[<".$fname.">]" : "[".$fname.$uploaded."]";
		
		$flds .= '`f'.$i.'`,';
		$vals .= "'".$fname."',";
		$i++;
	}

	$remote_addr_track = $data['show_ip'] > 0 ? "'[%REMOTE_ADDR]'" : "null";
	$referer_track = $data['show_ref'] > 0 ? "'[%HTTP_REFERER]'" : "null";
	$date_track = $data['show_date'] > 0 ? "'[%DATE]'" : "null";
	$time_track = $data['show_time'] > 0 ? "'[%TIME]'" : "null";
	
	$content = "INSERT INTO ".$data['tbl']." (".$flds." ip, referer, date, time) VALUES (".$vals." ".$remote_addr_track.", ".$referer_track.", ".$date_track.", ".$time_track.");";

	fwrite($handle,$content);
	fclose($handle);
}
?>