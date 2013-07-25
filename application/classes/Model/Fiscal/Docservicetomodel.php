<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docservicetomodel extends Model_Fiscal_Basemodel
{

	// Функция добавления записи в таблицу "Doc_Service_TO"
	
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "NextServicingDate"	date 	- Дата следующего планового ТО
	// "Doc_Servise_AS_ID"	int(11) - Ссылка на акт снятия
	
	function InsDoc_Service_TO(
			$God
			,$DocDate
			,$DocNumber
			,$Employee_ID
			,$Article_ID
			,$Object_ID
			,$NextServicingDate
			,$Doc_Servise_AV_ID
	)
	{
	$DD = explode(".",$DocDate);
			$NSD = explode(".",$NextServicingDate);
	
			if (checkdate($NSD[0],$NSD[1],$NSD[2])
			&& checkdate($DD[0],$DD[1],$DD[2])
			&& intval($God)
			&& intval($DocNumber)
			&& intval($Employee_ID)
			&& intval($Article_ID)
			&& intval($Object_ID)
			&& intval($Doc_Servise_AV_ID))
			{
				
			$sql = "INSERT INTO Doc_Service_TO(
					GOD
					,DOCDATE
					,DOCNUMBER
					,OBJECT_ID
					,EMPLOYEE_ID
					,ARTICLE_ID
					,NEXTSERVICINGDATE
					,DOC_SERVISE_AV_ID
			) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Object_ID,
					:param_Employee_ID,
					:param_Article_ID,
					:param_NextServicingDate,
					:param_Doc_Servise_AV_ID
			
					)";
		
			$query = DB::query(Database::INSERT, $sql);
					
				$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
				$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Object_ID', $Object_ID);
			$query->param(':param_Employee_ID', $Employee_ID);
			$query->param(':param_Article_ID', $Article_ID);
			$query->param(':param_NextServicingDate', $NextServicingDate);
			$query->param(':param_Doc_Servise_AV_ID', $Doc_Servise_AV_ID);
	
			$result = $query->execute($this->_db);
	
				return true;
	}
	else {return false; }
	}
	
	// Функция изменения записи в таблице "Doc_Service_TO" по ключу "Doc_Service_TOID"
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "NextServicingDate"	date 	- Дата следующего планового ТО
	// "Doc_Servise_AS_ID"	int(11) - Ссылка на акт снятия
	
	function UpdDoc_Service_TO(
	$Doc_Servise_TO_ID
	,$God
	,$DocDate
	,$DocNumber
	,$Employee_ID
	,$Article_ID
	,$Object_ID
	,$NextServicingDate
	,$Doc_Servise_AV_ID
	)
				{
					$DD = explode(".",$DocDate);
					$NSD = explode(".",$NextServicingDate);
	
					if (checkdate($NSD[0],$NSD[1],$NSD[2])
				 && checkdate($DD[0],$DD[1],$DD[2])
				 && intval($God)
				 && intval($DocNumber)
				 && intval($Employee_ID)
				 && intval($Doc_Servise_TO_ID)
				 && intval($Article_ID)
				 && intval($Object_ID)
				 && intval($Doc_Servise_AV_ID))
					{
						
					$sql = "UPDATE Doc_Service_TO SET
					GOD = :param_God,
					DOCDATE = :param_DocDate,
					DOCNUMBER = :param_DocNumber,
					EMPLOYEE_ID = :param_Employee_ID,
					ARTICLE_ID = :param_Article_ID,
					OBJECT_ID = :param_Object_ID,
					NEXTSERVICINGDATE = :param_NextServicingDate,
					DOC_SERVISE_AV_ID = :param_Doc_Servise_AV_ID
				WHERE
				ID = :param_Doc_Servise_TO_ID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
	$query->param(':param_DocNumber', $DocNumber);
	$query->param(':param_Employee_ID', $Employee_ID);
	$query->param(':param_Article_ID', $Article_ID);
	$query->param(':param_Object_ID', $Object_ID);
	$query->param(':param_NextServicingDate', $NextServicingDate);
			$query->param(':param_Doc_Servise_AV_ID', $Doc_Servise_AV_ID);
			$query->param(':param_Doc_Servise_TO_ID', $Doc_Servise_TO_ID);
		
			$result = $query->execute($this->_db);
					
			return true;
	
		}
		else { return false; }
					}
	
// Функция добавления записи в таблицу "Doc_Service_TO"

// "DocDate"		date		- Дата документа
// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
// "Doc_Servise_TO_ID"	int(11) - Ссылка на акт снятия

	function InsDoc_Service_TO(
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
			return RunSQL("INSERT INTO Doc_Service_TO(
                             DOCDATE
                            ,EMPLOYEE_ID
                            ,DOC_SERVICE_AV_ID
  							) VALUES (
                            $God
	                         '$DocDate'
	                        ,$Employee_ID
	                    	,$Doc_Service_AV_ID
  							 )");
  		}
  		else {return false; }
	}
	
	function DelDoc_Service_TO($Doc_Service_TO_ID)
	{
		if (intval($Doc_Service_TO_ID))
			return RunSQL("DELETE FROM Doc_Service_TO WHERE (ID = $Doc_Service_TO_ID)");
		else
			return false;
	}
		
	function UpdDoc_Service_TO(
		 $Doc_Service_TO_ID
			,$DocDate
			,$Employee_ID
			,$Doc_Service_AV_ID
	)
	{
		$Run = true;
		if (!intval($Employee_ID))				{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
		if (!intval($Doc_Service_AV_ID))		{ $Run = false; echo "<br>Error! Doc_Service_AV_ID:$Doc_Service_AV_ID";};
	
		if ($Run)
		{
			return RunSQL("UPDATE Doc_Service_TO SET
					DOCDATE  	 = '$DocDate'
					,EMPLOYEE_ID = $Employee_ID
					,DOC_SERVICE_AV_ID = $Doc_Service_AV_ID
					WHERE (ID = $Doc_Service_TO_ID)");
	
		}
		else { return false; }
	}

}