<?php
/* Smarty version 3.1.30, created on 2017-08-26 13:27:42
  from "D:\Ampps\www\views\default\category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a1774e764734_73402480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27816e6024385ae0932df236b968c7974a3fc547' => 
    array (
      0 => 'D:\\Ampps\\www\\views\\default\\category.tpl',
      1 => 1503694973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a1774e764734_73402480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-8">
	<h1><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>
				
		<div class="products">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<div class="product"> 
				<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
">
					<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['productTitle'];?>
 </a>
					<b><?php echo $_smarty_tpl->tpl_vars['item']->value['localPrice'];?>
 ₽</b>
			</div>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsChildCats']->value, 'item', false, NULL, 'childCats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
				<h2><a href = "/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 </a></h2>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		</div>
	</div>
</section>


		 <?php }
}
