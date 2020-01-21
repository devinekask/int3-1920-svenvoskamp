<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Products',
    'action' => 'products'
  ),
  'product-detail' => array(
    'controller' => 'Products',
    'action' => 'detail'
  ),
  'cart' => array(
    'controller' => 'Orders',
    'action' => 'cart'
  ),
  'cart-detail' => array(
    'controller' => 'Orders',
    'action' => 'detail'
  ),
  'cart-payment' => array(
    'controller' => 'Orders',
    'action' => 'payment'
  ),
  'finished' => array(
    'controller' => 'Orders',
    'action' => 'finished'
  ),
  'road' => array(
    'controller' => 'Road',
    'action' => 'index'
  )


);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
