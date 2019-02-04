<?php 
	$route = new \Router\Route;
	//TODO validate server variables

	$request = $_SERVER['REQUEST_METHOD'].$_SERVER['REQUEST_URI'];
	
	if(empty($_SESSION['user_id']))
	{
		if (array_key_exists($request, $route->routes))
		{
			$route_components = $route->getRouteComponents($route->routes[$request]);
			$route->loadClass($route_components);
		}
		else
		{
			header("Location: /error");
		}
	}
	else 
	{
		header("Location: /login");
	}
	
	// require 'views/index.php';

	
?>