<?php
/* Smarty version 3.1.30, created on 2017-08-26 13:27:42
  from "D:\Ampps\www\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a1774e54fcd7_52427232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824216823af73b90dee5d92f4dfbb967f9a4c726' => 
    array (
      0 => 'D:\\Ampps\\www\\views\\default\\index.tpl',
      1 => 1503753648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a1774e54fcd7_52427232 (Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="col-xs-8">
				<h1>Аксессуары для автомобиля, интернет-магазин</h1>
				<p>Интернет-магазин Дракон8.ру. Каталог с недорогими таварами для автомобиля.Товары отобраны по пользовательским отзывам и разбиты по категориям удобным для поиска. В категориях представлены электроника, элементы дизайна, и другие товары.</p>
				
				
				<img src="/views/img/drakon-internet-magazin-tovary-dlya-avto-deshevo-po-vsei-rossii.jpg" 
				alt="интернет-магазин аксессуары для автомобилей дракон8">
				
			
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="cat-box"><h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
									<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>					
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
										<span><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"> <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
 </a></span> 
								    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								    	
									<?php }?>
						</div>
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
