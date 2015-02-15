<?php
// path constants
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS);
define('CONTROLLER_DIR', ROOT . 'Controller' . DS);
define('MODEL_DIR', ROOT . 'Model' . DS);
define('FILES_DIR', ROOT . 'File' . DS);
define('VIEW_DIR', ROOT . 'View' . DS);

// autoloader
spl_autoload_register(function ($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR,  $class);
    $path = ROOT . $class . '.php';
	if (!file_exists($path)){
		throw new \Model\Exception\NotFoundException("File {$path} not found");
	}
    require_once $path;
});
try{
if (empty($_GET['path'])) {
	$controller = $action = 'index';
}
else {
	$path = explode("/", $_GET['path']);
	$controller = $path[0];
	if (isset($path[1])) {
		$action = $path[1];
	} else {
		$action = 'index';
	}
}
$controller = '\\Controller\\' . ucfirst($controller);
$action = lcfirst($action) . 'Action';

$controller = new $controller;

// check if class method exists and run method
if (!method_exists($controller, $action)) {
	throw new \Model\Exception\NotFoundException ("Action {$action} not found");
	//die("404: {$action} method not found");
}

	echo $controller->$action(new \Model\Request($_GET, $_POST, $_SERVER));
} catch (\Model\Exception\NotFoundException $e)
{
	var_dump($e->getMessage());
	die ('404:Something not found');

}





/********************************/
  //$path = CONTROLLER_DIR . $controller . '.php';

/*// check if file exists and include it
if (!file_exists($path)) {
	die("404: {$controller} not found");
}
require_once($path);

// check if class exists and get instance
if (!class_exists($controller)) {
	die("404: {$controller} class not found");
}*/

//echo " <br> <br><br><br> ----------debug----------- <br>";
//echo "GET: <br>";

//echo "<pre>";
//print_r($_GET);
//echo "</pre> <br /> ";

//var_dump(CONTROLLER_DIR . $controller . 'php');

//echo "<pre>";
//print_r($_GET);
//var_dump($path, $controller, $action);
//echo "</pre>";