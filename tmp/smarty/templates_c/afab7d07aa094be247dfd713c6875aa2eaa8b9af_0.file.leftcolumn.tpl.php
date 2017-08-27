<?php
/* Smarty version 3.1.30, created on 2017-08-27 17:30:57
  from "D:\Ampps\www\dragon.local\views\default\leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a301d1475854_80386865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afab7d07aa094be247dfd713c6875aa2eaa8b9af' => 
    array (
      0 => 'D:\\Ampps\\www\\dragon.local\\views\\default\\leftcolumn.tpl',
      1 => 1503753652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a301d1475854_80386865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
	<header>
	    <div class="container">
	      <div class="links">
	        <a href="">О компании</a>
	        <a href="">Доставка</a>
	        <a href="">Контакты</a>
	      </div>
	    </div>
	</header>
	<section class="screen1">
		<div class="container">
			<div class="col-xs-4">
				<div class="logo-box">
					<a href="/"><img src="/views/img/dragon-red.svg" alt="" class="logo"></a>
					<span><b>dragon8.ru</b>аксессуары для автомобилей, каталог</span>
				</div>	<nav class="menu">

		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
						<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
							<ul>						
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
								<li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"> <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
 </a></li>
					    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					    	</ul>
						<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		</ul>
	</nav>
</div><?php }
}
