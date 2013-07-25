<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docserviceavmodel extends Model_Fiscal_Basemodel
{
	
	// Функция добавления записи в таблицу "Doc_Service_AV"
	
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "Doc_Article_Store_ID" int(11) - Ссылка на отпусную накладную склада
	// "Doc_Servise_AS_ID"	  int(11) - Ссылка на акт снятия
	
	function InsDoc_Service_AV(
			$God
			,$DocDate
			,$DocNumber
			,$Employee_ID
			,$Article_ID
			,$Object_ID
			,$Doc_Article_Store_ID
			,$Doc_Servise_AS_ID
	)
	{
	$DD = explode(".",$DocDate);
			if ((checkdate($DD[0],$DD[1],$DD[2]))
			&& intval($God)
			&& intval($DocNumber)
			&& intval($Employee_ID)
			&& intval($Article_ID)
			&& intval($Object_ID)
			&& intval($Doc_Article_Store_ID)
			&& intval($Doc_Servise_AS_ID))
			{
				
			$sql = "INSERT INTO Doc_Service_AV(
					GOD
					,DOCDATE
					,DOCNUMBER
					,EMPLOYEE_ID
					,ARTICLE_ID
					,OBJECT_ID
					,DOC_ARTICLE_STORE_ID
					,DOC_SERVISE_AS_ID
			) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Employee_ID,
					:param_Article_ID,
					:param_Object_ID,
					:param_Doc_Article_Store_ID,
					:param_Doc_Servise_AS_ID
					)";
		
			$query = DB::query(Database::INSERT, $sql);
					
				$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
			$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Employee_ID', $Employee_ID);
			$query->param(':param_Article_ID', $Article_ID);
			$query->param(':param_Object_ID', $Object_ID);
			$query->param(':param_Doc_Article_Store_ID', $Doc_Article_Store_ID);
						$query->param(':param_Doc_Servise_AS_ID', $Doc_Servise_AS_ID);
	
								$result = $query->execute($this->_db);
									
								return true;
	}
	else {	return false; }
	}
	
	
	// Функция изменения записи в таблице "Doc_Service_AV" по ключу "Doc_Service_AVID"
	// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// "DocDate"		date		- Дата документа
	// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
	// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
	// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
	// "Object_ID"		int(11)		- Ссылка на обьект
	// "Doc_Article_Store_ID" int(11) - Ссылка на отпусную накладную склада
	// "Doc_Servise_AS_ID"	  int(11) - Ссылка на акт снятия
	
	function UpdDoc_Service_AV(
	$Doc_Servise_AS_ID
	,$God
	,$DocDate
	,$DocNumber
	,$Employee_ID
	,$Article_ID
	,$Object_ID
	,$Doc_Article_Store_ID
	,$Doc_Servise_AS_ID
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
								&& intval($Doc_Article_Store_ID)
								&& intval($Doc_Servise_AS_ID))
						{
							
						$sql = "UPDATE Doc_Service_AV SET
					GOD = :param_God,
					DOCDATE = :param_DocDate,
					DOCNUMBER = :param_DocNumber,
					EMPLOYEE_ID = :param_Employee_ID,
					ARTICLE_ID = :param_Article_ID,
					OBJECT_ID = :param_Object_ID,
					DOC_ARTICLE_STORE_ID = :param_Doc_Article_Store_ID,
					DOC_SERVISE_AS_ID = :param_Doc_Servise_AS_ID
		
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
				$query->param(':param_Doc_Article_Store_ID', $Doc_Article_Store_ID);
			$query->param(':param_Doc_Servise_AS_ID', $Doc_Servise_AS_ID);
	
			$result = $query->execute($this->_db);
					
	return true;
						}
						else { return false; }
						}
	

// Функция добавления записи в таблицу "Doc_Service_AV"

// "God"			smallint(6)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
// "DocDate"		date		- Дата документа
// "DocNumber"		smallint(6)	- Номер документа. Полный номер документа формируется: префикс-номер. Номер указывается без значащих нулей
// "Employee_ID"	smallint(6) - Ссылка на ответственного, оформившего документ
// "Article_ID"		int(11)		- Ссылка на артикль оборудования/фискального регистратора
// "Object_ID"		int(11)		- Ссылка на обьект
// "Doc_Article_Store_ID" int(11) - Ссылка на отпусную накладную склада
// "Doc_Servise_AS_ID"	  int(11) - Ссылка на акт снятия

	function InsDoc_Service_AV(
	 $DocDate
	,$Employee_ID
	,$Article_ID
	,$Object_ID
	,$Doc_Article_Store_ID
	)
	{
		$Run = true;
	    if (!intval($Employee_ID))				{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
	    if (!intval($Article_ID))				{ $Run = false; echo "<br>Error! Article_ID:$Article_ID";};
	    if (!intval($Object_ID))				{ $Run = false; echo "<br>Error! Object_ID:$Object_ID";};
	    if (!intval($Doc_Article_Store_ID))		{ $Run = false; echo "<br>Error! Doc_Article_Store_ID:$Doc_Article_Store_ID";};

		if ($Run)
		{
			return RunSQL("INSERT INTO Doc_Service_AV(
                             DOCDATE
                            ,EMPLOYEE_ID
                            ,ARTICLE_ID
                            ,OBJECT_ID
                            ,DOC_ARTICLE_STORE_ID
							) VALUES (
                            '$DocDate'
	                        ,$Employee_ID
	                        ,$Article_ID
	                        ,$Object_ID
	                        ,$Doc_Article_Store_ID
							 )");
  		}
  		else {
  			echo "Error!: InsDoc_Service_AV";

  		return false; }
	}
	
	function UpdDoc_Service_AV(
		 $Doc_Servise_AV_ID
			,$DocDate
			,$Employee_ID
			,$Article_ID
			,$Object_ID
			,$Doc_Article_Store_ID
	)
	{
		$Run = true;
		$DD = explode(".",$DocDate);
		if (!checkdate($DD[2],$DD[1],$DD[0])) 	{ $Run = false; echo "<br>Error! DocDate: $DocDate";};
		if (!intval($Employee_ID))				{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
		if (!intval($Article_ID))				{ $Run = false; echo "<br>Error! Article_ID:$Article_ID";};
		if (!intval($Object_ID))				{ $Run = false; echo "<br>Error! Object_ID:$Object_ID";};
		if (!intval($Doc_Article_Store_ID))		{ $Run = false; echo "<br>Error! Doc_Article_Store_ID:$Doc_Article_Store_ID";};
		if (!intval($Doc_Servise_AV_ID))		{ $Run = false; echo "<br>Error! Doc_Servise_AV_ID:$Doc_Servise_AV_ID";};
	
		if ($Run)
	
		{
			return RunSQL("UPDATE Doc_Service_AV SET
					DOCDATE  	 = '$DocDate'
					,EMPLOYEE_ID = $Employee_ID
					,ARTICLE_ID	 = $Article_ID
					,OBJECT_ID	 = $Object_ID
					,DOC_ARTICLE_STORE_ID = $Doc_Article_Store_ID
					WHERE (ID = $Doc_Servise_AV_ID)");
		}
		else { return false; }
	}
	
	function DelDoc_Service_AV($Doc_Servise_AV_ID)
	{
		$Run = true;
	    if (!intval($Doc_Servise_AV_ID))				{ $Run = false; echo "<br>Error! Doc_Servise_AV_ID:$Doc_Servise_AV_ID";};
	    
		if ($Run)
			return RunSQL("DELETE FROM Doc_Service_AV WHERE (ID = $Doc_Servise_AV_ID)");
		else
		{	echo "Error!: DelDoc_Service_AV";
			return false;
		}
	}

	function GetAllDoc_Service_AV()
	{
		$result = RunSQL("SELECT
							 ID
							,DOCDATE
							,DOCNUMBER
							,EMPLOYEE_ID
							,ARTICLE_ID
							,OBJECT_ID
							,DOC_ARTICLE_STORE_ID
							,DOC_SERVISE_AS_ID
							from Doc_Service_AV
							group by DOCDATE");
		return $result;
	}
	
}