<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog_City extends Controller_Template_Defcntr {
	

public function before()
	{
		parent::before();
	
		$this->template->sidebar = View::factory('blocks/catalog/citysidebar')->render();
	}
	
	public function after()
	{
		parent::after();
	}
	
	public function action_index()
	{
		
		
	}
	
}