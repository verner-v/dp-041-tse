<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Fiscalmodel extends Model
{	
	
	protected $_db;
	
	public function   __construct()
	{
		$this->_db = Database::instance('asuzf');
	}
		
	////////////////////////FOR AJAX/////////////////////////////

	function addPrihodnayaNakladnaya($data)
	{
		$Article_Model_ID_arr = $data['article_model_id'];
		$ProductionDate_arr = $data['date_facture'];
		$FactoryNumber_arr = $data['zavod_number'];
		$Article_SoftVersion_ID_arr = $data['softversion'];
		
		$Procreator_ID = $data['procreator_id'];
				
		$Employee_ID = $data['otv_employee'];
		
		$DocDate = $data['date_doc'];
		
		$FiscalNumber = NULL;
		
		//TODO фигня, переделать
		for($i = 0; $i < count($Article_SoftVersion_ID_arr); $i++)
		{
			$res = $this->InsArticle($Article_Model_ID_arr[$i], 1, $ProductionDate_arr[$i], $FiscalNumber, $FactoryNumber_arr[$i], $Article_SoftVersion_ID_arr[$i], $Procreator_ID);
			$this->InsDoc_Article_Store(13, $DocDate, 123, 1, 0, 1, $Employee_ID, $res[0]);
		}
		
	}
	
	function addPrihodnayaNakladnayaPlomb($data)
	{
		$Article_Model_ID_arr = $data['article_model_id'];
		$ProductionDate_arr = $data['date_facture'];
		$FactoryNumber_arr = $data['zavod_number'];
		$Article_SoftVersion_ID_arr = $data['softversion'];
	
		$Procreator_ID = $data['procreator_id'];
	
		$Employee_ID = $data['otv_employee'];
	
		$DocDate = $data['date_doc'];
	
		$FiscalNumber = NULL;
	
		//TODO фигня, переделать
		for($i = 0; $i < count($Article_SoftVersion_ID_arr); $i++)
		{
			$res = $this->InsArticle($Article_Model_ID_arr[$i], 1, $ProductionDate_arr[$i], $FiscalNumber, $FactoryNumber_arr[$i], $Article_SoftVersion_ID_arr[$i], $Procreator_ID);
			$this->InsDoc_Article_Store(13, $DocDate, 123, 1, 0, 1, $Employee_ID, $res[0]);
		}
		
		$res = $this->InsDoc_Stamp_Store($God, $DocDate, $DocNumber, $Doc_Type, $Employee_ID);
		$this->InsStamp($Doc_Stamp_Store_ID, $Series, $Number, $Price);
	
	}
	
}