<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manager extends Controller_Layout_Default{

	public function action_index()
	{
		
		$this->template->content = View::factory('pages/manager/mainManager');
	}
	
	
	/*Справочники*/
	public function action_stuff()
	{
		$this->template->content = View::factory('pages/manager/stuff');
	}
	
	
	public function action_contragents()
	{
	
		$this->template->content = View::factory('pages/manager/contragents');
	}
	
	public function action_formStuff()
	{
	
		$this->template->content = View::factory('pages/manager/formStuff');
	}
	
	/*Документы*/
	public function action_docsCenter()
	{
	
		$this->template->content = View::factory('pages/manager/docsCenter');
	}
	
	public function action_docsStore()
	{
	
		$this->template->content = View::factory('pages/manager/docsStore');
	}
	
	/*Отчеты*/
	public function action_ordersPlombs()
	{
	
		$this->template->content = View::factory('pages/manager/ordersPlombs');
	}
	
	public function action_planingTO()
	{
		
		$this->template->content = View::factory('pages/manager/planingTO');
	}
	
	public function action_OutBill()
	{
	
		$this->template->content = View::factory('pages/manager/OutBill');
	}
	
	public function action_inBill()
	{
	
		$this->template->content = View::factory('pages/manager/inBill');
	}
	
	public function action_inBillPlomb()
	{
	
		$this->template->content = View::factory('pages/manager/inBillPlomb');
	}
	
	public function action_enterExpl()
	{
		$this->template->content = View::factory('pages/manager/enterExpl');
	}
	
	public function action_EquipRepair()
	{
		$this->template->content = View::factory('pages/manager/EquipRepair');
	}
	
	public function action_exitExpl()
	{
		$this->template->content = View::factory('pages/manager/exitExpl');
	}
	
	public function action_FilterOption()
	{
	
		$this->template->content = View::factory('pages/manager/FilterOption');
	}
	
	public function action_inService()
	{
	
		$this->template->content = View::factory('pages/manager/inService');
	}
	
	public function action_TechServ()
	{
	
		$this->template->content = View::factory('pages/manager/TechServ');
	}
	
	public function action_TechServGroup()
	{
	
		$this->template->content = View::factory('pages/manager/TechServGroup');
	}
	
	public function action_shopTransfer()
	{
	
		$this->template->content = View::factory('pages/manager/shopTransfer');
	}
} 