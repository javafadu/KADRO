<tr>
<td bgcolor="#FFFFFF">
<div id="pointer" style="position:relative; visibility:visible; left:0; top:0; width:100%; height:20px; z-index:1"><div id="fills" style="position:absolute; visibility:visible; left:0px; top:-1px; width:100%; height:1px; background-color:#FFFFFF; layer-background-color:#FFFFFF; z-index:1"></div><div id="title" style="position:absolute; visibility:visible; left:0px; top:0px; width:100%; z-index:2; vertical-align: bottom; line-height: 20px">
&nbsp;&nbsp;&nbsp;&nbsp;<span class="bigtxt"><b><#msg_form_pages#></b></span></div></div>
</td>
</tr>
<tr>
<td class="color6">


<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
<tr>
<td height="20" colspan="2">
	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr><td height="20" width="150" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="DelClick(document.htmlform,'<#msg_page#>');"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a></span></span>
	</td>
	<td width="5">&nbsp;</td>
	<td width="415" class="color10" align="center">
	<span class="slink">Action on form: <span><a href="#" class="slink" title="<#msg_add_new_page#>" onclick="document.location = 'addpage.php?form=<#formid#>&addpage=1'"><img src="images/icon-action-add-new.gif" alt="<#msg_add_new_page#>" width="13" height="13" align="absmiddle" border="0"> <#msg_add_new_page#></a></span>
	<span><a href="style.php?form=<#formid#>" class="slink" title="<#msg_styling#>"><img src="images/icon-style.gif" alt="<#msg_styling#>" width="13" height="13" align="absmiddle" border="0"> <#msg_styling#></a></span>
	<span><a href="style.php?do=clear&form=<#formid#>" class="slink" title="<#msg_clear_style#>"><img src="images/icon-clear-style.gif" alt="<#msg_clear_style#>" width="13" height="13" align="absmiddle" border="0"> <#msg_clear_style#></a></span>
	<SPAN><a href='forms.php?do=edit&form=<#formid#>' class="slink"><img src="images/icon-action-edit.gif" alt="<#msg_edit#>" width="13" height="13" hspace="3" align="absmiddle" border="0"> Form preferences</a></SPAN>
	</span>
	</td>
	</tr>
	</TABLE>
</td>
</tr>
<tr>
<td colspan="2">
<form action="formedit.php?do=grouphtmldel&form=<#formid#>" name="htmlform" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="data">
<thead>
<tr>
<th width="2%" id="firsth"><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.htmlform, this.checked);">
</th>
<th width="50%"><a id="notselected"><#msg_form_pages#></a></th>
<th><a id="notselected"><#msg_urls#></a></th>
<th width="3%">&nbsp;</th>
<th width="3%">&nbsp;</th>
<th width="1%" colspan=2>&nbsp;</th>

</tr>
</thead>
<tbody>
<!-- BEGIN row_htmlf -->
<tr <#class#>>
<td class="f"><input type="checkbox" name="chk[]" value="<#pageid#>"></td>
<td><strong><#page_name#></strong></td>
<td><a href="<#pageurl2#>" class="nlink" target="_blank"><#pageurl#></a></td>
<td><#open#><#prew_ico#>
</td>
<td nowrap><#edit_ico#><#del_ico#></td>
<td nowrap align="<#udal#>"><#up#><#down#></td>
</tr>
<!-- END row_htmlf -->

</tbody>
</table>
</form>
</td>
</tr>
</table>

</td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="bigtxt"><b><#msg_templates#></b></span><br>
<img src="images/1x1.gif" width="1" height="3"><br>
</td>
</tr>
<tr>
<td class="color6">

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
<tr>
<td height="20" colspan="2">

	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr><td height="20" width="150" class="color10" align="center">
<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_Delete#>" onClick="DelClick(document.tplform,'<#msg_template#>');"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a></span></span>
	</td>
	<td width="5">&nbsp;</td>
	<td width="302" class="color10" align="center">
	<span class="slink">Action on form: <span><a href="#" class="slink" title="<#msg_add_mail_tpl#>" onclick="document.location = 'mail.php?form=<#formid#>&addpage=1'"><img src="images/icon-action-add-new.gif" alt="<#msg_add_mail_tpl#>" width="13" height="13" align="absmiddle" border="0"> <#msg_add_mail_tpl#></a></span>  
	&nbsp;&nbsp;<span><a href="db.php?form=<#formid#>&addpage=1" class="slink" title="<#msg_add_log_tpl#>"><img src="images/icon-action-add-new.gif" alt="<#msg_add_log_tpl#>" width="13" height="13" align="absmiddle" border="0"> <#msg_add_log_tpl#></a></span></span>
	</td>
	</tr>
	</TABLE>

</td>
</tr>
<tr>
<td colspan="2">


<form action="formedit.php?do=grouptpldel&form=<#formid#>" name="tplform" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="data">
<thead>
<tr>
<th width="2%" id="firsth"><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.tplform, this.checked);">
</th>
<th><a href="formedit.php?form=<#formid#>"<#tpl_o_id1#> onMouseOver="window.status='Sort by: <#msg_templates#>';return true;" onMouseOut="window.status=''"><#msg_templates#></a></th>
<th width="20%"><a href="formedit.php?form=<#formid#>&orderby=type"<#tpl_o_id2#> onMouseOver="window.status='Sort by: <#msg_types#>';return true;" onMouseOut="window.status=''"><#msg_type#></a></th>
<th width="4%">&nbsp;</th>
</tr>
</thead>
<tbody>


<!-- BEGIN row -->
<tr<#class#>>
<td class="f"><input type="checkbox" name="chk[]" value="<#element#>:<#tplid#>"></td>
<td><strong><#tplname#></strong></td>
<td><#tpltype#></td>
<td nowrap><a href="<#script#>.php?do=edit&form=<#formid#>&<#element#>=<#tplid#>" title="edit"><img src="images/icon-action-edit.gif" alt="<#msg_edit#>" width="13" height="13" hspace="3" border="0"></a><a href="#" onclick="javascript: conf<#script#>('<#script#>.php?do=delete&form=<#formid#>&<#element#>=<#tplid#>');" title="delete"><img src="images/icon-action-delete.gif" alt="<#msg_Delete#>" width="13" height="13" hspace="3" border="0"></a></td>
</tr>
<!-- END row -->


</tbody>
</table>
</form>
</td>
</tr>
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
</table>
</td>
</tr></form>


<script>
function conf(str)
{
var truthBeTold = window.confirm("Are you sure you want to delete page - if so click Ok otherwise click Cancel."); 
if (truthBeTold) self.location=str;
//var truthBeTold = window.confirm(str); 
}

function confdb(str)
{
var truthBeTold = window.confirm("Are you sure you want to delete log - if so click Ok otherwise click Cancel."); 
<#db_del_p#>
if (truthBeTold) self.location=str;
//var truthBeTold = window.confirm(str); 
}

function confmail(str)
{
var truthBeTold = window.confirm("Are you sure you want to delete mail template - if so click Ok otherwise click Cancel."); 
<#mail_del_p#>
if (truthBeTold) self.location=str;
//var truthBeTold = window.confirm(str); 
}
 function CheckAll(frm, mark)
 {
  	for (i = 0; i <= frm.elements.length; i++)
    {
     try
     {
       frm.elements[i].checked = mark;
     }
     catch(er)
     {
     }
    }
 }
 
 function DelClick(form,name)
 {
   if (confirm('Are you sure remove selected ' + name + '(s)?'))
   {
   	<#del_p#>
    form.submit();
    return true;
   }
   else
   {
    return false;
   }
 }
 
 function redir_edit()
 {
 	var b, c;
 	b = (c = prompt("Enter new redirection URL, please", ""));
 	
	if ((c!="")&&(b != null))
	{
		document.location = 'formedit.php?do=rediredit&form=<#formid#>'+'&url='+escape(c);	
	}
 }
</script>