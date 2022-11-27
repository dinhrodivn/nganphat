<?php
echo "<b>Create Accounts Fields - Begin</b><br/>";

$accountModuleModel = Vtiger_Module::getInstance('Accounts');
if ($accountModuleModel) {
    $accountDetailBlock = Vtiger_Block::getInstance('LBL_ACCOUNT_INFORMATION', $accountModuleModel);

    $fields = array(
        "cf_ten_ngan_gon" => array("label" => "TEN_NGAN_GON", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_ten_bi_danh" => array("label" => "TEN_BI_DANH", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_ngay_sinh" => array("label" => "NGAY_SINH", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "cf_so_cmnd_the_can_cuoc" => array("label" => "SO_CMND_THE_CAN_CUOC", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_loai_giay_to" => array("label" => "LOAI_GIAY_TO", "uitype" => 16, "typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('CCCD', 'CMND')),
        "cf_noi_cap" => array("label" => "NOI_CAP", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_ngay_cap" => array("label" => "NGAY_CAP", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "cf_gioi_tinh" => array("label" => "GIOI_TINH", "uitype" => 16, "typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('Nam', 'Nu')),
        "cf_hon_nhan" => array("label" => "TINH_TRANG_HON_NHAN", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_so_con" => array("label" => "SO_CON", "uitype" => 7, "typeofdata" => 'I~O', "columntype" => 'int(2)'),
        "cf_hoc_van" => array("label" => "TRINH_DO_HOC_VAN", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_facebook" => array("label" => "FACE_BOOK", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_skype" => array("label" => "SKYPE", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_zalo" => array("label" => "ZALO", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_twitter" => array("label" => "TWITTER", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_noi_cong_tac" => array("label" => "NOI_CONG_TAC", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_so_shk" => array("label" => "SO_SO_HO_KHAU", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_tong_thu_nhap_thang" => array("label" => "TONG_THU_NHAP_THANG", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_thu_nhap_chinh" => array("label" => "THU_NHAP_CHINH", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_thu_nhap_them_phu" => array("label" => "THU_NHAP_THEM_PHU", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_tong_chi_tieu_thang" => array("label" => "TONG_CHI_TIEU_THANG", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_nguon_thu_nhap" => array("label" => "NGUON_THU_NHAP", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "cf_so_nguoi_phu_thuoc" => array("label" => "SO_NGUOI_PHU_THUOC", "uitype" => 7, "typeofdata" => 'V~O', "columntype" => 'int(3)'),
    );

    foreach ($fields as $name => $a_field) {
        $field = Vtiger_Field::getInstance($name, $accountModuleModel);
        if (!$field && $name) {
            $field = new Vtiger_Field();
            $field->name = $name;
            $field->column = $name;
            $field->label = $a_field['label'];
            $field->table = 'vtiger_accountscf';
            $field->uitype = $a_field['uitype'];
            if ($a_field['uitype'] == 15 || $a_field['uitype'] == 16 || $a_field['uitype'] == '33') {//picklist
                $field->setPicklistValues($a_field['picklist_values']);
            }
            if ($a_field['uitype'] == 53) {
                $field->fieldname = $a_field['fieldname'];
            }
            $field->typeofdata = $a_field['typeofdata'];
            $field->columntype = $a_field['columntype'];
            $field->__create($accountDetailBlock);
            if ($a_field['uitype'] == 10) {
                $field->setRelatedModules(array($a_field["related_module"]));
            }
            echo "Created field: " . $a_field['label'] ."<br/>";
        } else {
            echo "Field: " . $a_field['label'] . " existed <br/>";
        }
    }
}
echo "<b>Create Accounts Fields - End</b><br/>";
