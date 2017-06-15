<?php
require_once __DIR__ . '/../lib/App.php';
require_once __DIR__ . '/../lib/Controller.php';
require_once __DIR__ . '/../controllers/SiteController.php';
require_once __DIR__ . '/../lib/View.php';

/*if (!empty($_GET['r'])) {
    $r = $_GET['r'];
} else {
    $r = 'site/index';
}*/
$r = !empty($_GET['r']) ? $_GET['r'] : 'site/index';
// list($controllerName, $actionName) = explode('/', $r);
$arr = explode('/', $r);
$controllerName = $arr[0];
$actionName = $arr[1];

// $c == 'SiteController'
$c = ucfirst($controllerName) . 'Controller';
$controller = new $c();
// $a == 'indexAction'
$a = $actionName . 'Action';
$controller->$a();
$controller->render('...');

/*error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 1);

$config = include 'config.php';


include 'lib/database/DataBase.php';

$db = DataBase::connect(
	$config['mysql']['host'],
	$config['mysql']['dbname'],
	$config['mysql']['user'],
	$config['mysql']['pass']
);

*/
