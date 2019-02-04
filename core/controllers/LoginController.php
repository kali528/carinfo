<?php 
	/**
	 * 
	 */
	namespace controllers;

	class LoginController extends \controllers\MainController
	{
		public function index()
		{
			parent::returnView('login', 'views/Login/index.php');
		}
	}
?>