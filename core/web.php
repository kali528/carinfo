<?php 
	$route = new \Router\Route;
	//TODO validate server variables

	$request = $_SERVER['REQUEST_METHOD'].$_SERVER['REQUEST_URI'];
	
	if(!empty($_SESSION['user_id']))
	{
		if (array_key_exists($request, $route->routes))
		{
			$route_components = $route->getRouteComponents($route->routes[$request]);
		}
		else
		{
			header("Location: /error");
		}
	}
	else 
	{
		$route_components = $route->getRouteComponents('LoginController@index');
	}
	
	$route->loadClass($route_components);

	
?>