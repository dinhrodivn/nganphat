<?php
echo "<b>Create Module LichThanhToan - Begin</b><br>";

$moduleName = "LichThanhToan";
$moduleLichThanhToan = Vtiger_Module::getInstance($moduleName);
$isNew = false;

if ($moduleLichThanhToan) {
    echo " Module already present - choose a different name";
} else {
    $moduleLichThanhToan = new Vtiger_Module();
    $moduleLichThanhToan->name = $moduleName;
    $moduleLichThanhToan->parent = 'Sales';
    $moduleLichThanhToan->save();

    $moduleLichThanhToan->initTables();
    $moduleLichThanhToan->setDefaultSharing();
    $moduleLichThanhToan->initWebservice();
    $isNew = true;

    Settings_MenuEditor_Module_Model::addModuleToApp($moduleLichThanhToan->name, $moduleLichThanhToan->parent);

    $filter1 = new Vtiger_Filter();
    $filter1->name = 'All';
    $filter1->isdefault = true;
    $moduleLichThanhToan->addFilter($filter1);

}

$fields = array(
    "LBL_HS_KHOANVAY_INFORMATION" => array(
        "lichthanhtoan_no" => array("label" => "LICHTHANHTOAN_NO", "uitype" => 4, "table" => "vtiger_lichthanhtoan", "typeofdata" => 'V~M', "columntype" => 'varchar(50)', "filter"=>1, "is_identifier" => 1),
        "nguon_no" => array("label" => "NGUON_NO", "uitype" => 10, "table" => "vtiger_lichthanhtoan", "typeofdata" => 'V~M', "columntype" => 'int(19)', "related_module" => array('Vendors')),
        "accountid" => array("label" => "TEN_KHACH_HANG", "uitype" => 10, "table" => "vtiger_lichthanhtoan", "typeofdata" => 'V~M', "columntype" => 'int(19)', "related_module" => array('Accounts'), "filter"=>1),
        "servicecontractsid" => array("label" => "KHOAN_VAY", "uitype" => 10, "table" => "vtiger_lichthanhtoan", "typeofdata" => 'V~M', "columntype" => 'int(19)', "related_module" => array('ServiceContracts'), "filter"=>1),
        "ky_thanh_toan" => array("label" => "KY_THANH_TOAN", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "start_date" => array("label" => "TU_NGAY", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "end_date" => array("label" => "DEN_NGAY", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "tong_tien" => array("label" => "TONG_TIEN", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "tien_goc" => array("label" => "GOC", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "tien_lai" => array("label" => "LAI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "lai_phat" => array("label" => "LAI_PHAT", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "phi_thu_ho" => array("label" => "PHI_THU_HO", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "du_no_con_lai" => array("label" => "DU_NO_CON_LAI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
    ),
    "LBL_CUSTOM_INFORMATION" => array(
        "description" => array("label" => "Description", "uitype" => 19, "table" => "vtiger_crmentity", "typeofdata" => 'V~O', "columntype" => 'TEXT'),
        "createdtime" => array("label" => "LBL_DATECREATED", "uitype" => 70, "table" => "vtiger_crmentity", "typeofdata" => 'T~O', "columntype" => 'datetime', "displaytype" => '2'),
        "modifiedtime" => array("label" => "LBL_DATEMODIFIED", "uitype" => 70, "table" => "vtiger_crmentity", "typeofdata" => 'T~O', "columntype" => 'datetime', "displaytype" => '2'),
        "assigned_user_id" => array("label" => "LBL_ASSIGNEDTO", "uitype" => 53, "table" => "vtiger_crmentity", "typeofdata" => 'V~M', "columntype" => 'int(19)', 'column' => 'smownerid'),
        "createdby" => array("label" => "LBL_CREATEDBY", "uitype" => 52, "table" => "vtiger_crmentity", "typeofdata" => 'V~O', "columntype" => 'int(19)', 'column' => 'smcreatorid', "displaytype" => '2'),
        "source" => array("label" => "Source", "uitype" => 70, "table" => "vtiger_crmentity", "typeofdata" => 'V~O', "columntype" => 'varchar(100)', 'quickcreate' => 3, "displaytype" => '2'),
        "starred" => array("label" => "starred", "uitype" => 56, "table" => "vtiger_crmentity_user_field", "typeofdata" => 'C~O', "columntype" => 'varchar(100)', 'displaytype' => 6, 'quickcreate' => 3),
        "tags" => array("label" => "tags", "uitype" => 56, "table" => "vtiger_lichthanhtoan", "typeofdata" => 'C~O', "columntype" => 'varchar(1)', 'displaytype' => 6, 'quickcreate' => 3),
    )
);

foreach ($fields as $blockLbl => $fieldDetail) {
    $block = Vtiger_Block::getInstance($blockLbl , $moduleLichThanhToan);
    if (!$block) {
        $block = new Vtiger_Block();
        $block->label = $blockLbl;
        $moduleLichThanhToan->addBlock($block);
    }
    foreach ($fieldDetail as $name => $a_field) {
        $field = Vtiger_Field::getInstance($name, $moduleLichThanhToan);
        if (!$field && $name) {
            $field = new Vtiger_Field();
            $field->name = $name;
            $field->column = $name;
            $field->label = $a_field['label'];
            $field->table = $a_field['table'];
            $field->uitype = $a_field['uitype'];
            if ($a_field['uitype'] == 53) {
                $field->fieldname = $a_field['fieldname'];
            }
            if ($a_field['displaytype']) {
                $field->displaytype = $a_field['displaytype'];
            }else{
                $field->displaytype = 1;
            }
            if ($a_field['quickcreate']) {
                $field->quickcreate = $a_field['quickcreate'];
            }else{
                $field->quickcreate = 1;
            }
            $field->typeofdata = $a_field['typeofdata'];
            $field->columntype = $a_field['columntype'];
            $field->__create($block);

            if ($a_field['uitype'] == 10) {
                $field->setRelatedModules(array($a_field["related_module"]));
            }
            if ($a_field['uitype'] == 15 || $a_field['uitype'] == 16 || $a_field['uitype'] == '33') {//picklist
                $field->setPicklistValues($a_field['picklist_values']);
            }
            if ($a_field['is_identifier']) {
                $moduleLichThanhToan->setEntityIdentifier($field);
            }
            if ($isNew && $a_field['filter']){
                $filter1->addField($field);
            }
            echo "Created field: " . $a_field['label'] ."<br/>";

        } else {
            echo "Field: " . $a_field['label'] . " existed <br/>";
        }
    }
}



mkdir('modules/'.$moduleName);
echo "OK\n";

global $adb;
$tabid = getTabid('LichThanhToan');
// add Module to Tab
$result = $adb->pquery('SELECT * FROM vtiger_app2tab WHERE tabid = ?',array($tabid));
if($adb->num_rows($result) == 0){
    $adb->pquery("INSERT INTO `vtiger_app2tab` (`tabid`, `appname`, `sequence`) VALUES (?, 'TOOLS', '8')",array($tabid));
}

// Check module
$rs = $adb->pquery("SELECT * FROM `vtiger_ws_entity` WHERE `name` = ?", array($moduleName));
if ($adb->num_rows($rs) == 0) {
    $adb->pquery("INSERT INTO `vtiger_ws_entity` (`name`, `handler_path`, `handler_class`, `ismodule`)
            VALUES (?, 'include/Webservices/VtigerModuleOperation.php', 'VtigerModuleOperation', '1');", array($moduleName));
}

$moduleAccounts = Vtiger_Module_Model::getInstance('Accounts');
$result = $adb->pquery("SELECT * FROM vtiger_relatedlists WHERE tabid=? AND related_tabid=?", array($moduleAccounts->id, $moduleLichThanhToan->id));
if ($result && $adb->num_rows($result) == 0) {
    $moduleAccounts->setRelatedList($moduleLichThanhToan, 'LichThanhToan', Array('ADD'), 'get_dependents_list');
}

$moduleServiceContracts = Vtiger_Module_Model::getInstance('ServiceContracts');
$result = $adb->pquery("SELECT * FROM vtiger_relatedlists WHERE tabid=? AND related_tabid=?", array($moduleServiceContracts->id, $moduleLichThanhToan->id));
if ($result && $adb->num_rows($result) == 0) {
    $moduleServiceContracts->setRelatedList($moduleLichThanhToan, 'LichThanhToan', Array('ADD'), 'get_dependents_list');
}
// Reset params
$moduleName= "";
echo "<br><b>Create Module LichThanhToan - End </b> <br><br>";
