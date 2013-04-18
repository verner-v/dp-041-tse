<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Fiscal_Main extends Controller_Template_Defcntr{

	public function before() 
	{
		parent::before();
		
		$this->template->header = View::factory('blocks/header_vic');
	}
	
	public function after()
	{
		parent::after();
	}

	
	public function action_index()
	{
		
		$this->template->content = View::factory('pages/fiscal/mainManager');
	}
	
	
	/*Справочники*/
	public function action_stuff()
	{
		$this->template->content = View::factory('pages/fiscal/stuff');
	}
	
	
	public function action_contragents()
	{
	
		$mod = new Model_Fiscal_Clienttypemodel();
		
		$client_type = $mod->getClientType4Select();
		
		$var['client_type'] = $client_type;
		
		$this->template->content = View::factory('pages/fiscal/contragents',$var);
	}
	
	public function action_contragentadd()
	{

		$mod = new Model_Fiscal_Clientmodel();
				
		if($this->request->method() === Request::POST)
		{
			//client_type_id_add
			//edrpou_add
			//name_add
			//ownership_add
			//uaddress_add
			
			$client_type_id_add = Arr::get($_POST,'client_type_id_add');
			$edrpou_add = Arr::get($_POST,'edrpou_add');
			$name_add = Arr::get($_POST,'name_add');
			$ownership_add = Arr::get($_POST,'ownership_add');
			$uaddress_add = Arr::get($_POST,'uaddress_add');
			
			$mod->InsClient($name_add, $edrpou_add, $uaddress_add, $client_type_id_add, $ownership_add, 0);
			
			
		}
		else
		{
				
		}
		
		$this->redirect('/fiscal/main/contragents');
	}
	
	public function action_contragentedit()
	{
	
		$mod = new Model_Fiscal_Fiscalmodel();
	
		if($this->request->method() === Request::POST)
		{
			//client_type_id_add
			//edrpou_add
			//name_add
			//ownership_add
			//uaddress_add
				
			$client_id = Arr::get($_POST,'client_id');
			$client_type_id_edit = Arr::get($_POST,'client_type_id_edit');
			$edrpou_edit = Arr::get($_POST,'edrpou_edit');
			$name_edit = Arr::get($_POST,'name_edit');
			$ownership_edit = Arr::get($_POST,'ownership_edit');
			$uaddress_edit = Arr::get($_POST,'uaddress_edit');

			$mod->UpdClient($client_id, $name_edit, $edrpou_edit, $uaddress_edit, $client_type_id_edit, $ownership_edit, 0);
				
		}
		else
		{
	
		}
	
		$this->redirect('/fiscal/main/contragents');
	}
	
	
	
	public function action_formStuff()
	{
	
		$this->template->content = View::factory('pages/fiscal/formStuff');
	}
	
	/*Документы*/
	public function action_docsCenter()
	{
	
		$this->template->content = View::factory('pages/fiscal/docsCenter');
	}
	
	public function action_docsStore()
	{
	
		$this->template->content = View::factory('pages/fiscal/docsStore');
	}
	
	/*Отчеты*/
	public function action_ordersPlombs()
	{
	
		$this->template->content = View::factory('pages/fiscal/ordersPlombs');
	}
	
	public function action_planingTO()
	{
		
		$this->template->content = View::factory('pages/fiscal/planingTO');
	}
	

	public function action_OutBill()
	{
	
		$this->template->content = View::factory('pages/fiscal/OutBill');
	}
	
	public function action_inBill()
	{
		$mod = new Model_Fiscal_Fiscalmodel();		
		
		$var['article_model_id_add'] = $mod->getArticleModel4Select();
		$var['softversion_id_add'] = $mod->getSoftversion4Select();
		
		$var['procreator_id'] = $mod->getAllProcreator4Select();
		
		if($this->request->method() === Request::POST)
		{
			$vars = $this->request->post();
				
			//$mod->InsClient($name_add, $edrpou_add, $uaddress_add, $client_type_id_add, $ownership_add, 0);
			
			//TODO $God, $DocDate, $DocNumber - do not use (in model generate doc number and other)
			//$mod->InsDoc_Article_Store($God, $DocDate, $DocNumber, $Doc_Type, $Price, $Consignment_RecordsID, $Employee_ID, $Article_ID);
			
			$mod->addPrihodnayaNakladnaya($vars);
		}
				
		$this->template->content = View::factory('pages/fiscal/inBill',$var);
	}
	
	public function action_inBillPlomb()
	{
		
		$mod = new Model_Fiscal_Fiscalmodel();
		
		$var['article_model_id_add'] = $mod->getArticleModel4Select();
		$var['softversion_id_add'] = $mod->getSoftversion4Select();
		
		$var['procreator_id'] = $mod->getAllProcreator4Select();
		
		if($this->request->method() === Request::POST)
		{
			$vars = $this->request->post();
		
			//$mod->InsClient($name_add, $edrpou_add, $uaddress_add, $client_type_id_add, $ownership_add, 0);
				
			//TODO $God, $DocDate, $DocNumber - do not use (in model generate doc number and other)
			//$mod->InsDoc_Article_Store($God, $DocDate, $DocNumber, $Doc_Type, $Price, $Consignment_RecordsID, $Employee_ID, $Article_ID);
				
			$mod->addPrihodnayaNakladnayaPlomb($vars);
		}
	
		$this->template->content = View::factory('pages/fiscal/inBillPlomb',$var);
	}
	
} 