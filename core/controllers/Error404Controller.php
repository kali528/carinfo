<?php 
	/**
	 * 
	 */
	namespace controllers;

	class Error404Controller extends \controllers\MainController
	{
		public function index()
		{
			parent::returnView('404', 'views/errors/error404.php');
		}
	}
?>