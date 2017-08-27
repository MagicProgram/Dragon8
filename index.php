<?php
	
	include_once 'config/config.php'; 		  // иницилизация настроек
	include_once 'config/dbali.php';             // инициализация базы данных
	include_once 'library/mainFunctions.php'; // Основные функции
	

	// определяем с каким контроллером будем работать
	$controllerName = isset ($_GET ['controller']) ? ucfirst ($_GET['controller']) : 'Index';

	// определяем с какой функцией будем работать
	$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


	//загрузка страницы
	loadPage($smarty, $controllerName, $actionName);