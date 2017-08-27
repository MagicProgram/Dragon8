<?php
/* Smarty version 3.1.30, created on 2017-08-02 12:42:03
  from "D:\Ampps\www\Ali\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981c89b1d1279_44105139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66b217ded523f292a464ede0e58b1539b1f800fb' => 
    array (
      0 => 'D:\\Ampps\\www\\Ali\\views\\default\\header.tpl',
      1 => 1501676725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5981c89b1d1279_44105139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<title> <?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
 </title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
	</head>
<body>
	<div id= "header">
		<h1>Dragon интернет магазин</h1>
	</div>


 <?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 


<div id="centrColumn" style="margin-left: 200px;">




	<?php }
}
