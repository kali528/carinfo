<?php 
/**
 * 
 */
namespace controllers;
class MainController
{
	public static function returnView($page_name, $page)
	{
		
		require_once 'views/index.php';
		die;
	}

	function returnRedirect($page_name, $page, $redirect_to)
	{
		header("Location: ".$redirect_to);
		require_once 'views/index.php';
		die;
	}
}
 ?>