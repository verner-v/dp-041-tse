<?php
class Controller_Catalog_Equipment extends Controller_Template_Defcntr {

	public function before()
	{
		parent::before();

		$this->template->sidebar = View::factory('blocks/catalog/equipmentsidebar')->render();
	}

	public function after()
	{
		parent::after();
	}

	public function action_index()
	{
		$mod = new Model_Equipment();
		
		$res = $mod->getAllBrand();
		
		$var['res'] = $res;
		$this->template->content = View::factory('pages/catalog/equipment/main',$var);
	}
	
	public function action_add()
	{
		
		
		$mod = new Model_Equipment();
		
		$res = $mod->getAllType();

		foreach($res as $item)
		{
			$arr_id[] = $item['ID'];
			$arr_name[] = $item['NAME'];
		}
		
		$var['arr_id'] = $arr_id;
		$var['arr_name'] = $arr_name;
		
		if($this->request->method() === Request::POST)
		{
			$id_type = Arr::get($_POST,'ID_TYPE');
			$name = Arr::get($_POST,'NAME');
			
			$mod->addBrand($id_type, $name);
			
			$qwe['message'] = 'hello';
			$this->template->errormessage = View::factory('pages/error',$qwe)->render();				
		}
		else
		{
			
		}
		
		$this->template->content = View::factory('pages/catalog/equipment/add',$var);
	}
	
	public function action_edit()
	{
		
	}
	
	public function action_search()
	{
		if($this->request->method() === Request::POST)
		{
			
			
			switch($_POST['submit'])
			{
				case 'ID_EUQIPMENT' :
					{
						$var['product'] = $mod->getProductByIdArticle(Arr::get($_POST,'ID_EUQIPMENT'));
						$this->template->content = View::factory('pages/product/productedit',$var);
						break;
					}
				case 'SEARCH_MODEL_NAME' :
					{
						$var['product'] = $mod->getProductByArticle(Arr::get($_POST,'SEARCH_MODEL_NAME'));
						$this->template->content = View::factory('pages/product/productedit',$var);
						break;
					}
				case 'SEARCH_SERIAL' :
					{
						$var['product'] = $mod->getProductByBar(Arr::get($_POST,'SEARCH_SERIAL'));
						$this->template->content = View::factory('pages/product/productedit',$var);
						break;
					}
			}
			
			$this->template->content = View::factory('pages/catalog/equipment/searchresult',$var);
		}
		else
		{
			$this->template->content = View::factory('pages/catalog/equipment/search');
		}
	}
	
	public function action_view()
	{
		
	}
	
	public function action_viewcat()
	{
		//переопределение навигации
		
		$mod = new Model_Equipment();
		
		
		
		$this->template->sidebar = View::factory('blocks/catalog/equipmentviewcatsidebar')->render();
	
	}

}
