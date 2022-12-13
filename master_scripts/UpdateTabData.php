<?php

global $adb;
require_once('modules/Users/CreateUserPrivilegeFile.php');
create_parenttab_data_file();
create_tab_data_file();

// Get users list
$rsUsers=$adb->pquery("SELECT * FROM vtiger_users");
if($adb->num_rows($rsUsers) > 0) {
    while ($rowUser = $adb->fetch_array($rsUsers)) {
        $userId = $rowUser['id'];
        createUserPrivilegesfile($userId);
        createUserSharingPrivilegesfile($userId);
    }
}
