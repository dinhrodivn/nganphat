<?php /* Smarty version Smarty-3.1.7, created on 2022-11-15 16:36:05
         compiled from "/Users/dinhnguyen/localhost/fpt_cloud/vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2666139876373bff507bfb0-44340819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba0743e4ec8f5be307a8922ff125d7f13b101db' => 
    array (
      0 => '/Users/dinhnguyen/localhost/fpt_cloud/vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2666139876373bff507bfb0-44340819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6373bff508050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6373bff508050')) {function content_6373bff508050($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h4></div></div>    <?php }} ?>