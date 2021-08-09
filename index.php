<?php
include_once 'core/function.php';
include_once 'core/vars.php';
session_start();


$listNews = array();
//$scanDir = scandir('data');
$uris = explode('/', $_SERVER['REQUEST_URI']);
foreach ($uris as $key=>$uri) {
	if (!$uri || $uri=='..' || $uri=='.' || mb_strlen($uri)<3){
		unset($uris[$key]);
	}
}

$params = '';
$page = implode('/', $uris);
$isInc = strpos(mb_strtolower($page), 'inc');

// пустой $uri
if (!$page){
	$page = 'index';
}
$pageLen = mb_strlen($page);
$paramsPos = strripos($page, '?');

// Если переданы параметры GET
if ($paramsPos){
	$params = substr($page, $paramsPos);
	$page = substr($page, 0, $paramsPos);
}

/*var_dump_pre($page);
var_dump_pre($params);
var_dump_pre($paramsPos);*/

// Страница отсуствует или не правельный url
if (!isTemplate($page) || $isInc !== false){
	goToURL();
}

// Формирование страниц
$content = view($page, [], true);

$header = view('inc/header', ['meta'=>$content['meta']]);
$footer = view('inc/footer', ['meta'=>$content['meta']]);

// Вывод контента
echo $header . $content['html'] . $footer;
