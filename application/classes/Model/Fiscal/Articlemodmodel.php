<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Articlemodmodel extends Model_Fiscal_Basemodel
{
	

	function getArticleModel()
	{
		$sql = "SELECT * FROM  article_model ";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	}
	
	function getArticleModel4Select()
	{
		$sql = "SELECT * FROM  article_model";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
			
		$arr = array();
	
		foreach($result as $item)
		{
			$arr[$item['ID']] = $item['NAME'];
		}
	
		return $arr;
	}
	
	
	// Функция добавления записи в таблицу "Article_Model"
	// Name			varchar(100) - модель
	// Componets	varchar(100) - сборка
	
	function InsArticle_Model($Article_ModelName, $Componets)
	{
	$Article_ModelName = trim($Article_ModelName);
	$Componets = trim($Componets);
	
	$sql = "INSERT INTO Article_Model (
		NAME
		,COMPONENTS) values (:param_Article_ModelName,:param_Componets)";
	
		$query = DB::query(Database::INSERT, $sql);
	
			$query->param(':param_Article_ModelName', $Article_ModelName);
			$query->param(':param_Componets', $Componets);
	
			$result = $query->execute($this->_db);
	
			return true;
	}
	
	// Функция изменения записи в таблице "Article_Model" по ключу "Article_Model_ID"
	// Article_ModelName - наименование города
	function UpdArticle_Model($Article_Model_ID, $Article_ModelName, $Componets)
	{
	$Article_ModelName = trim($Article_ModelName);
	$Componets = trim($Componets);
	if (intval($Article_Model_ID))
	{
	$sql = "UPDATE Article_Model SET
		name = :param_Article_ModelName
				WHERE
				id = :param_Article_Model_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
					
				$query->param(':param_Article_ModelName', $Article_ModelName);
			$query->param(':param_Article_Model_ID', $Article_Model_ID);
		
			$result = $query->execute($this->_db);
			
		return true;
	}
	else
		{
		return false;
	}
	
	}
	
	

	function InsArticle_Model($Article_ModelName, $Componets)
	{
  		$Article_ModelName = trim($Article_ModelName);
  		$Componets = trim($Componets);

  		RunSQL("INSERT INTO Article_Model (
				 NAME
				,COMPONENTS
  				) VALUES (
				  '$Article_ModelName'
				 ,'$Componets'
  				)");
	}
	
	function DelArticle_Model($Article_Model_ID)
	{
		if (intval($Article_Model_ID))
			return RunSQL("DELETE FROM Article_Model WHERE (ID = $Article_Model_ID)");
		else
			return false;
	}
	
	function UpdArticle_Model($Article_Model_ID, $Article_ModelName, $Componets)
	{
		$Article_ModelName = trim($Article_ModelName);
		$Componets = trim($Componets);
		if (intval($Article_Model_ID))
			return RunSQL("UPDATE Article_Model
					SET
					NAME = '$Article_ModelName
					', COMPONENTS = '$Componets
					' WHERE id = $Article_Model_ID ");
					else
			return false;
	}
		
	
	function GetAllArticle_Model()
	{
		$result = RunSQL("SELECT ID, NAME, COMPONENTS FROM Article_Model group by NAME ");
		return $result;
	}
}