<?php
/* Smarty version 3.1.30, created on 2017-08-15 20:18:22
  from "D:\Ampps\www\views\default\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5993570ecba4d9_60853857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721c9e2c2e4f3a8b91912b99e79f08c05fe80c85' => 
    array (
      0 => 'D:\\Ampps\\www\\views\\default\\product.tpl',
      1 => 1502821144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5993570ecba4d9_60853857 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="col-xs-8">

				<h1></h1>

					<div class="col-xs-5">
						<div class="row">

							<div class="product_img_box">
								<div class="sale">
									<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['discount'];?>
%
								</div>
								
							
								<img src="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['imageUrl'];?>
" alt="" class="product_img">
								<div class="small_slider">
									<img src="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['imageUrl'];?>
" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
								</div>
								
							</div>
						
						</div>
					</div>

					<div class="col-xs-7">

						<div class="product_info_box">
							<a href="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['PromotionURL'];?>
" target="new" rel="nofollow" class="buy">Купить</a>
							<span class="price"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['localPrice'];?>
₽</span>
							
						</div>
						<p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['productTitle'];?>
</p>

					</div>
				
				
				
			</div>





<?php }
}
