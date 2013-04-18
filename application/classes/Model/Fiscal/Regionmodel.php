<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Regionmodel extends Model_Fiscal_Basemodel
{

	// Функция добавления записи в таблицу "Region"
	// RegionName - наименование региона
	function InsRegion($RegionName)
	{
		$RegionName = trim($RegionName);
	
		$sql = "INSERT INTO Region (`NAME`) VALUES (
					:param_RegionName)";
			
		$query = DB::query(Database::INSERT, $sql);
			
		$query->param(':param_RegionName', $RegionName);
	
		$result = $query->execute($this->_db);
	
		return true;
	}
	
	
	// Функция изменения записи в таблице "Region" по ключу "RegionID"
	// RegionName - наименование города
	function UpdRegion($RegionID, $RegionName)
	{
		$RegionName = trim($RegionName);
		if (intval($RegionID))
		{
				
			$sql = "UPDATE Region SET
					name = :param_RegionName
				WHERE
				ID = :param_RegionID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_RegionName', $RegionName);
			$query->param(':param_RegionID', $RegionID);
				
			$result = $query->execute($this->_db);
				
			return 	true;
		}
		else
			return false;
	}
	
	
	function InsRegion($RegionName)
	{
  		$RegionName = trim($RegionName);
  		return  RunSQL("INSERT INTO Region (NAME) VALUES ('$RegionName')");
	}

	function UpdRegion($Region_ID, $RegionName)
	{
		$RegionName = trim($RegionName);
  		if (intval($Region_ID))
  			return RunSQL("UPDATE Region SET name = '$RegionName' WHERE id = $Region_ID ");
 		else
  			return false;
 	}
 	
 	function DelRegion($Region_ID)
 	{
 		if (intval($Region_ID))
 			return RunSQL("DELETE FROM Region WHERE (ID = $Region_ID)");
 		else
 			return false;
 	}
}