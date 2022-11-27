<?php

$name = 'Vietnamese';
$label = 'Tiếng Việt';
$prefix = 'vn_vn';
global $adb;
$sql = 'SELECT prefix FROM vtiger_language WHERE prefix =?';
$rsLang = $adb->pquery($sql, array($prefix) );
if($adb->num_rows($rsLang) == 0){
    Vtiger_LanguageExport::register($prefix, $label, $name);
}
