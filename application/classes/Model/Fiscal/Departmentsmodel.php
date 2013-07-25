<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Departmentsmodel extends Model_Fiscal_Basemodel
{

function InsDepartments($DepartmentsName)
{
$DepartmentsName = trim($DepartmentsName);

$sql = "INSERT INTO Departments(
				NAME
		) VALUES (
					:param_DepartmentsName
					)";
		
		$query = DB::query(Database::INSERT, $sql);
			
		$query->param(':param_DepartmentsName', $DepartmentsName);

		$result = $query->execute($this->_db);

}


// Функция изменения записи в таблице "Departments" по ключу "Departments_ID"
// "DepartmentsName" varchar(20) - отдел

function UpdDepartments($Departments_ID, $DepartmentsName)
{
$DepartmentsName = trim($DepartmentsName);

$sql = "UPDATE Departments SET
NAME = :param_DepartmentsName
				WHERE
				ID = :param_Departments_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
				
			$query->param(':param_DepartmentsName', $DepartmentsName);
			$query->param(':param_Departments_ID', $Departments_ID);
		
	
$result = $query->execute($this->_db);

return true;
}

// Функция добавления записи в таблицу "Departments"
// "DepartmentsName" varchar(20) - отдел

	function InsDepartments($DepartmentsName)
	{
  		$DepartmentsName = trim($DepartmentsName);
		return RunSQL("INSERT INTO Departments(
							NAME
  							) VALUES (
  							'$DepartmentsName')");
	}
	
	function DelDepartments($Departments_ID)
	{
		if (intval($Departments_ID))
			return RunSQL("DELETE FROM Departments WHERE (ID = $Departments_ID)");
		else
			return false;
	}
	
	function UpdDepartments($Departments_ID, $DepartmentsName)
	{
		$DepartmentsName = trim($DepartmentsName);
		return RunSQL("UPDATE Departments SET
				NAME 	 = '$DepartmentsName'
				WHERE (ID = $Departments_ID)");
	}
}