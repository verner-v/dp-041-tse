<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Citymodel extends Model_Fiscal_Basemodel
{	
		
	function getCities()
	{
		//$sql = "SELECT * FROM city"
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
	
		return $result;
	}
	
	// Функция добавления записи в таблицу "City"
	// CityName - наименование города
	function InsCity($CityName)
	{
		$CityName = trim($CityName);
	
		$sql = "INSERT INTO City (NAME) VALUES (:param_CityName)";
	
		$query = DB::query(Database::INSERT, $sql);
	
		$query->param(':param_CityName', $CityName);
	
		$result = $query->execute($this->_db);
		
	}
	
	// Функция изменения записи в таблице "City" по ключу "City_ID"
	// CityName - наименование города
	function UpdCity($City_ID, $CityName)
	{
		$CityName = trim($CityName);
		
			$sql = "UPDATE City SET
				name = :param_CityName
				WHERE
				id = :param_City_ID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_CityName', $CityName);
			$query->param(':param_City_ID', $City_ID);
	
			$result = $query->execute($this->_db);
				
			return $result;
		
	}
 	
}
