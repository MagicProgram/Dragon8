<?php
		

		/* 
			Основные функции

		*/


	/*  
			Формирование запрашиваемой страницы
			
		@param string $controllerName - название контроллера
		@param string $actionName -название функции обработки страницы
	*/
						/*	пояснения к ниже коду вызова
							// подключить контроллер
						    include_once 'controllers/' . $controllerName . 'Controller.php';

							//формируем название функций
							$function = $actionName . 'Action';
							echo 'Полное название вызываемой функции = ' . $function . '<br />';

						    // выполняем функцию из IndexController.php
							$function();
						*/


function loadPage($smarty, $controllerName, $actionName = 'index') {

		include_once PathPrefix . $controllerName . PathPostfix;
		
		
		$function = $actionName . 'Action' ;

		$function($smarty);	
	

	}

	/*
	Загрузка шаблонов $smarty(шаблонизатор)
	$templateName название файла шаблона

	*/
	
	function loadTemplate($smarty, $templateName)

	{
		$smarty->display ($templateName . TemplatePostfix);
	}

	/*
	функция отладки. Останавливает работу программы выводя значение переменной
	$value - переменная для вывода ее на страницу

	*/
	function d ($value = null, $die = 1)
	{
		echo 'Debug: <br /><pre>';
		print_r ($value);
		echo '</pre>';

		if ($die) die;
	}

	/*

		Преобразование результата работы функции выборки в ассоциативный массив
		$rs набор строк - результат работы SELECT
	*/ 

	function createSmartyRsArray($rs)
	{

		if (! $rs) return false;

		$smartyRs = array();
		while ($row =mysqli_fetch_assoc($rs)) {

			$smartyRs[] = $row;
		}
		
		return $smartyRs;

	}