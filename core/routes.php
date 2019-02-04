<?php 

$routes = array(
'GET/'=>'IndexController@index',
'GET/services'=>'ServicesController@index',
'GET/error'=>'Error404Controller@index',
'GET/login'=>'LoginController@index',
);
$router->define($routes, $_SERVER['REQUEST_URI']);

?>