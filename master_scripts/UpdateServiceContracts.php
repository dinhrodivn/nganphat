<?php
echo "<b>Create ServiceContracts Fields - Begin</b><br/>";
global $adb;
$serviceContractsModuleModel = Vtiger_Module::getInstance('ServiceContracts');
if ($serviceContractsModuleModel) {
    $serviceContractsBlock = Vtiger_Block::getInstance('LBL_SERVICE_CONTRACT_INFORMATION', $serviceContractsModuleModel);
    // Remove fields
    $adb->pquery("UPDATE `vtiger_field` SET `presence` = 1 WHERE `fieldname` IN ('tracking_unit','planned_duration','actual_duration','used_units','progress','start_date','due_date','contract_type','total_units','contract_priority','contract_status') AND tabid='33'");
    $fields = array(
        "nguon_no" => array("label" => "NGUON_NO", "uitype" => 10, "table" => "vtiger_accountsaddress", "typeofdata" => 'V~M', "columntype" => 'int(19)', "related_module" => array('Vendors')),
        "so_hop_dong" => array("label" => "SO_HOP_DONG", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "ngay_ky_hop_dong" => array("label" => "NGAY_KY_HOP_DONG", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "ngay_giai_ngan" => array("label" => "NGAY_GIAI_NGAN", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "ngay_giao_dich_giai_ngan" => array("label" => "NGAY_GIAO_DICH_GIAI_NGAN", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "chi_nhanh" => array("label" => "CHI_NHANH", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "loai_tien" => array("label" => "LOAI_TIEN", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "ky_han_vay" => array("label" => "KY_HAN_VAY", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "lai_suat" => array("label" => "LAI_SUAT", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "ma_san_pham" => array("label" => "MA_SAN_PHAM", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "ten_san_pham" => array("label" => "TEN_SAN_PHAM", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "sotien_giaingan" => array("label" => "SO_TIEN_GIAI_NGAN", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "sotien_giaingan_quydoi" => array("label" => "SO_TIEN_GIAI_NGAN_QUY_DOI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "duno_hien_tai" => array("label" => "DU_NO_HIEN_TAI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "duno_quy_doi" => array("label" => "DU_NO_QUY_DOI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "no_goc_trong_han" => array("label" => "NO_GOC_TRONG_HAN", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "no_goc_qua_han" => array("label" => "NO_GOC_QUA_HAN", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "du_no_lai" => array("label" => "DU_NO_LAI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "du_no_lai_qua_han" => array("label" => "DU_NO_LAI_QUA_HAN", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "du_no_lai_phat" => array("label" => "DU_NO_LAI_PHAT", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "duno_laiphat_tren_lai" => array("label" => "DU_NO_LAI_PHAT_TREN_LAI", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "duno_laiphat_tren_goc" => array("label" => "DU_NO_LAI_PHAT_TREN_GOC", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "lai_du_thu_den_ngay" => array("label" => "LAI_DU_THU_DEN_NGAY", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "lai_dathu_luyke" => array("label" => "LAI_DA_THU_LUY_KE", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "laiphat_dathu_luyke" => array("label" => "LAI_PHAT_DA_THU_LUY_KE", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "laiphat_trenlai_dathu_luyke" => array("label" => "LAI_PHAT_TREN_LAI_DA_THU_LUY_KE", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "laiphat_trengoc_dathu_luyke" => array("label" => "LAI_PHAT_TREN_GOC_DA_THU_LUY_KE", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "goc_da_thu_luy_ke" => array("label" => "GOC_DA_THU_LUY_KE", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "muc_dich_vay" => array("label" => "MUC_DICH_VAY", "uitype" => 21, "typeofdata" => 'V~O', "columntype" => 'text'),
        "kenh_giai_ngan" => array("label" => "KENH_GIAI_NGAN", "uitype" => 16, "typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('KENH 1', 'KENH 2')),
        "dai_ly_giai_ngan" => array("label" => "DAI_LY_GIAI_NGAN", "uitype" => 16, "typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('DAI LY 1', 'DAI LY 2')),
        "nhom_no_khoan_vay" => array("label" => "NHOM_NO_KHOAN_VAY", "uitype" => 16, "typeofdata" => 'V~O', "columntype" => 'varchar(50)', "picklist_values" => array('NHOM NO 1', 'NHON NO 2')),
        "dpd_hd" => array("label" => "DPD_HD", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "bucket_code" => array("label" => "BUCKET_CODE", "uitype" => 1, "typeofdata" => 'V~O', "columntype" => 'varchar(250)'),
        "ngay_qua_han_xa_nhat_hd" => array("label" => "NGAY_QUA_HAN_XA_NHAT_HD", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "ngay_thanh_toan_gan_nhat" => array("label" => "NGAY_THANH_TOAN_GAN_NHAT", "uitype" => 5, "typeofdata" => 'D~O', "columntype" => 'date'),
        "so_tien_tt_gan_nhat" => array("label" => "SO_TIEN_TT_GAN_NHAT", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "tong_sotien_dathu" => array("label" => "TONG_SO_TIEN_DA_THU", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "tong_sotien_dathu_trongky" => array("label" => "TONG_SO_TIEN_DA_THU_TRONG_KY", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "so_tien_duoc_bh" => array("label" => "SO_TIEN_DUOC_BH", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "phi_bao_hiem" => array("label" => "PHI_BAO_HIEM", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
        "emi_amount" => array("label" => "EMI_AMOUNT", "uitype" => 71, "typeofdata" => 'N~O', "columntype" => 'decimal(25, 3)'),
    );

    foreach ($fields as $name => $a_field) {
        $field = Vtiger_Field::getInstance($name, $serviceContractsModuleModel);
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
            $field->__create($serviceContractsBlock);
            if ($a_field['uitype'] == 10) {
                $field->setRelatedModules(array($a_field["related_module"]));
            }
            echo "Created field: " . $a_field['label'] ."<br/>";
        } else {
            echo "Field: " . $a_field['label'] . " existed <br/>";
        }
    }
}
echo "<b>Create ServiceContracts Fields - End</b><br/>";
