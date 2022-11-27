<?php
echo "<b>Create Module Accounts Address - Begin</b><br>";

$moduleName = "AccountsAddress";
$moduleAccountsAddress = Vtiger_Module::getInstance($moduleName);
$isNew = false;

if ($moduleAccountsAddress) {
    echo " Module already present - choose a different name";
} else {
    $moduleAccountsAddress = new Vtiger_Module();
    $moduleAccountsAddress->name = $moduleName;
    $moduleAccountsAddress->parent = 'Tools';
    $moduleAccountsAddress->save();

    $moduleAccountsAddress->initTables();
    $moduleAccountsAddress->setDefaultSharing();
    $moduleAccountsAddress->initWebservice();
    $isNew = true;

    Settings_MenuEditor_Module_Model::addModuleToApp($moduleAccountsAddress->name, $moduleAccountsAddress->parent);

    $filter1 = new Vtiger_Filter();
    $filter1->name = 'All';
    $filter1->isdefault = true;
    $moduleAccountsAddress->addFilter($filter1);

}

$fields = array(
    "LBL_ACCOUNTSADDRESS_INFORMATION" => array(
        "accountsaddress_no" => array("label" => "ACCOUNTSADDRESS_NO", "uitype" => 4, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~M', "columntype" => 'varchar(50)', "filter"=>1, "is_identifier" => 1),
        "accountid" => array("label" => "TEN_KHACH_HANG", "uitype" => 10, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~M', "columntype" => 'int(19)', "related_module" => array('Accounts'), "filter"=>1),
        "loai_dia_chi" => array("label" => "LOAI_DIA_CHI", "uitype" => 16, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('THUONG_TRU', 'TAM_TRU'), "filter"=>1),
        "ma_tinh" => array("label" => "MA_TINH", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "ten_tinh" => array("label" => "TEN_TINH", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "ma_quan_huyen" => array("label" => "MA_QUAN_HUYEN", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "ten_quan_huyen" => array("label" => "TEN_QUAN_HUYEN", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "ma_phuong_xa" => array("label" => "MA_PHUONG_XA", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "ten_phuong_xa" => array("label" => "TEN_PHUONG_XA", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "dia_chi_chi_tiet" => array("label" => "DIA_CHI_CHI_TIET", "uitype" => 19, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'TEXT', "filter"=>1),
        "tam_tru_dai_han" => array("label" => "TAM_TRU_DAI_HAN_YN", "uitype" => 16, "table" => "vtiger_accountsaddress","typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('Yes', 'No')),
        "so_nam_song_tai_dc" => array("label" => "SO_NAM_SONG_TAI_DC", "uitype" => 7, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'int(3)'),
        "so_thang_song_tai_dc" => array("label" => "SO_THANG_SONG_TAI_DC", "uitype" => 7, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'int(3)'),
        "ma_loai_nha_o" => array("label" => "MA_LOAI_NHA_O", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "ten_loai_nha_o" => array("label" => "TEN_LOAI_NHA_O", "uitype" => 1, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
        "so_dt_nha" => array("label" => "SO_DT_NHA", "uitype" => 11, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~O', "columntype" => 'varchar(50)'),
    ),
    "LBL_CUSTOM_INFORMATION" => array(
        "description" => array("label" => "Description", "uitype" => 19, "table" => "vtiger_crmentity", "typeofdata" => 'V~O', "columntype" => 'TEXT'),
        "createdtime" => array("label" => "LBL_DATECREATED", "uitype" => 70, "table" => "vtiger_crmentity", "typeofdata" => 'T~O', "columntype" => 'datetime', "displaytype" => '2'),
        "modifiedtime" => array("label" => "LBL_DATEMODIFIED", "uitype" => 70, "table" => "vtiger_crmentity", "typeofdata" => 'T~O', "columntype" => 'datetime', "displaytype" => '2'),
        "assigned_user_id" => array("label" => "LBL_ASSIGNEDTO", "uitype" => 53, "table" => "vtiger_crmentity", "typeofdata" => 'V~M', "columntype" => 'int(19)', 'column' => 'smownerid'),
        "createdby" => array("label" => "LBL_CREATEDBY", "uitype" => 52, "table" => "vtiger_crmentity", "typeofdata" => 'V~O', "columntype" => 'int(19)', 'column' => 'smcreatorid', "displaytype" => '2'),
        "source" => array("label" => "Source", "uitype" => 70, "table" => "vtiger_crmentity", "typeofdata" => 'V~O', "columntype" => 'varchar(100)', 'quickcreate' => 3, "displaytype" => '2'),
        "starred" => array("label" => "starred", "uitype" => 56, "table" => "vtiger_crmentity_user_field", "typeofdata" => 'C~O', "columntype" => 'varchar(100)', 'displaytype' => 6, 'quickcreate' => 3),
        "tags" => array("label" => "tags", "uitype" => 56, "table" => "vtiger_accountsaddress", "typeofdata" => 'C~O', "columntype" => 'varchar(1)', 'displaytype' => 6, 'quickcreate' => 3),
    )
);

foreach ($fields as $blockLbl => $fieldDetail) {
    $block = Vtiger_Block::getInstance($blockLbl , $moduleAccountsAddress);
    if (!$block) {
        $block = new Vtiger_Block();
        $block->label = $blockLbl;
        $moduleAccountsAddress->addBlock($block);
    }
    foreach ($fieldDetail as $name => $a_field) {
        $field = Vtiger_Field::getInstance($name, $moduleAccountsAddress);
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
                $moduleAccountsAddress->setEntityIdentifier($field);
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
$tabid = getTabid('AccountsAddress');
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
$result = $adb->pquery("SELECT * FROM vtiger_relatedlists WHERE tabid=? AND related_tabid=?", array($moduleAccounts->id, $moduleAccountsAddress->id));
if ($result && $adb->num_rows($result) == 0) {
    $moduleAccounts->setRelatedList($moduleAccountsAddress, 'AccountsAddress', Array('ADD'), 'get_dependents_list');
}
// Reset params
$moduleName= "";
echo "<br><b>Create Module Accounts Address - End </b> <br><br>";
