<?php
/* Smarty version 3.1.30, created on 2017-08-24 13:34:27
  from "D:\Ampps\www\views\admin\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599ed5e3d7ce63_11940713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d150be5294c22a45dcef5d6dc7d5c4566b4934c' => 
    array (
      0 => 'D:\\Ampps\\www\\views\\admin\\admin.tpl',
      1 => 1503579982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599ed5e3d7ce63_11940713 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="blockNewCategory">
	Новая категория:
	<input name= "newCategoryName" id="newCategoryName" type="text" value=""/>
	<br />
	
	           Является подкатегорией для
	<select name="generalCatId">
			<option value="0">Главная Категория
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
				<option value ="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</select>	
	<br />
		<input type ="button" onclick= "newCategory();" value = "Добавить категорию"/>
</div>

<?php }
}
