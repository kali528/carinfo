<?php  
/**
 * 
 */
namespace controllers;
class ServicesController extends \controllers\MainController
{
	
	public function index()
	{
		parent::returnView('services','views/services/index.php');
	}
}
?>