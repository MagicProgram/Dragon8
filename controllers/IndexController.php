<?php
/**
* 	Контроллер главной страницы
*
*/
	include_once 'models/CategoriesModel.php';
	include_once 'models/ProductsModel.php';

	function testAction() {

		echo 'IndexController.php >  testAction';

	}

	/* 

	формирование главной страницы сайта
	передаем объект(шаблонизатор) smarty 
	*/
	function indexAction($smarty) {

		$rsCategories = getAllmainCatsWithChildren();
		$rsProducts = getLastProducts(16);

			// передача массива smarty:

		$smarty->assign ('pageTitle', 'Главная страница сайта');
		$smarty->assign('rsCategories', $rsCategories); 
		$smarty->assign('rsProducts', $rsProducts);
		
		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'index');
		loadTemplate($smarty, 'footer');

		

	}


