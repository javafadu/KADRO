<?php
function DrawTextfield($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : '';
$req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td>".$data['title'].$req."</td>\r\n";
 $ret .= '<td><input type="text" size="'.$data['size'].'" name="'.FieldPrefix($data).$data['name'].'" value="'.$data['vals'].'" title="'.$data['title'].'"'.($style ? ' class="format"' : '').'>'."</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="draw.php?do=edit&id='.$data['id'].'&field='.$data['type'].'&page='.$data['page_id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';
 
 $ret .= "</tr>";
 return $ret;
}

function DrawSelectField($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : '';
$req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td>".$data['title'].$req."</td>\r\n";
 $ret .= '<td nowrap><select name="'.FieldPrefix($data).$data['name'].'" title="'.$data['title'].'"'.($style ? ' class="format"' : '').'>';

 $vals = explode("\r\n",$data['vals']);
 foreach ($vals as $val)
 {
  $tmp = explode('::',$val);
  $ret .= "<option value='".$tmp[0]."'>".$tmp[1]."</option>\r\n";
 }
 $ret .= "</select></td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="medit.php?id='.$data['id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 $ret .= "</tr>";
 
 return $ret;
}

function DrawBrowseField($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : '';
 $ret .= "<td>".$data['title']."</td>\r\n";
 $ret .= '<td><input type="file" size="'.$data['size'].'" name="'.FieldPrefix($data).$data['name'].'" title="'.$data['title'].'"'.($style ? ' class="format"' : '').'>'."</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="draw.php?do=edit&id='.$data['id'].'&field='.$data['type'].'&page='.$data['page_id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 
 $ret .= "</tr>";
 return $ret;
}

function DrawTextarea($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'" title="'.$data['title'].'"></td>' : '';
$req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td>".$data['title'].$req."</td>\r\n";
 $ret .= '<td><textarea rows="5" cols="'.$data['size'].'" name="'.FieldPrefix($data).$data['name'].'"'.($style ? ' class="format"' : '').'>'.$data['vals'].'</textarea>'."</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="draw.php?do=edit&id='.$data['id'].'&field='.$data['type'].'&page='.$data['page_id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 $ret .= "</tr>";
 return $ret;
}

function DrawMultilist($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : '';
$req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td>".$data['title'].$req."</td>\r\n";
 $ret .= '<td><select size="'.$data['size'].'" multiple name="'.FieldPrefix($data).$data['name'].'[]" title="'.$data['title'].'"'.($style ? ' class="format"' : '').'>';
 
 $vals = explode("\r\n",$data['vals']);
 foreach ($vals as $val)
 {
  $tmp = explode('::',$val);
  $ret .= "<option value='".$tmp[0]."'>".$tmp[1]."</option>\r\n";
 }
 $ret .= "</select></td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="medit.php?id='.$data['id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 $ret .= "</tr>";
 
 return $ret;
}

function DrawCheckbox($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : '';
$req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td>".$data['title'].$req."</td>\r\n";
 $ret .= '<td>';
 
 $vals = explode("\r\n",$data['vals']);
 foreach ($vals as $val)
 {
  $tmp = explode('::',$val);
  $default = '';
  if ($tmp[0][0]=='^')
  {
   $default = ' checked';
   $tmp[0]  = substr($tmp[0],1); 
  }
  else
  {
   $default = '';
  }
  $ret .= '<input type="checkbox" name="'.FieldPrefix($data).$data['name'].'[]" value="'.$tmp[0].'"'.$default.' title="'.$data['title'].'"'.($style ? ' class="format_1"' : '').'>'.$tmp[1]."<br>\r\n";
 }
 $ret .= "</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="medit.php?id='.$data['id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 $ret .= "</tr>";
 
 return $ret;
}

function DrawRadiobox($data, $ctrl = false, $isup = true, $isdown = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : ''; 
 $req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td>".$data['title'].$req."</td>\r\n";
 $ret .= '<td>';
 
 $vals = explode("\r\n",$data['vals']);
 foreach ($vals as $val)
 {
  $tmp = explode('::',$val);
  $default = '';
  if ($tmp[0][0]=='^')
  {
   $default = ' checked';
   $tmp[0]  = substr($tmp[0],1); 
  }
  else
  {
   $default = '';
  }
  
  $ret .= '<input type="radio" name="'.FieldPrefix($data).$data['name'].'" value="'.$tmp[0].'"'.$default.' title="'.$data['title'].'"'.($style ? ' class="format_1"' : '').'>'.$tmp[1]."<br>\r\n";
 }
 $ret .= "</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="medit.php?id='.$data['id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 $ret .= "</tr>";
 
 return $ret;
}

function DrawLabel($data, $ctrl = false, $isup = true, $isdown = true, $draw_checkbox = true, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td>'.($draw_checkbox ? '<input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'">' : '').'</td>' : ''; 
 $ret .= "<td colspan=\"2\">".$data['vals']."</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="draw.php?do=edit&id='.$data['id'].'&field='.$data['type'].'&page='.$data['page_id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';

 $ret .= "</tr>";
 return $ret;
}
function DrawCalculation($data, $ctrl = false, $isup = true, $isdown = true, $val = false, $style = false)
{
 $ret  = "<tr>";
 $ret .= $ctrl ? '<td><input type="checkbox" id="1qw23g84y5jbg843y" name="element[]" value="'.$data['id'].'"></td>' : '';
 $req  = ($data['req']==1) ? DrawStar($style) : '';
 $ret .= "<td><b>".$data['title']."</b> ".$req."</td>\r\n";
 $ret .= '<td>'.($val ? "[<".$data['vals'].">]" : $data['title'])."</td>\r\n";

 $up   = $isup   ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=up"><img src="images/icon-arrow-up.gif" alt="Up" border="0"></a>'     : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $down = $isdown ? '<a href="coder.php?page='.$data['page_id'].'&field='.$data['id'].'&move=down"><img src="images/icon-arrow-down.gif" alt="Down" border="0"></a>' : '<img src="images/1x1.gif" border=0 width=13 height=13">';
 $ret .= $ctrl ? '<td nowrap><a href="draw.php?do=edit&id='.$data['id'].'&field='.$data['type'].'&page='.$data['page_id'].'"><img src="images/icon-action-edit.gif" alt="Edit" border="0"></a> '.$up.' '.$down.'</td>' : '';
 
 $ret .= "</tr>";
 return $ret;
}

function DrawStar($styled = false)
{
	return $styled ? '<span class="arrow">*</span>' : '<font color="#FF0000">*</font>';
}

function FieldPrefix($data)
{
 switch ($data['valid'])
 {
	case EMAIL:
		$prefix = 'e';
		break;
	case DIGITS:
		$prefix = 'd';
		break;
	case CURRENCY:
		$prefix = 'c';
		break;
	case WORD:
		$prefix = 'w';
		break;
	case SPACES:
		$prefix = 's';
		break;
	case LINE:
		$prefix = 'n';
		break;
	default:
		$prefix = '';
 }
 
 $prefix  = (($data['type'] == MULTILIST)||($data['type'] == CHECKBOX)) ? 'm' : $prefix;
 $prefix  = ($data['req']==1) ? 'r'.$prefix : $prefix;
 $prefix .= empty($prefix) ? '' : '_';
 
 return $prefix;
}
?>