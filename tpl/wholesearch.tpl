<tr>
<td class="color6">
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
<form name="wform" action="datas.php?do=search&search=<#s_query#>&act=del" method="POST">
<tr>
<td height="20" colspan="2">
	
	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr valign="middle">
	<td height="20" width="215" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="return DelClick();"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a></span>
	<a href="#" class="slink" title="comment" onClick="return CommClick();"><img src="images/icon-action-add-new.gif" alt="comment" width="13" height="13" align="absmiddle" border="0"> comment</a></span>
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
<th width="2%" id="firsth"><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.wform, this.checked);"></th>
<th width="2%">&nbsp;</th>
<th><A id="selected">Site's name / Form's name / Log's name : Record's ID</a></th>
<th width="4%">&nbsp;</th>
</tr>
</thead>
<tbody>

<!-- BEGIN row -->
<tr<#class#>>
<td class="f"><input type="checkbox" name="chk[]" value="<#log_id#>:<#id#>"></td>
<td><#comments#></td>
<td><b><a href="logedit.php?id=<#id#>&log=<#log_id#>" onMouseOver="complex('<#popup#>');" onMouseOut="nd();"><#data#></a></b></td>
<td nowrap>
<a href="logedit.php?id=<#id#>&log=<#log_id#>"><img border="0" src="images/icon-action-edit.gif" alt="Edit">
<a href=# onclick="AddComment(<#id#>,<#log_id#>, '<#fcomments#>');"><img border="0" src="images/icon-action-add-new.gif" alt="Add comment">
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
var truthBeTold = window.confirm("<#msg_site_del#>"); 
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
    document.wform.submit();
    return true;
   }
   else
   {
    return false;
   }
 }
 
 function AddComment(id, log, comment)
 {
 	var b, c;
 	b = (c = prompt("Enter new comments, please", comment));
 	
	if ((c!=comment)&&(b != null))
	{
		document.location = 'logedit.php?do=comment&id='+id+'&log='+log+'&comment='+escape(c)+'&ref='+escape(document.location);	
	}
 }
 
 function CommClick()
 {
 	var b, c;
 	b = (c = prompt("Enter new comments, please", ""));
 	
	if (b != null)
	{
		document.wform.action = 'datas.php?do=search&search=<#s_query#>&act=group&comment='+escape(c)+'&ref='+escape(document.location);
		document.wform.submit();
		return true;
	}
 }
 
</script>