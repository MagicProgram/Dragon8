<?php

/*
	Модель для таблицы категорий (categories)
*/


/* Получить дочернии категории для категорий $catId (ineger ID категории)

*/

function getChildrenForCat($catId)
{
global $db;
	$sql = "SELECT * 
			FROM categories 
			WHERE parent_id = '{$catId}'";
	
$rs = mysqli_query($db,$sql); 

return createSmartyRsArray($rs);

}






/*
	Получить главные категории с привязками дочерних

	return array массив категорий
*/	

function getAllmainCatsWithChildren(){
	global $db;
	$sql = 'SELECT * 
			FROM categories 
			WHERE parent_id = 0';

$rs = mysqli_query($db,$sql); 

$smartyRs = array();
while( $row = mysqli_fetch_assoc($rs)){

	$rsChildren = getChildrenForCat ($row['id']);

	if ($rsChildren){
		$row ['children'] = $rsChildren;
	}

		$smartyRs[] = $row;

	}
	
	return $smartyRs;

}
/*

		Получить данные категории по id
		Integer $catId ID категории
		array ьмассив -строка категорий

*/


function getCatById($catId)
{
global $db;
	$catId = intval($catId);
	$sql = " SELECT *
			FROM categories
			WHERE
			id = '{$catId}' ";

	$rs = mysqli_query($db,$sql);

	return mysqli_fetch_assoc($rs);
}

// Получить все главные категории(категорий которые не являются дочерними)
function getAllMainCategories()
{
	global $db;
	$sql = 'SELECT *
			FROM categories
			WHERE parent_id =0';

	$rs = mysqli_query($db,$sql);
	
	return createSmartyRsArray($rs);

}

/*
Добавлние новой категории
string $catName Название категории
integer $catParentId ID родительской категории
integer id новой категории

*/
function insertCat ($catName, $catParentId = 0)
{
global $db;
//готовим запрос
$sql = "INSERT INTO 
		 categories (parent_id,name)
		VALUES ('{$catParentId}', '{$catName}')";

// выполняем запрос
mysqli_query($db,$sql);

//получить Id Добавленной записи
$id = mysqli_insert_id($db);

return $id;

}