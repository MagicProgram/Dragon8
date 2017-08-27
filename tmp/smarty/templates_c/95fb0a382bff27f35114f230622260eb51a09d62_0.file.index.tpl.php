<?php
/* Smarty version 3.1.30, created on 2017-08-11 17:17:37
  from "D:\Ampps\www\Ali\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598de6b11aac02_23329090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95fb0a382bff27f35114f230622260eb51a09d62' => 
    array (
      0 => 'D:\\Ampps\\www\\Ali\\views\\default\\index.tpl',
      1 => 1502471701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598de6b11aac02_23329090 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
	<div class="product-block"> 
	
		<a href= "product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
				<img src = "<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
" width="250" />
		</a><br />

		<span class="text"><a href="product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"> <?php echo $_smarty_tpl->tpl_vars['item']->value['productTitle'];?>
</a></span>
		
	

	
	

	</div>
		

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 4 == 0) {?> 

		
			<div style="clear: both;"></div> 
		
		<?php }?>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>





	<?php }
}
