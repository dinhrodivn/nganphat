<?php

echo "<b>Remove ExtensionStore - Begin</b>";
echo "<br>";
global $root_directory;

$ExtensionStoreModuleModel=Vtiger_Module_Model::getInstance('ExtensionStore');
if($ExtensionStoreModuleModel) {

    $ExtensionStoreModuleModel->delete();
    delete_folder($root_directory.'layouts/v7/modules/ExtensionStore');
    delete_folder($root_directory.'layouts/v7/modules/Settings/ExtensionStore');
    delete_folder($root_directory.'modules/ExtensionStore');
    delete_folder($root_directory.'modules/Settings/ExtensionStore');

}

function delete_folder($tmp_path){
    if(!is_writeable($tmp_path) && is_dir($tmp_path)&& isFileAccessible($tmp_path)) {
        chmod($tmp_path,0777);
    }
    $handle = opendir($tmp_path);
    while($tmp=readdir($handle)) {
        if($tmp!='..' && $tmp!='.' && $tmp!=''){
            if(is_writeable($tmp_path.DS.$tmp) && is_file($tmp_path.DS.$tmp)) {
                unlink($tmp_path.DS.$tmp);
            } elseif(!is_writeable($tmp_path.DS.$tmp) && is_file($tmp_path.DS.$tmp)){
                chmod($tmp_path.DS.$tmp,0666);
                unlink($tmp_path.DS.$tmp);
            }

            if(is_writeable($tmp_path.DS.$tmp) && is_dir($tmp_path.DS.$tmp)) {
                delete_folder($tmp_path.DS.$tmp);
            } elseif(!is_writeable($tmp_path.DS.$tmp) && is_dir($tmp_path.DS.$tmp)){
                chmod($tmp_path.DS.$tmp,0777);
                delete_folder($tmp_path.DS.$tmp);
            }
        }
    }
    closedir($handle);
    rmdir($tmp_path);
    if(!is_dir($tmp_path)) {
        return true;
    } else {
        return false;
    }
}
echo "<b>Remove ExtensionStore - End </b><br><br>";