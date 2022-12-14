/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2004 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * File Name: fckconfig.js
 * 	Editor configuration settings.
 * 
 * Version:  2.0 Beta 1
 * Modified: 2004-05-31 23:07:55
 * 
 * File Authors:
 * 		Frederico Caldeira Knabben (fredck@fckeditor.net)
 */

// Custom Configurations (leave blank to ignore)
FCKConfig.CustomConfigurationsPath = '' ;	// '/fckeditor.config.js' ;

// Enables the debug window
FCKConfig.Debug = false ;

// Set the path for the skin files to use.
FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/default/' ;
//FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/office2003/' ;
//FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/silver/' ;

// Language settings
FCKConfig.AutoDetectLanguage = true ;
FCKConfig.DefaultLanguage    = "en" ;

// Enable XHTML support
FCKConfig.EnableXHTML		= true ;
FCKConfig.EnableSourceXHTML	= true ;

// Cut and Paste options
FCKConfig.ForcePasteAsPlainText	= false ;

// Link: Target Windows
FCKConfig.LinkShowTargets = true ;
FCKConfig.LinkTargets = '_blank;_parent;_self;_top' ;
FCKConfig.LinkDefaultTarget = '' ;

FCKConfig.ToolbarStartExpanded	= true ;
FCKConfig.ToolbarCanCollapse	= true ;

//##
//## Toolbar Buttons Sets
//##
FCKConfig.ToolbarSets = new Object() ;
FCKConfig.ToolbarSets["Default"] = [
	['Source'],
	['Cut','Copy','Paste'],
	['Undo','Redo','-','SelectAll','RemoveFormat'],
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['Link','Unlink'],
	['Table','Rule','SpecialChar','Smiley'],
	['FontName','-','FontSize']
	] ;
FCKConfig.ToolbarSets["Basic"] = [
	['Bold','Italic','-','OrderedList','UnorderedList','-','Link','Unlink','-','About']
] ;


// Font Names
FCKConfig.FontNames = 'Arial;Comic Sans MS;Courier New;Tahoma;Times New Roman;Verdana' ;

// Link Browsing
FCKConfig.LinkBrowser = false ;
FCKConfig.LinkBrowserURL = FCKConfig.BasePath + "filemanager/browser/default/browser.html?Connector=connectors/aspx/connector.aspx" ;
FCKConfig.LinkBrowserWindowWidth	= screen.width * 0.7 ;	// 70%
FCKConfig.LinkBrowserWindowHeight	= screen.height * 0.7 ;	// 70%

// Link Upload
FCKConfig.LinkUpload = false ;
FCKConfig.LinkUploadURL = FCKConfig.BasePath + "filemanager/upload/aspx/upload.aspx" ;
FCKConfig.LinkUploadWindowWidth	= 300 ;
FCKConfig.LinkUploadWindowHeight	= 150 ;
FCKConfig.LinkUploadAllowedExtensions	= "*" ;		// * or empty for all
FCKConfig.LinkUploadDeniedExtensions	= ".exe .asp .php .aspx .js .cfm .dll" ;	// empty for no one

// Smiley Dialog
FCKConfig.SmileyPath	= FCKConfig.BasePath + "images/smiley/msn/" ;
FCKConfig.SmileyImages	= ["regular_smile.gif","sad_smile.gif","wink_smile.gif","teeth_smile.gif","confused_smile.gif","tounge_smile.gif","embaressed_smile.gif","omg_smile.gif","whatchutalkingabout_smile.gif","angry_smile.gif","angel_smile.gif","shades_smile.gif","devil_smile.gif","cry_smile.gif","lightbulb.gif","thumbs_down.gif","thumbs_up.gif","heart.gif","broken_heart.gif","kiss.gif","envelope.gif"] ;
FCKConfig.SmileyColumns = 8 ;
FCKConfig.SmileyWindowWidth		= 320 ;
FCKConfig.SmileyWindowHeight	= 240 ;

//**
// Load the custom configurations file
if ( FCKConfig.CustomConfigurationsPath.length > 0 )
	FCKScriptLoader.AddScript( FCKConfig.CustomConfigurationsPath ) ;