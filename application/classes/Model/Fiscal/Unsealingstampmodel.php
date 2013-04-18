<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Unsealingstampmodel extends Model_Fiscal_Basemodel
{


	// Функция добавления записи в таблицу "Unsealing_Stamp"
	// Unsealing_StampName - наименование города
	function InsUnsealing_Stamp($Unsealing_StampName)
	{
		$Unsealing_StampName = trim($Unsealing_StampName);
	
		$sql = "INSERT INTO Unsealing_Stamp (NAME) VALUES (
					:param_Unsealing_StampName
					)";
	
		$query = DB::query(Database::INSERT, $sql);
	
		$query->param(':param_Unsealing_StampName', $Unsealing_StampName);
	
		$result = $query->execute($this->_db);
	
		return true;
	}
	
	// Функция изменения записи в таблице "Unsealing_Stamp" по ключу "Unsealing_Stamp_ID"
	// Unsealing_StampName - наименование города
	function UpdUnsealing_Stamp($Unsealing_Stamp_ID, $Unsealing_StampName)
	{
		$Unsealing_StampName = trim($Unsealing_StampName);
		if (intval($Unsealing_Stamp_ID))
		{
	
			$sql = "UPDATE Unsealing_Stamp SET
					name = :param_Unsealing_StampName
			
				WHERE
				ID = :param_Unsealing_Stamp_ID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_Unsealing_StampName', $Unsealing_StampName);
			$query->param(':param_Unsealing_Stamp_ID', $Unsealing_Stamp_ID);
				
				
			$result = $query->execute($this->_db);
				
			return true;
		}
		else
			return false;
	}
	
	/*
	function DelUnsealing_Stamp($Unsealing_Stamp_ID)
	{
		if (intval($Unsealing_Stamp_ID))
			return RunSQL("DELETE FROM Unsealing_Stamp WHERE (ID = $Unsealing_Stamp_ID)");
		else
			return false;
	}
	
	function GetUnsealing_Stamp()
	{
		$Result = RunSQL("SELECT ID, NAME
						  FROM unsealing_stamp");
		return $Result;
	}
	*/
}