<FORM action="<#delaction#>" method="POST" name="delfrm">
<tr>
<td class="color6">

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
<tr>
<td height="20" colspan="2">
	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr ><td  height="20" width="215" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="return DelClick();"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a></span>
	<a href="#" class="slink" title="comment" onClick="return CommClick();"><img src="images/icon-action-add-new.gif" alt="comment" width="13" height="13" align="absmiddle" border="0"> comment</a></span>
	</span>
	</td>
	<td width="5">&nbsp;</td>
	<td class="color10" width="268" align="center">
	<span class="slink">Action on data: <span><a href="export.php?form=<#E_FORM#>&id=<#E_ID#>&order_by=<#E_ORDER#>&desc=<#E_DESC#>&search=<#E_SEARCH#>&s_key=<#E_SKEY#>&wholeword=<#E_WHOLE#>" class="slink" title="<#msg_csv_export#>"><img src="images/icon-action-send-mail.gif" alt="<#msg_csv_export#>" width="13" height="13" align="absmiddle" border="0"> <#msg_csv_export#></a></span></SPAN>
	<span><a href="db.php?do=edit&form=<#E_FORM#>&db=<#E_ID#>" class="slink" title="Log <#msg_edit#>"><img src="images/icon-action-edit.gif" alt="Log <#msg_edit#>" width="13" height="13" align="absmiddle" border="0"> Log <#msg_edit#></a></span>
	</td>
	</tr>
	</TABLE>
</td>
</tr>
<tr>
<td colspan="2">
<#s_result#>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="data">
<thead>
<tr>
<#thead#>
</tr>
</thead>
<tbody>
<#trows#>
</tbody>
</table>

</td>
</tr>
<tr>
<td><img src="images/icon-nav-prev.gif" width="5" height="5" alt="&lt;&lt;"> <a href="<#prev_path#>" class="slink"><#msg_prev#></a> | <a href="<#next_path#>" class="slink"><#msg_next#></a> <img src="images/icon-nav-next.gif" alt="&gt;&gt;" width="5" height="5"></td>
<td align="right" class="paging"> <#prev5#> <#msg_pages#>: <#plabel#>  &#8230;  <#msg_of#> <#pages#> <#next5#></td>
</tr>
</FORM>
</table></td>
</tr>

<script>
 function DelClick()
 {
   if (confirm('<#msg_rec_group_del#>'))
   {
    document.delfrm.submit();
    return true;
   }
   else
   {
    return false;
   }
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
		document.delfrm.action = 'logedit.php?do=group&log=<#id#>&comment='+escape(c)+'&ref='+escape(document.location);
		document.delfrm.submit();
		return true;
	}
 }
</script>
