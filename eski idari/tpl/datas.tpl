<tr>
<td class="color6">
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
<form name="logform" action="datas.php?do=delgroup" method="post">
<tr>
<td height="20" colspan="2">
	
	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr valign="middle">
	<td height="20" width="150" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="return DelClick();"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a></span></span>
	</td>
	<td width="5">&nbsp;</td>
	<td width="453" class="color10" align="center" valign="middle">
	
	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr valign="middle"><td>
	<span class="slink">Action on data storage: <span><#msg_add_log_tpl_to#></span></td><td></span><SELECT class="selects_mini" id="frm">
		<!-- BEGIN frow -->
		<option value="<#opt_form_id#>"><#opt_form_name#></option>
		<!-- END frow -->
	</SELECT></td><td><a href="#" onclick="AddLog();"><img src="images/icon-action-add-new.gif" alt="<#msg_add_log_tpl_to#>" width="13" height="13" align="absmiddle" border="0"></a>
		</td></tr></table>
	
	</td>
	</tr>
	</TABLE>

</td>
</tr>
<tr>
<td colspan="2">


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="data">
<thead>
<tr>
<th width="2%" id="firsth"><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.logform, this.checked);">
</th>
<th width="30%"><a<#sel0#> href="datas.php?order_by=log&direct=<#direct0#>"><#msg_log#></a></th>
<th width="25%"><a<#sel1#> href="datas.php?order_by=form&direct=<#direct1#>"><#msg_form#></a></th>
<th width="20%"><a<#sel2#> href="datas.php?order_by=site&direct=<#direct2#>"><#msg_site#></a></th>
<th width="15%"><a<#sel3#> href="datas.php?order_by=recs&direct=<#direct3#>">Records number&nbsp;&nbsp;&nbsp;</a></th>
<th width="10%">&nbsp;</th>
</tr>
</thead>
<tbody>

<!-- BEGIN row -->
<tr<#class#>>
<td class="f"><input type="checkbox" name="chk[]" value="<#log_id#>"></td>
<td><a <#browse_p#> href="browse.php?form=<#form_id#>&id=<#log_id#>"><b><#log_name#></b></a></td>
<td><#form_name#></td>
<td><#site_name#></td>
<td><#recs#></td>
<td nowrap>
<a <#browse_p#> href="browse.php?form=<#form_id#>&id=<#log_id#>" title="browse"><img src="images/icon-action-move.gif" alt="<#msg_browse#>" width="13" height="13" hspace="3" border="0"></a>
<a href="db.php?do=edit&form=<#form_id#>&db=<#log_id#>&cds=1" title="edit"><img src="images/icon-action-edit.gif" alt="<#msg_edit#>" width="13" height="13" hspace="3" border="0"></a><a <#browse_p#> href="export.php?id=<#log_id#>&form=<#form_id#>" title="Export"><img src="images/icon-action-send-mail.gif" alt="Export" width="13" height="13" hspace="3" border="0"></a><a href="#" onclick="conf('db.php?do=delete&form=<#form_id#>&db=<#log_id#>');" title="delete"><img src="images/icon-action-delete.gif" alt="<#msg_Delete#>" width="13" height="13" hspace="3" border="0"></a>
</tr>
<!-- END row -->



</tbody>
</table>
</td></tr>
</form>
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
</table></td>
</tr>

<script>
function conf(str)
{
var truthBeTold = window.confirm("<#msg_datas_log_del#>"); 
<#del_p#>
if (truthBeTold) self.location=str;
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
 
 function DelClick()
 {
   if (confirm('<#msg_datas_group_del#>'))
   {
   	<#del_p#>
    document.logform.submit();
    return true;
   }
   else
   {
    return false;
   }
 }
 
 function AddLog()
 {
	var id = document.getElementById('frm').value;
	if ((id != 0)&&(id != ''))
	{
		document.location = 'db.php?form='+id+'&addpage=1&cds=1';
	}
	else
	{
		alert('Select correct form, please.');	
	}
 }
</script>