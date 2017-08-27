<?php


	/*
	  Модель для таблицы продукций (products)
	*/

	/* 
	 Получаем последние добавленные товары
	 $limit Лимит товаров
	  array Массив товаров
	*/

function getLastProducts($limit = null)
{
global $db;
	$sql = "SELECT *
			FROM `products`
			ORDER BY id DESC"; 
			/* 
			ORDER  BY - отсортировать данные по полям (id,name...) 
			ключевое слово DESC- Отсортировать в обратном порядке (наивысшее значение вверху)
			SELECT *
			FROM 'products'
			ORDER BY id DESC LIMIT 1 (регулируется) - последняя запись в таблице*/
	if ($limit){
		$sql .= " LIMIT ";
		$sql .= $limit;

	}
	
	$rs = mysqli_query($db,$sql);

return createSmartyRsArray($rs);

}

	/* 
		Получить продукты для категории $itemId
		integer $itemId ID категории
		array  массив продуктов
	*/

function getProductsByCat ($itemId)
{
	global $db;
	$itemId = intval($itemId);
	$sql = "SELECT *
			FROM products
			WHERE category_id = '{$itemId}'";

	$rs = mysqli_query ($db,$sql);
	
	return createSmartyRsArray($rs);

}

/* получить данные продукта по ID
 integer $itemID ID продукта
 array  массив данных продукта
 */
 function getProductById($itemId)
{
	global $db;
	
	$sql = "SELECT *
		FROM products
		WHERE id = '{$itemId}'";

	$rs = mysqli_query($db,$sql);

	return mysqli_fetch_assoc($rs);

}

