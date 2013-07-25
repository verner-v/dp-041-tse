<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docserviceasmodel extends Model_Fiscal_Basemodel
{
	
	// Функция добавления записи в таблицу "Doc_Service_AS"
	
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "Doc_Servise_AV_ID" int(11)- Ссылка на акт ввода в эксплуатацию
	
	function InsDoc_Service_AS(
			$God
			,$DocDate
			,$DocNumber
			,$Employee_ID
			,$Article_ID
			,$Object_ID
			,$Doc_Servise_AV_ID
	)
	{
	$DD = explode(".",$DocDate);
			if ((checkdate($DD[0],$DD[1],$DD[2]))
			&& intval($God)
			&& intval($DocNumber)
			&& intval($Employee_ID)
			&& intval($Article_ID)
			&& intval($Object_ID)
			&& intval($Doc_Servise_AV_ID))
			{
				
			$sql = "INSERT INTO Doc_Service_AS(
					GOD
					,DOCDATE
					,DOCNUMBER
					,EMPLOYEE_ID
					,ARTICLE_ID
					,OBJECT_ID
					,DOC_SERVISE_AV_ID
			) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Employee_ID,
					:param_Article_ID,
					:param_Object_ID,
					:param_Doc_Servise_AV_ID
					)";
		
			$query = DB::query(Database::INSERT, $sql);
					
				$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
			$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Employee_ID', $Employee_ID);
			$query->param(':param_Article_ID', $Article_ID);
			$query->param(':param_Object_ID', $Object_ID);
			$query->param(':param_Consignment_RecordsID', $Doc_Servise_AV_ID);
							
				$result = $query->execute($this->_db);
					
					
				return true;
	}
	else { return false; }
	}
	
	
	// Функция изменения записи в таблице "Doc_Service_AS" по ключу "Doc_Service_ASID"
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "Doc_Servise_AV_ID" int(11)- Ссылка на акт ввода в эксплуатацию
	
	function UpdDoc_Service_AS(
	$Doc_Servise_AS_ID
	,$God
	,$DocDate
	,$DocNumber
	,$Employee_ID
	,$Article_ID
	,$Object_ID
	,$Doc_Servise_AV_ID
	)
				{
				$DD = explode(".",$DocDate);
				if ((checkdate($DD[0],$DD[1],$DD[2]))
				&& intval($God)
				&& intval($DocNumber)
				&& intval($Doc_Servise_AS_ID)
				&& intval($Employee_ID)
				&& intval($Article_ID)
				&& intval($Object_ID)
				&& intval($Doc_Servise_AS_ID))
				{
					
				$sql = "UPDATE Doc_Service_AS SET
				GOD = :param_God,
					DOCDATE = :param_DocDate,
					DOCNUMBER = :param_DocNumber,
					EMPLOYEE_ID = :param_Employee_ID,
					ARTICLE_ID = :param_Article_ID,
					OBJECT_ID = :param_Object_ID,
					DOC_SERVISE_AV_ID = :param_Doc_Servise_AV_ID
			
				WHERE
				ID = :param_Doc_Servise_AS_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
		
			$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
				$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Employee_ID', $Employee_ID);
				$query->param(':param_Article_ID', $Article_ID);
				$query->param(':param_Object_ID', $Object_ID);
						$query->param(':param_Doc_Servise_AV_ID', $Doc_Servise_AV_ID);
						$query->param(':param_Doc_Servise_AS_ID', $Doc_Servise_AS_ID);
						
					$result = $query->execute($this->_db);
						
					return true;
				}
				else { return false; }
				}

// Функция добавления записи в таблицу "Doc_Service_AS"

// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
// "DocDate"		date		- Дата документа
// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
// "Object_ID"		int(11)		- Ссылка на обьект
// "Doc_Servise_AV_ID" int(11)- Ссылка на акт ввода в эксплуатацию

	function InsDoc_Service_AS(
	 $DocDate
	,$Employee_ID
	,$Doc_Service_AV_ID
	)
	{
		$Run = true;
		if (!intval($Employee_ID))				{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
	    if (!intval($Doc_Service_AV_ID))		{ $Run = false; echo "<br>Error! Doc_Service_AV_ID:$Doc_Service_AV_ID";};

		if ($Run)
		{
			return RunSQL("INSERT INTO Doc_Service_AS(
                             DOCDATE
                            ,EMPLOYEE_ID
                            ,Doc_Service_AV_ID
  							) VALUES (
                            '$DocDate'
	                        ,$Employee_ID
	                        ,$Doc_Service_AV_ID
  							 )");
  		}
  		else {
  		echo "Error!";

  		return false; }
	}

	
	function DelDoc_Service_AS($Doc_Service_AS_ID)
	{
		if (intval($Doc_Service_AS_ID))
			return RunSQL("DELETE FROM Doc_Service_AS WHERE (ID = $Doc_Service_AS_ID)");
		else
			return false;
	}
	
	
	function UpdDoc_Service_AS(
		 $Doc_Service_AS_ID
			,$DocDate
			,$Employee_ID
			,$Doc_Service_AV_ID
	)
	{
		$Run = true;
		if (!intval($Employee_ID))				{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
		if (!intval($Doc_Service_AV_ID))		{ $Run = false; echo "<br>Error! Doc_Service_AV_ID:$Doc_Service_AV_ID";};
		if (!intval($Doc_Service_AS_ID))		{ $Run = false; echo "<br>Error! Doc_Service_AS_ID:$Doc_Service_AS_ID";};
	
		if ($Run)
		{
			return RunSQL("UPDATE Doc_Service_AS SET
					DOCDATE  	 = '$DocDate'
					,EMPLOYEE_ID = $Employee_ID
					,DOC_SERVICE_AV_ID = $Doc_Service_AV_ID
					WHERE (ID = $Doc_Service_AS_ID)");
		}
		else {
			echo "Error!";
			echo "UPDATE Doc_Service_AS SET
			DOCDATE  	 = '$DocDate'
			,EMPLOYEE_ID = $Employee_ID
			,DOC_SERVICE_AV_ID = $Doc_Service_AV_ID
			WHERE (ID = $Doc_Service_AS_ID)";
					return false;
		}
		}
		
}