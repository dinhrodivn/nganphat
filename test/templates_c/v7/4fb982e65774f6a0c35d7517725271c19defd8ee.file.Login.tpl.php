<?php /* Smarty version Smarty-3.1.7, created on 2022-11-21 14:25:06
         compiled from "/Users/dinhnguyen/localhost/works/nganphat/includes/runtime/../../layouts/v7/modules/Users/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1354103055637b8a426987b7-45234266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb982e65774f6a0c35d7517725271c19defd8ee' => 
    array (
      0 => '/Users/dinhnguyen/localhost/works/nganphat/includes/runtime/../../layouts/v7/modules/Users/Login.tpl',
      1 => 1668782175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1354103055637b8a426987b7-45234266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'MESSAGE' => 0,
    'MAIL_STATUS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_637b8a426a434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_637b8a426a434')) {function content_637b8a426a434($_smarty_tpl) {?>
	<style>
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

		.login-page {
			width: 360px;
			padding: 8% 0 0;
			margin: auto;
		}
		.form {
			position: relative;
			z-index: 1;
			background: #FFFFFF;
			max-width: 360px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input {
			font-family: "Roboto", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			font-size: 14px;
		}
		.form button {
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #4CAF50;
			width: 100%;
			border: 0;
			padding: 15px;
			color: #FFFFFF;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
			background: #43A047;
		}
		.form .message {
			margin: 15px 0 0;
			color: #b3b3b3;
			font-size: 12px;
		}
		.form .message a {
			color: #4CAF50;
			text-decoration: none;
		}
		.form .register-form {
			display: none;
		}
		body {
			background: #76b852; /* fallback for old browsers */
			background: -webkit-linear-gradient(right, #76b852, #8DC26F);
			background: -moz-linear-gradient(right, #76b852, #8DC26F);
			background: -o-linear-gradient(right, #76b852, #8DC26F);
			background: linear-gradient(to left, #76b852, #8DC26F);
			font-family: "Roboto", sans-serif;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.failureMessage {
			color: red;
		}
	</style>
<div class="login-page">
	<div class="form">
		<div>
			<span class="<?php if (!$_smarty_tpl->tpl_vars['ERROR']->value){?>hide<?php }?> failureMessage" id="validationMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span>
			<span class="<?php if (!$_smarty_tpl->tpl_vars['MAIL_STATUS']->value){?>hide<?php }?> successMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span>
		</div>
		<form class="register-form" action="forgotPassword.php" method="POST">
			<input id="fusername" type="text" name="username" placeholder="Username"/>
			<input id="email" type="email" name="emailId" placeholder="Email"/>
			<button type="submit">Submit</button>
			<p class="message"><a href="#">Sign In</a></p>
		</form>
		<form class="login-form" method="POST" action="index.php">
			<input type="hidden" name="module" value="Users"/>
			<input type="hidden" name="action" value="Login"/>
			<input type="text" name="username" placeholder="username"/>
			<input type="password" name="password" placeholder="password"/>
			<button type="submit">login</button>
			<p class="message"><a href="#">Forgot password?</a></p>
		</form>

	</div>
</div>

	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>


<?php }} ?>