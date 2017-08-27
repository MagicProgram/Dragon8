<?php
/*
контроллер бэкенда сайта (/admin/)
*/

// подключаем модули
include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';
 
$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('teplateWebPath', TemplateAdminWebPath);


function indexAction($smarty) {

	$rsCategories = getAllMainCategories();

	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('pageTitle', 'Управление сайтом');	
	// загрузка шаблонов
	loadTemplate($smarty,'adminHeader');
	loadTemplate($smarty,'admin');
	loadTemplate($smarty,'adminFooter');
}
function addnewcatAction(){
	$catName = $_POST ['newCategoryName'];
	$catParentId = $_POST['generalCatId'];
		
	$res = insertCat ($catName, $catParentId);
	if ($res) {
		$resData ['success'] = 1;
		$resData ['message'] = 'Категория добавлена';
	} else {
		$resData ['success'] = 0;
		$resData ['message'] = 'Ошибка добавления категории';

	}
	echo json_encode($resDate);
	
	return;
	
}

