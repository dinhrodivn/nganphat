<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

vimport('~~/vtlib/Vtiger/Net/Client.php');
class Users_Login_View extends Vtiger_View_Controller {

	function loginRequired() {
		return false;
	}

	function checkPermission(Vtiger_Request $request) {
		return true;
	}

	function preProcess(Vtiger_Request $request, $display = true) {
		$viewer = $this->getViewer($request);
		$viewer->assign('PAGETITLE', $this->getPageTitle($request));
		$viewer->assign('SCRIPTS', $this->getHeaderScripts($request));
		$viewer->assign('STYLES', $this->getHeaderCss($request));
		$viewer->assign('MODULE', $request->getModule());
		$viewer->assign('VIEW', $request->get('view'));
		$viewer->assign('LANGUAGE_STRINGS', array());
		if ($display) {
			$this->preProcessDisplay($request);
		}
	}

	function process (Vtiger_Request $request) {
		$viewer = $this->getViewer($request);

		$mailStatus = $request->get('mailStatus');
		$error = $request->get('error');
		$message = '';
		if ($error) {
			switch ($error) {
				case 'login'		:	$message = 'Invalid credentials';						break;
				case 'fpError'		:	$message = 'Invalid Username or Email address';			break;
				case 'statusError'	:	$message = 'Outgoing mail server was not configured';	break;
			}
		} else if ($mailStatus) {
			$message = 'Mail has been sent to your inbox, please check your e-mail';
		}

		$viewer->assign('ERROR', $error);
		$viewer->assign('MESSAGE', $message);
		$viewer->assign('MAIL_STATUS', $mailStatus);
		$viewer->view('Login.tpl', 'Users');
	}

	function postProcess(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$viewer = $this->getViewer($request);
//		$viewer->view('Footer.tpl', $moduleName);
	}

	function getPageTitle(Vtiger_Request $request) {
		$companyDetails = Vtiger_CompanyDetails_Model::getInstanceById();
		return $companyDetails->get('organizationname');
	}

	function getHeaderScripts(Vtiger_Request $request){
		$headerScriptInstances = parent::getHeaderScripts($request);

		$jsFileNames = array(
							'~libraries/jquery/boxslider/jquery.bxslider.min.js',
							'modules.Vtiger.resources.List',
							'modules.Vtiger.resources.Popup',
							);
		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		$headerScriptInstances = array_merge($jsScriptInstances,$headerScriptInstances);
		return $headerScriptInstances;
	}
}
