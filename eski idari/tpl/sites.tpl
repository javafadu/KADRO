<tr>
<td class="color6">
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td colspan="2"><img src="images/1x1.gif"></td>
</tr>
<form name="siteform" action="sites.php?do=delgroup" method="post">
<tr>
<td height="20" colspan="2">
	
	<TABLE width="324" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td height="20" width="150" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="return DelClick();"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a></span></span>
	</td>
	<td width="5">&nbsp;</td>
	<td width="164" class="color10" align="center">
	<span class="slink">Action on sites: <span><a href="#" class="slink" title="<#msg_add_new_site#>" onclick="document.location = 'sites.php?addnew=1'"><img src="images/icon-action-add-new.gif" alt="<#msg_add_new_site#>" width="13" height="13" align="absmiddle" border="0"> <#msg_add_new_site#></a></span></span>
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
<th width="2%" id="firsth"><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.siteform, this.checked);">
</th>
<th><a<#sel0#> href="sites.php?order_by=sites&direct=<#direct0#>"><#msg_sites#></a></th>
<th width="10%"><a<#sel1#> href="sites.php?order_by=forms&direct=<#direct1#>">Forms</a></th>
<th width="6%">&nbsp;</th>
</tr>
</thead>
<tbody>

<tr class="iselected">
<td class="f" height="23">&nbsp;</td>
<td><strong><a href="siteform.php?siteid=0">Form Maker Pro server</a></strong></td>
<td><#serv_form_num#></td>
<td nowrap>
<a href="forms.php#an0"><img src="images/icon-action-move.gif" alt="<#msg_open#>" width="13" height="13" hspace="3" border="0"></a></td>
</tr>


<!-- BEGIN row -->
<tr<#class#>>
<td class="f"><input type="checkbox" name="chk[]" value="<#sitenum#>"></td>
<td><strong><a href="siteform.php?siteid=<#sitenum#>"><#sitename#></a></strong></td>
<td><#form_num#></td>
<td nowrap>
<a href="forms.php#an<#sitenum#>"><img src="images/icon-action-move.gif" alt="<#msg_open#>" width="13" height="13" hspace="3" border="0"></a>
<a href="sites.php?edit=<#sitenum#>" title="<#msg_edit#>"><img src="images/icon-action-edit.gif" alt="<#msg_edit#>" width="13" height="13" hspace="3" border="0"></a> 
<a href="#" onclick="javascript: conf('sites.php?delete=<#sitenum#>');" title="<#msg_Delete#>"><img src="images/icon-action-delete.gif" alt="<#msg_Delete#>" width="13" height="13" hspace="3" border="0"></a></td>
</tr>
<!-- END row -->



</tbody>
</table>
</td>






</tr>
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
   if (confirm('<#msg_site_group_del#>'))
   {
   	<#del_p#>
    document.siteform.submit();
    return true;
   }
   else
   {
    return false;
   }
 }
</script>
