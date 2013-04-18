<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template_DefaultController {

	public function before()
	{
		parent::before();
		
		$this->template->sidebar = View::factory('blocks/sidebar')->render();
	}
	
	public function after()
	{
		parent::after();
	}
	
	public function action_index()
	{
		
	}
} // End Welcome
