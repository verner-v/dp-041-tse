<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Employeemodel extends Model_Fiscal_Basemodel
{
	
	// Функция добавления записи в таблицу "Employee"
	// "Name"			varchar(20) - Имя
	// "SName"		    varchar(20)	- фамилия
	// "FName"			varchar(20)	- отчество
	// "Telephone"		varchar(45) - телефон
	// "Post"			varchar(80) - должность
	// "Address"		varchar(60) - адрес
	// "DateOfBirth"	Date		- дата рождения
	// "Departments_ID"	Smallint	- отдел
	// "City_ID"		Smallint	- город
	
	function InsEmployee($Name, $SName, $FName, $Telephone, $Post, $Address, $DateOfBirth, $Departments_ID, $City_ID)
	{
	$Name 		= trim($Name);
	$SName 		= trim($SName);
	$FName 		= trim($FName);
	$Telephone 	= trim($Telephone);
	$Post 		= trim($Post);
	$Address 	= trim($Address);
	
	$TDate = explode(".",$DateOfBirth);
	
	if  (intval($Departments_ID)
	&& (checkdate($TDate[0],$TDate[1],$TDate[2]))
	&& intval($City_ID))
	{
		
		
		
	$sql = "INSERT INTO Employee (
		NAME
			,SNAME
			,FNAME
					,TELEPHONE
					,POST
					,ADDRESS
					,DATEOFBIRTH
					,DEPARTMENTS_ID
					,CITY_ID
			) VALUES (
					:param_Name,
					:param_SName,
					:param_FName,
					:param_Telephone,
					:param_Post,
					:param_Address,
					:param_DateOfBirth,
					:param_Departments_ID,
					:param_City_ID
					)";
	
			$query = DB::query(Database::INSERT, $sql);
	
			$query->param(':param_Name', $Name);
			$query->param(':param_SName', $SName);
			$query->param(':param_FName', $FName);
			$query->param(':param_Telephone', $Telephone);
				$query->param(':param_Post', $Post);
			$query->param(':param_Address', $Address);
						$query->param(':param_DateOfBirth', $DateOfBirth);
						$query->param(':param_Departments_ID', $Departments_ID);
						$query->param(':param_City_ID', $City_ID);
							
						$result = $query->execute($this->_db);
							
						return true;
	}
	else
	{ return false;  }
	}

// Функция добавления записи в таблицу "Employee"
// "Name"			varchar(20) - Имя
// "SName"		    varchar(20)	- фамилия
// "FName"			varchar(20)	- отчество
// "Telephone"		varchar(45) - телефон
// "Post"			varchar(80) - должность
// "Address"		varchar(60) - адрес
// "DateOfBirth"	Date		- дата рождения
// "Departments_ID"	Smallint	- отдел
// "City_ID"		Smallint	- город

	function InsEmployee($Name, $SName, $FName, $Telephone, $Post, $Address, $DateOfBirth, $Departments_ID, $City_ID)
	{
  		$Name 		= trim($Name);
  		$SName 		= trim($SName);
  		$FName 		= trim($FName);
  		$Telephone 	= trim($Telephone);
        $Post 		= trim($Post);
  		$Address 	= trim($Address);

  		$Run = true;
		if (!intval($Departments_ID)) 	{ $Run = false; echo "<br>Error! Departments_ID:$Departments_ID";};
	    if (!intval($City_ID))			{ $Run = false; echo "<br>Error! City_ID:$City_ID";};

		if ($Run)
		{
			return RunSQL("INSERT INTO Employee (
							 NAME
							,SNAME
							,FNAME
							,TELEPHONE
							,POST
							,ADDRESS
							,DATEOFBIRTH
							,DEPARTMENTS_ID
							,CITY_ID
							) VALUES (
							 '$Name'
  		   					,'$SName'
  		   					,'$FName'
  		   					,'$Telephone'
  		   					,'$Post'
  		   					,'$Address'
  		   					,'$DateOfBirth'
  		   					,$Departments_ID
  		   					,$City_ID )");
  		}
  		else
  		{ echo "Error!: InsEmployee"; return false;  }
	}

	
	function DelEmployee($Employee_ID)
	{
		if (intval($Employee_ID))
			return RunSQL("DELETE FROM Employee WHERE (ID = $Employee_ID)");
		else
			return false;
	}
	
	function UpdEmployee($Employee_ID, $Name, $SName, $FName, $Telephone, $Post, $Address, $DateOfBirth, $Departments_ID, $City_ID)
	{
		$Name 		= trim($Name);
  		$SName 		= trim($SName);
  		$FName 		= trim($FName);
  		$Telephone 	= trim($Telephone);
        $Post 		= trim($Post);
  		$Address 	= trim($Address);

  		$Run = true;
		if (!intval($Departments_ID)) 	{ $Run = false; echo "<br>Error! Departments_ID:$Departments_ID";};
	    if (!intval($City_ID))			{ $Run = false; echo "<br>Error! City_ID:$City_ID";};
	    if (!intval($Employee_ID))		{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
	     
		if ($Run)
		{
			return RunSQL("UPDATE Employee SET
					NAME			= '$Name'
					,SNAME          = '$SName'
					,FNAME          = '$FName'
					,TELEPHONE      = '$Telephone'
					,POST           = '$Post'
					,ADDRESS        = '$Address'
					,DATEOFBIRTH    = '$DateOfBirth'
					,DEPARTMENTS_ID = $Departments_ID
					,CITY_ID        = $City_ID
					WHERE (ID = $Employee_ID)");
	
		}
		else { echo "Error!: UpdEmployee"; return false; }
	}
	
	function GetEmployee()
	{
		$result = RunSQL("SELECT ID,
								NAME,
								SNAME,
								FNAME,
								TELEPHONE,
								POST,
								ADDRESS,
								DATEOFBIRTH,
								DEPARTMENTS_ID,
								CITY_ID
							FROM Employee
							where DEPARTMENTS_ID = 2 group by NAME");
		return $result;
	}
	
	
}