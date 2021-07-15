<?
function view($temp, $data = [], $andMeta = false){
	if (is_array($data) && count($data))
	extract($data);
	include 'vars.php';

	ob_start();
	include "pages/$temp" . '.php';
	if ($andMeta){
		return [
			'meta'=> $meta,
			'html'=>ob_get_clean(),
		];
	}

	return ob_get_clean();
}

function isTemplate($temp){
	$_temp = "pages/$temp.php";
	return file_exists($_temp);
}

function getMeta($page, $varName = 'meta'){
	ob_start();
	include "pages/$page" . '.php';
	$html = ob_get_clean();
	return ;
}

function var_dump_pre($args){
	echo '<pre>';
	var_dump($args);
	echo '</pre>';
}

function print_r_pre($args){
	echo '<pre>';
	print_r($args);
	echo '</pre>';
}

function goToURL($url = ''){
	header('HTTP/1.1 301 Moved Permanently');
	if ($url){
		header('Location: '.$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'] . $url);
	}
	else{
		header('Location: '.$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']);
	}

	exit();
}
