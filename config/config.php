<?php

/** 
*	ФАИЛ НАСТРОЕК
*
*
*
*/
	
//>Константы для обращения к контролерам
define ('PathPrefix' , 'controllers/');
define ('PathPostfix' , 'Controller.php');
//<

//> используем шаблон
$template = 'default';
$templateAdmin = 'admin';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "views/{$template}/");
define ('TemplateAdminPrefix', "views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонам в вебпространстве (WWW)
define ('TemplateWebPath', "templates/{$template}/");
define ('TemplateAdminWebPath', "templates/{$templateAdmin}/");
//<


//> Инициализация шаблонизатора Smarty
// put.full path to Smarty.class.php
require('library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('library/Smarty/configs');

$smarty->assign('teplateWebPath', TemplateWebPath);
//<






