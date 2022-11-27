<?php
/*if(PHP_SAPI !== "cli"){
    echo("Access denied!");
    return;
}*/

$rootDir = realpath(dirname(__FILE__));
set_include_path($rootDir);
chdir($rootDir);
ini_set('memory_limit', '512M');
set_time_limit(0);
ini_set('display_errors', 'on');
error_reporting(E_ERROR);

$Vtiger_Utils_Log = true;
include_once("config.inc.php");
require_once 'include/utils/utils.php';
require_once 'include/utils/CommonUtils.php';

require_once 'includes/Loader.php';
vimport('includes.runtime.EntryPoint');

echo "<h3>MASTER SCRIPT - BEGIN</h3>";

// Remove ExtensionStore module
require_once('master_scripts/RemoveExtensionStoreModule.php');
require_once ('master_scripts/AddLanguageVI.php');
require_once ('master_scripts/CreateAccountsFields.php');
require_once ('master_scripts/CreateAccountsAddress.php');

//THIS SHOULD ALWAYS RUN LAST!!!
require_once ('master_scripts/UpdateTabData.php');

echo "<h3>MASTER SCRIPT - END</h3>";

