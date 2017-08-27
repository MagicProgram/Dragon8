<?php
/* 
	Контроллер страницы категорий (/category/1)

*/

// подключение модели
include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

/*
 формирование страницы категорий
 $smarty шаблонизатор
 */

 function indexAction($smarty) {
 	// определяем с какой id будет работать и присваиваем его $catId  иначе null и выход
	$catId = isset ($_GET ['id']) ? $_GET['id'] : null;
	if ($catId == null) exit();// или (! $catId) exit();
	
	$rsProducts = null;
	$rsChildCats = null;

	$rsCategory = getCatById($catId);

		// если главная категория то паказываем дочернии категории
		// иначе показывает товар
	if ($rsCategory['parent_id'] == 0) {

		$rsChildCats = getChildrenForCat($catId);

	} else {

		$rsProducts = getProductsByCat($catId);
	}


	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', 'Товары категории' . $rsCategory['name']);

	$smarty->assign('rsCategory', $rsCategory);// раздел категорий
	$smarty->assign('rsProducts', $rsProducts);// Тавары категории
	$smarty->assign('rsChildCats', $rsChildCats);//и подразделы товаров


	$smarty->assign('rsCategories', $rsCategories);

// загрузка шаблонов
	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'category');
	loadTemplate($smarty, 'footer');


}



 	

 
