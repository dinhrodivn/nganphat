{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

<footer class="app-footer">
	<p>
{*		{date('Y')}*}
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement),
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint">{Zend_Json::encode($LANGUAGE_STRINGS)}</div>
<div class="modal myModal fade"></div>
{include file='JSResources.tpl'|@vtemplate_path}
<style>
	body, .module-action-bar .module-title, strong, b, th{
		font-family: Tahoma, Sans-Serif!important;
		font-size: 14px!important;

	}
	.module-action-bar .module-title{
		overflow: unset;
	}
	.text-uppercase, strong, b, th {
		text-transform: unset;
		font-weight: 600;
	}
	h4, .h4 {
		font-size: 16px;
	}
	.app-menu .app-modules-dropdown{
		font-size: 15px;
	}
</style>
</body>

</html>
