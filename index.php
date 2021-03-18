<?php

include_once('m/model.php');

spl_autoload_register (function ($class) {

	$sources = array('c/' . $class . '.php', 'm/' . $class . '.php');
	
		foreach ($sources as $source) {
			if (file_exists($source)) {
				require_once $source;
			} 
		} 
	});
require_once  __DIR__ . "/vendor/autoload.php " ; 
// require_once  __DIR__ . "/vendor/twig/twig/lib/Twig/Autoloader.php " ; 
Twig_Autoloader :: register ();

/* require_once 'Twig/Autoloader.php';
Twig_Autoloader::register(); */

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

if (isset($_GET['c'])) {
	if ($_GET['c'] == 'page') {
		$controller = new C_Page();
	} else if ($_GET['c'] == 'user') {
		$controller = new C_User();
	} else if ($_GET['c'] == 'good') {
		$controller = new C_Good();
	} else if ($_GET['c'] == 'basket') {
		$controller = new C_Basket();
	} else if ($_GET['c'] == 'order') {
		$controller = new C_Order();
	} else if ($_GET['c'] == 'admin') {
		$controller = new C_Admin();
	}
} else {
	$controller = new C_Page();
}

$controller->Request($action);