<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docserviceremodel extends Model_Fiscal_Basemodel
{

	// Функция добавления записи в таблицу "Doc_Service_RE"
	
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "Degree_Of_Imperfection"	varchar(200) - Характер неисправности
	// "Repair_Stage"			smallint(6)	 - Стадии ремонта. Принят в ремонт (0), в ремонте (1), ремонт завершен(2), аппарат выдан(3)
	// "GiveOut_EmployeeID"		smallint(6)	 - Ссылка на ответственного, оформившего выдачу аппарата
	// "GiveOut_DocDate"			date	 - Дата выдачи аппарата
	// "Doc_Service_AV_ID"		int(11)		 - Ссылка на акт ввода в эксплуатацию
	
	function InsDoc_Service_RE(
			$God
			,$DocDate
			,$DocNumber
			,$Employee_ID
			,$Article_ID
			,$Object_ID
			,$Degree_Of_Imperfection
			,$Repair_Stage
			,$GiveOut_EmployeeID
			,$GiveOut_DocDate
			,$Doc_Service_AV_ID
	)
	{
	$DD = explode(".",$DocDate);
	$GOdD = explode(".",$GiveOut_DocDate);
	
	$Degree_Of_Imperfection = trim($Degree_Of_Imperfection);
	
	if (checkdate($GOdD[0],$GOdD[1],$GOdD[2])
	&& checkdate($DD[0],$DD[1],$DD[2])
	&& intval($God)
	&& intval($DocNumber)
	&& intval($Employee_ID)
	&& intval($Article_ID)
	&& intval($Object_ID)
	&& intval($Repair_Stage)
	&& intval($GiveOut_EmployeeID)
	&& intval($Doc_Service_AV_ID))
	{
		
	$sql = "INSERT INTO Doc_Service_RE(
			GOD
			,DOCDATE
			,DOCNUMBER
		,OBJECT_ID
					,EMPLOYEE_ID
					,ARTICLE_ID
					,DEGREE_OF_IMPERFECTION
					,REPAIR_STAGE
					,GIVEOUT_EMPLOYEEID
					,GIVEOUT_DOCDATE
					,DOC_SERVICE_AV_ID
			) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Object_ID,
					:param_Employee_ID,
					:param_Article_ID,
					:param_Degree_Of_Imperfection,
					:param_Repair_Stage,
					:param_GiveOut_EmployeeID,
					:param_GiveOut_DocDate,
					:param_Doc_Service_AV_ID
	
					)";
	
			$query = DB::query(Database::INSERT, $sql);
	
			$query->param(':param_God', $God);
		$query->param(':param_DocDate', $DocDate);
		$query->param(':param_DocNumber', $DocNumber);
		$query->param(':param_Object_ID', $Object_ID);
	$query->param(':param_Employee_ID', $Employee_ID);
	$query->param(':param_Article_ID', $Article_ID);
	$query->param(':param_Degree_Of_Imperfection', $Degree_Of_Imperfection);
			$query->param(':param_Repair_Stage', $Repair_Stage);
			$query->param(':param_GiveOut_EmployeeID', $GiveOut_EmployeeID);
			$query->param(':param_GiveOut_DocDate', $GiveOut_DocDate);
			$query->param(':param_Doc_Service_AV_ID', $Doc_Service_AV_ID);
		
		
			$result = $query->execute($this->_db);
					
					
			return true;
		
		}
							else {return false; }
	}
	
	// Функция изменения записи в таблице "Doc_Service_RE" по ключу "Doc_Service_REID"
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "Degree_Of_Imperfection"	varchar(200) - Характер неисправности
	// "Repair_Stage"			smallint(6)	 - Стадии ремонта. Принят в ремонт (0), в ремонте (1), ремонт завершен(2), аппарат выдан(3)
	// "GiveOut_EmployeeID"		smallint(6)	 - Ссылка на ответственного, оформившего выдачу аппарата
	// "GiveOut_DocDate"			date	 - Дата выдачи аппарата
	// "Doc_Service_AV_ID"		int(11)		 - Ссылка на акт ввода в эксплуатацию
	
	function UpdDoc_Service_RE(
	$Doc_Service_RE_ID
	,$God
	,$DocDate
	,$DocNumber
	,$Employee_ID
	,$Article_ID
	,$Object_ID
	,$Degree_Of_Imperfection
	,$Repair_Stage
	,$GiveOut_EmployeeID
	,$GiveOut_DocDate
	,$Doc_Service_AV_ID
	)
	{
	$DD = explode(".",$DocDate);
	$GOdD = explode(".",$GiveOut_DocDate);
	
	$Degree_Of_Imperfection = trim($Degree_Of_Imperfection);
	
	if (checkdate($GOdD[0],$GOdD[1],$GOdD[2])
	&& checkdate($DD[0],$DD[1],$DD[2])
		&& intval($God)
		&& intval($DocNumber)
		&& intval($Doc_Service_RE_ID)
		&& intval($Employee_ID)
		&& intval($Article_ID)
		&& intval($Object_ID)
		&& intval($Repair_Stage)
		&& intval($GiveOut_EmployeeID)
		&& intval($Doc_Service_AV_ID))
		{
			
			
		$sql = "UPDATE Doc_Service_RE SET
		GOD = :param_God,
		DOCDATE = :param_DocDate,
		DOCNUMBER = :param_DocNumber,
		EMPLOYEE_ID = :param_Employee_ID,
		ARTICLE_ID = :param_Article_ID,
		OBJECT_ID = :param_Object_ID,
					DEGREE_OF_IMPERFECTION = :param_Degree_Of_Imperfection,
					REPAIR_STAGE = :param_Repair_Stage,
					GIVEOUT_EMPLOYEEID = :param_GiveOut_EmployeeID,
					GIVEOUT_DOCDATE = :param_GiveOut_DocDate,
					DOC_SERVICE_AV_ID = :param_Doc_Service_AV_ID
				
				WHERE
				ID = :param_Doc_Service_RE_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
		
			$query->param(':param_God', $God);
			$query->param(':param_DocDate', $DocDate);
			$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Employee_ID', $Employee_ID);
				$query->param(':param_Article_ID', $Article_ID);
				$query->param(':param_Object_ID', $Object_ID);
				$query->param(':param_Degree_Of_Imperfection', $Degree_Of_Imperfection);
			$query->param(':param_Repair_Stage', $Repair_Stage);
			$query->param(':param_GiveOut_EmployeeID', $GiveOut_EmployeeID);
				$query->param(':param_GiveOut_DocDate', $GiveOut_DocDate);
				$query->param(':param_Doc_Service_AV_ID', $Doc_Service_AV_ID);
				$query->param(':param_Doc_Service_RE_ID', $Doc_Service_RE_ID);
	
				$result = $query->execute($this->_db);
		
			return true;
	}
	else { return false; }
	}
	
// Функция добавления записи в таблицу "Doc_Service_RE"

// "DocDate"		date		- Дата документа
// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
// "Degree_Of_Imperfection"	varchar(200) - Характер неисправности
// "Repair_Stage"			smallint(6)	 - Стадии ремонта. Принят в ремонт (0), в ремонте (1), ремонт завершен(2), аппарат выдан(3)
// "GiveOut_EmployeeID"		smallint(6)	 - Ссылка на ответственного, оформившего выдачу аппарата
// "GiveOut_DocDate"			date	 - Дата выдачи аппарата
// "Doc_Service_AV_ID"		int(11)		 - Ссылка на акт ввода в эксплуатацию

	function InsDoc_Service_RE(
	 $DocDate
	,$Employee_ID
	,$Degree_Of_Imperfection
	,$Repair_Stage
	,$GiveOut_EmployeeID
	,$GiveOut_DocDate
	,$Doc_Service_AV_ID
	)
	{

    	$Degree_Of_Imperfection = trim($Degree_Of_Imperfection);

  		if (intval($Employee_ID)
		 && intval($Repair_Stage)
		 && intval($GiveOut_EmployeeID)
		 && intval($Doc_Service_AV_ID))
		{
			return RunSQL("INSERT INTO Doc_Service_RE(
                             DOCDATE
                            ,EMPLOYEE_ID
                            ,DEGREE_OF_IMPERFECTION
                            ,REPAIR_STAGE
                            ,GIVEOUT_EMPLOYEEID
                            ,GIVEOUT_DOCDATE
                            ,DOC_SERVICE_AV_ID
                            ) VALUES (
                             '$DocDate'
	                        ,$Employee_ID
	                        ,$Degree_Of_Imperfection
							,$Repair_Stage
							,$GiveOut_EmployeeID
							,'$GiveOut_DocDate'
							,$Doc_Service_AV_ID
  							 )");
  		}
  		else {return false; }
	}

}