<tr>
<td bgcolor="#FFFFFF">
<div id="pointer" style="position:relative; visibility:visible; left:0; top:0; width:100%; height:20px; z-index:1"><div id="fills" style="position:absolute; visibility:visible; left:0px; top:-1px; width:100%; height:1px; background-color:#FFFFFF; layer-background-color:#FFFFFF; z-index:1"></div><div id="title" style="position:absolute; visibility:visible; left:0px; top:0px; width:100%; z-index:2; vertical-align: bottom; line-height: 20px">
&nbsp;&nbsp;&nbsp;&nbsp;<a name="an0"></a><span class="bigtxt"><b><#msg_site#>: Form Maker Pro server</b></span>
</div></div>
</td>
</tr>

<tr>
<td class="color6">
<form name="site0" action="forms.php?do=groupdel" method="post">
<input name="referer" type="hidden" value=""><SCRIPT language="JavaScript"> document.site0.referer.value = document.location </script>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td><img src="images/1x1.gif"></td>
</tr>
<tr>


<td height="20">

	<TABLE  border="0" cellpadding="0" cellspacing="0">
	<tr>
	
	<td height="20" width="275" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="DelClick(document.site0);"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a> </span></span>
	<span><a href="#" onclick="GotoStyle(document.site0);" class="slink" title="<#msg_styling#>"><img src="images/icon-style.gif" alt="<#msg_styling#>" width="13" height="13" align="absmiddle" border="0"> <#msg_styling#></a></span>
	<span><a href="#" onclick="ClearStyle(document.site0);" class="slink" title="<#msg_clear_style#>"><img src="images/icon-clear-style.gif" alt="<#msg_clear_style#>" width="13" height="13" align="absmiddle" border="0"> <#msg_clear_style#></a></span>
	</td>
	<td width="5">&nbsp;</td>
	<td width="168" class="color10" align="center">
	<span class="slink">Action on site: <span><a href="#" class="slink" title="<#msg_add_new_form#>" onclick="document.location = 'forms.php?do=addform&site=0'"><img src="images/icon-action-add-new.gif" alt="<#msg_add_new_form#>" width="13" height="13" align="absmiddle" border="0"> <#msg_add_new_form#></a></span></span>
	</td>
	</tr>
	</TABLE>

</td>

</tr>
<tr>
<td>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="data">
<thead>
<tr>
<th width="2%" id="firsth"><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.site0, this.checked);"></th>
<th width="2%">&nbsp;</th>
<th><a<#sel0#> href="forms.php?order_by=names&direct=<#direct0#>"><#msg_forms#>&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%"><a<#sel1#> href="forms.php?order_by=pages&direct=<#direct1#>">Pages&nbsp;&nbsp;&nbsp;</a></th>
<th width="7%"><a<#sel4#> href="forms.php?order_by=preview&direct=<#direct4#>">Preview&nbsp;&nbsp;&nbsp;</a></th>
<th width="11%"><a<#sel5#> href="forms.php?order_by=thx&direct=<#direct5#>">Thanks&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%"><a<#sel2#> href="forms.php?order_by=emails&direct=<#direct2#>">Emails&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%"><a<#sel3#> href="forms.php?order_by=dbs&direct=<#direct3#>">Logs&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%">&nbsp;</th>

</tr>
</thead>
<tbody>
<!-- BEGIN serv_row -->
<tr <#cell#>>
<td class="f"><input type="checkbox" name="chk[]" value="<#form_id#>"></td>
<td><#style_img#></td>
<td><strong><a href="formedit.php?form=<#form_id#>" title="<#msg_open#>"><#form_name#></a></strong></td>

<td><#pages_num#></td>
<td><#is_preview#></td>
<td><#is_thx#></td>
<td><#emails_num#></td>
<td><#dbs_num#></td>

<td align=center nowrap><a href="formedit.php?form=<#form_id#>" title="<#msg_open#>"><img src="images/icon-action-move.gif" alt="<#msg_open#>" width="13" height="13" hspace="3" border="0"></a><a href='forms.php?do=edit&form=<#form_id#>'><img src="images/icon-action-edit.gif" alt="<#msg_edit#>" width="13" height="13" hspace="3" border="0"></a> <a href="#" onclick="conf('forms.php?do=delete&form=<#form_id#>');" title="<#msg_Delete#>"><img src="images/icon-action-delete.gif" alt="<#msg_Delete#>" width="13" height="13" hspace="3" border="0"></a></td></tr>
<!-- END serv_row -->
</tbody>
</table>

</td>
</tr>
</table>
</form>
</td>
</tr>


<!-- BEGIN row -->
<tr>
<td bgcolor="#FFFFFF"><#linef1#>&nbsp;&nbsp;&nbsp;&nbsp;<a name="an<#siteid#>"></a><span class="bigtxt"><b><#msg_site#>: <#sitename#></b></span><#linef2#>
</td>
</tr>

<tr>
<td class="color6">
<form name="site<#siteid#>" action="forms.php?do=groupdel" method="post">
<input name="referer" type="hidden" value=""><SCRIPT language="JavaScript"> document.site<#siteid#>.referer.value = document.location </script>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="6">
<tr>
<td><img src="images/1x1.gif"></td>
</tr>
<tr>
<td height="20">
	<TABLE border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td width="275" height="20" class="color10" align="center">
	<span class="slink"><#msg_sel_action#>: <span><a href="#" class="slink" title="<#msg_delete#>" onClick="DelClick(document.site<#siteid#>);"><img src="images/icon-action-delete.gif" alt="<#msg_delete#>" width="13" height="13" align="absmiddle" border="0"> <#msg_delete#></a> </span></span>
	<span><a href="#" onclick="GotoStyle(document.site<#siteid#>);" class="slink" title="<#msg_styling#>"><img src="images/icon-style.gif" alt="<#msg_styling#>" width="13" height="13" align="absmiddle" border="0"> <#msg_styling#></a></span>
	<span><a href="#" onclick="ClearStyle(document.site<#siteid#>);" class="slink" title="<#msg_clear_style#>"><img src="images/icon-clear-style.gif" alt="<#msg_clear_style#>" width="13" height="13" align="absmiddle" border="0"> <#msg_clear_style#></a></span>
	</td>
	<td width="5">&nbsp;</td>
	
	<td width="168" class="color10" align="center">
	<span class="slink">Action on site: <span><a href="#" class="slink" title="<#msg_add_new_form#>" onclick="document.location = 'forms.php?do=addform&site=<#siteid#>'"><img src="images/icon-action-add-new.gif" alt="<#msg_add_new_form#>" width="13" height="13" align="absmiddle" border="0"> <#msg_add_new_form#></a></span></span>
	</td>
	</tr>
	</TABLE>
</td>
</tr>
<tr>
<td>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="data">
<thead>
<tr>
<th width="2%" id="firsth" align="center"><center><input type="checkbox" name="checkbox" value="checkbox" onclick="CheckAll(document.site<#siteid#>, this.checked);"></CENTER></th>
<th width="2%">&nbsp;</th>
<th><a<#sel0#> href="forms.php?order_by=names&direct=<#direct0#>"><#msg_forms#>&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%"><a<#sel1#> href="forms.php?order_by=pages&direct=<#direct1#>">Pages&nbsp;&nbsp;&nbsp;</a></th>
<th width="7%"><a<#sel4#> href="forms.php?order_by=preview&direct=<#direct4#>">Preview&nbsp;&nbsp;&nbsp;</a></th>
<th width="11%"><a<#sel5#> href="forms.php?order_by=thx&direct=<#direct5#>">Thanks&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%"><a<#sel2#> href="forms.php?order_by=emails&direct=<#direct2#>">Emails&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%"><a<#sel3#> href="forms.php?order_by=dbs&direct=<#direct3#>">Logs&nbsp;&nbsp;&nbsp;</a></th>
<th width="6%">&nbsp;</th>


</tr>
</thead>
<tbody>
<#forms#>
</tbody>
</table>
</td>
</tr>
</table>
</form>
</td>
</tr>
<!-- END row -->

<script>
function conf(str)
{
var truthBeTold = window.confirm("<#msg_form_del#>"); 
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
 
 function DelClick(form)
 {
   if (confirm('<#msg_form_group_del#>'))
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
 
  function GotoStyle(form)
  {
  	var count = 0;
  	
  	for (i = 0; i <= form.elements.length; i++)
    {
     try
     {
       if (form.elements[i].checked)
       count++
     }
     catch(er)
     {
     }
    }
    
    if (count == 0)
    {
    	alert("Please, select forms for styling");	
    	return false;
    }
    else
    {
  		form.action = 'style.php';
  		form.submit();
    }
  }

  function ClearStyle(form)
  {
  	
  	var count = 0;
  	
  	for (i = 0; i <= form.elements.length; i++)
    {
     try
     {
       if (form.elements[i].checked)
       count++
     }
     catch(er)
     {
     }
    }
    
    if (count == 0)
    {
    	alert("Please, select forms for style clearing");	
    	return false;
    }
    else
    {
  		form.action = 'style.php?do=clear';
  		form.submit();
    }
  }
</script>