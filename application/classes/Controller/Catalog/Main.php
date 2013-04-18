<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog_Main extends Controller_Template_Defcntr {

	public function before()
	{
		parent::before();
	
		$this->template->sidebar = View::factory('blocks/catalog/mainsidebar')->render();
	}
	
	public function after()
	{
		parent::after();
	}
	
	public function action_index()
	{
		
		
	}

}