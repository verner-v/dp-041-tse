<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
	//public $auth_required = array('login');
	
	public function after()
	{
		parent::after();
	}
	
	public function before()
	{
		parent::before();
		/*
		$this->session= Session::instance();
				
		if ($this->auth_required !== FALSE && Auth::instance()->logged_in($this->auth_required) === FALSE)
		{
			if (Auth::instance()->logged_in())
			{
				Request::current()->redirect('/');
			}
			else
			{
				Request::current()->redirect('login'); //should not be executed (never)
			}
		}
		*/
	}
	
	
	public function action_getclientsbyclienttypeid()
	{
		//	disable auto rendering if requested using ajax
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{
		
			$client_type_id = Arr::get($_POST,'client_type_id');
		
			$mod = new Model_Fiscal_Clientmodel();
				
			$result = $mod->getClientsByClientTypeId4Select($client_type_id);
				
			echo json_encode($result);
		
		}
	}
	
	public function action_getclientbyid()
	{
		//	disable auto rendering if requested using ajax
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{
		
			$client_id = Arr::get($_POST,'client_id');
		
			$mod = new Model_Fiscal_Clientmodel();
		
			$result = $mod->getClientById($client_id);
		
			echo json_encode($result);
		
		}
	}
	
	/*
	public function action_getsoftversionbyarticlemodelid()
	{
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{
		
			$article_model_id = Arr::get($_POST,'article_model_id');
		
			$mod = new Model_Fiscal_Fiscalmodel();
		
			$result = $mod->getClientById($client_id);
		
			echo json_encode($result);
		
		}
	}
	*/
	
	//удаляет штрихкод
	public function action_removebarid()
	{
		//	disable auto rendering if requested using ajax
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{
		
			$bar_id = Arr::get($_POST,'bar_id');
		
			$mod = new Model_ServerProductModel();
			
			$result = $mod->removeBarById($bar_id);
			
			$var['bbb'] = $result;
			
			echo json_encode($var);
		
		}
	}
	
	//запускает процедуру рассылки данных на хост (определённый, полученный через аякс )
	public function action_retryApplyChanges()
	{
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{
			$shopserver_id = Arr::get($_POST,'shopserver_id');
			
			//Kohana::$log->add(LOG::ERROR, 'Hello world'.$shopserver_id);
			
			//вот собсно говоря и магия
			
			Helper_Phprpc::load_client_lib();
			
			$result = Helper_Serverside::retryApplyChanges($shopserver_id);
			
			$var = Helper_Serverside::getUnchangedStatistic($shopserver_id);
						
			//$var['result'] = $result;
			
				
			echo json_encode($var);
		}
	}
	
	
	//генерирование форму штрихкода (вынес отдельно, чтоб не в jscript) 
	public function action_getBarcodeForm()
	{
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{

			$mod = new Model_ServerProductModel();
			
			$var['dtypes'] = $mod->getDtype();
			
			$var['measures'] = $mod->getMeasure();
			
			$resform = View::factory('helper/barcodeform',$var)->render();
		
			echo $resform;
		}
	}
	
	public function action_getBrandByIdType()
	{
		if( Request::current()->is_ajax())
		{
			$this->auto_render = FALSE;
		}
		if($this->request->method() === Request::POST)
		{
		
			$id_type = Arr::get($_POST,'id_type');
			
			$mod = new Model_Equipment();
				
			$result = $mod->getAllBrandByIdType($id_type);
				
			
			if(count($result) > 0)
			{
					
				foreach($result as $item)
				{
					$arr_id[] = $item['ID'];
					$arr_name[] = $item['NAME'];
				}
			}
			else
			{
				$arr_id[] = -1;
				$arr_name[] = 'Выберите тип';
			}
			
			$var['arr_id'] = $arr_id;
			$var['arr_name'] = $arr_name;
			
			$var = array_combine($arr_id,$arr_name);
			
			echo json_encode($var);
			
		}
	}
	
	
}
