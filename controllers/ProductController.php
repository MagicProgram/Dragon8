<?php

/*
	ProductController.php
	Контроллер страницы товара  (/product/1)
*/

// подключаем модели
include_once 'models/ProductsModel.php';
Include_once 'models/CategoriesModel.php';

/*
	Формирование страницы продукта
	$smarty Шаблонизатор
*/

function indexAction($smarty) {
	$itemId =isset ($_GET['id']) ? $_GET['id'] : null;
	if($itemId == null) exit();

	// получить данные продукта
	$rsProduct = getProductById($itemId);
	
	
	// получить все категории
	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', '');
	$smarty->assign('rsCategories',$rsCategories);
	$smarty->assign('rsProduct',$rsProduct);

	loadTempLate($smarty,'header');
	loadTempLate($smarty, 'product');
	//loadTempLate($smarty,'footer');

}