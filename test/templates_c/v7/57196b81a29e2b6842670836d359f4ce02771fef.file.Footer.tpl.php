<?php /* Smarty version Smarty-3.1.7, created on 2022-11-21 14:38:38
         compiled from "/Users/dinhnguyen/localhost/works/nganphat/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1192805916637b8a4b761ca9-66925768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57196b81a29e2b6842670836d359f4ce02771fef' => 
    array (
      0 => '/Users/dinhnguyen/localhost/works/nganphat/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1669041517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192805916637b8a4b761ca9-66925768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_637b8a4b77112',
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_637b8a4b77112')) {function content_637b8a4b77112($_smarty_tpl) {?>

<footer class="app-footer">
	<p>

	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement),
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
	body, .module-action-bar .module-title, strong, b, th{
		font-family: Tahoma, Sans-Serif!important;
		font-size: 14px!important;

	}
	.module-action-bar .module-title{
		overflow: unset;
	}
	.text-uppercase, strong, b, th {
		text-transform: unset;
		font-weight: 600;
	}
	h4, .h4 {
		font-size: 16px;
	}
	.app-menu .app-modules-dropdown{
		font-size: 15px;
	}
</style>
</body>

</html>
<?php }} ?>