<?php
/* Smarty version 3.1.30, created on 2017-08-24 16:48:41
  from "D:\Ampps\www\views\admin\adminHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599f0369982d11_23472449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e793e75e6245b8d1b6a1c43e44575a7b5fbab1bd' => 
    array (
      0 => 'D:\\Ampps\\www\\views\\admin\\adminHeader.tpl',
      1 => 1503593145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminLeftcolum.tpl' => 1,
  ),
),false)) {
function content_599f0369982d11_23472449 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/mainAdmin.css" type ="text/css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/admin.js"><?php echo '</script'; ?>
>
	</head>
		<body>
			<div id ="header">
				<h1>Управление сайтом</h1>
			</div>
		
		<?php $_smarty_tpl->_subTemplateRender("file:adminLeftcolum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



	<div id ="centerColumn">

	
<?php }
}
