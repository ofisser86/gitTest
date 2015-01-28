<?php
// path constants
define('DS', DIRECTORY_SEPARATOR);
define('ROOT',__DIR__ . DS);
define('CONTROLLER_DIR', ROOT . 'Controller' . DS);
define('MODEL_DIR', ROOT . 'Model' . DS);

// include global vars class
require_once(MODEL_DIR . 'Request.php');

if (empty($_GET['path'])) {
else {
	$controller = $path[0];
	if (isset($path[1])) {
	else {
	}
$controller = ucfirst($controller) . 'Controller';
$action = lcfirst($action) . 'Action';
$path = CONTROLLER_DIR . $controller . '.php';

// check if file exists and include it
if (!file_exists($path)) {
require_once($path);

// check if class exists and get instance
if (!class_exists($controller)) {
$controller = new $controller;

// check if class method exists and run method
if (!method_exists($controller, $action)) {
echo $controller->$action(new Request($_GET, $_POST, $_SERVER));



/********************************/


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