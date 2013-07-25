<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docarticlestoremodel extends Model_Fiscal_Basemodel
{

	// Функция добавления записи в таблицу "Doc_Article_Store"
	// God			int(11)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// DocDate		int(11) - Дата документа
	// DocNumber	int(11)	- Номер документа
	// Doc_Type		int(11) - Указывает на тип документа: "1" - приход, "-1" - расход.
	// Price		decimal(5,2) -	Цена 1 единицы товара/оборудования.
	// Consignment_RecordsID	int(11) - Ссылка на приходной документ. Может указывать сам на себя
	// Employee_ID	int(11)	- Ссылка на ответственного сотрудника
	// Article_ID	int(11) - Ссылка на оборудование
	
	function InsDoc_Article_Store(
			$God
			,$DocDate
			,$DocNumber
			,$Doc_Type
			,$Price
			,$Consignment_RecordsID
			,$Employee_ID
			,$Article_ID
	)
	{
	
	
		
		
	$sql = "INSERT INTO doc_article_store(
					GOD
					,DOCDATE
					,DOCNUMBER
					,DOC_TYPE
					,PRICE
					,CONSIGNMENT_RECORDSID
					,EMPLOYEE_ID
					,ARTICLE_ID
			) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Doc_Type,
					:param_Price,
					:param_Consignment_RecordsID,
					:param_Employee_ID,
					:param_Article_ID
					)";
	
			$query = DB::query(Database::INSERT, $sql);
	
				$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
				$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Doc_Type', $Doc_Type);
			$query->param(':param_Price', $Price);
				$query->param(':param_Consignment_RecordsID', $Consignment_RecordsID);
						$query->param(':param_Employee_ID', $Employee_ID);
			$query->param(':param_Article_ID', $Article_ID);
		
			$result = $query->execute($this->_db);
					
				return true;
	
	}
	
	
	
	// Функция изменения записи в таблице "Doc_Article_Store" по ключу "Doc_Article_StoreID"
	// God			int(11)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
	// DocDate		int(11) - Дата документа
	// DocNumber	int(11)	- Номер документа
	// Doc_Type		int(11) - Указывает на тип документа: "1" - приход, "-1" - расход.
	// Price		decimal(5,2) -	Цена 1 единицы товара/оборудования.
	// Consignment_RecordsID	int(11) - Ссылка на приходной документ. Может указывать сам на себя
	// Employee_ID	int(11)	- Ссылка на ответственного сотрудника
	// Article_ID	int(11) - Ссылка на оборудование
	
	function UpdDoc_Article_Store(
	$Doc_Article_Store_ID
	,$God
	,$DocDate
	,$DocNumber
	,$Doc_Type
	,$Price
	,$Consignment_RecordsID
	,$Employee_ID
	,$Article_ID
	)
				{
				$FDate = explode(".",$DocDate);
	
				if ((checkdate($FDate[0],$FDate[1],$FDate[2]))
				&& intval($God)
				&& intval($DocNumber)
				&& intval($Doc_Type)
				&& intval($Doc_Article_Store_ID)
				&& intval($Price)
				&& intval($Consignment_RecordsID)
				&& intval($Employee_ID)
				&& intval($Article_ID))
				{
						
						
					$sql = "UPDATE Doc_Article_Store SET
					GOD = :param_God,
					DOCDATE = :param_DocDate,
					DOCNUMBER = :param_DocNumber,
					DOC_TYPE = :param_Doc_Type,
					PRICE = :param_Price,
					CONSIGNMENT_RECORDSID = :param_Consignment_RecordsID,
					EMPLOYEE_ID = :param_Employee_ID,
					ARTICLE_ID = :param_Article_ID
				WHERE
				ID = :param_Doc_Article_Store_ID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
	$query->param(':param_DocNumber', $DocNumber);
	$query->param(':param_Doc_Type', $Doc_Type);
	$query->param(':param_Price', $Price);
	$query->param(':param_Consignment_RecordsID', $Consignment_RecordsID);
			$query->param(':param_Employee_ID', $Employee_ID);
			$query->param(':param_Article_ID', $Article_ID);
				$query->param(':param_Doc_Article_Store_ID', $Doc_Article_Store_ID);
	
						$result = $query->execute($this->_db);
		
			return true;
	
				}
	
								else { return false; }
				}
	
// Функция добавления записи в таблицу "Doc_Article_Store"
// God			int(11)	- Номер периода/года документа. Используется для контроля уникальности нумерации документов
// DocDate		int(11) - Дата документа
// DocNumber	int(11)	- Номер документа
// Doc_Type		int(11) - Указывает на тип документа: "1" - приход, "-1" - расход.
// Price		decimal(5,2) -	Цена 1 единицы товара/оборудования.
// Consignment_RecordsID	int(11) - Ссылка на приходной документ. Может указывать сам на себя
// Employee_ID	int(11)	- Ссылка на ответственного сотрудника
// Article_ID	int(11) - Ссылка на оборудование


	// добавление новой записи в таблицу склада оборудования
	function InsDoc_Article_Store(
	  $DocDate
	 ,$Doc_Type
	 ,$Employee_ID
	 ,$Article_ID
	)
	{
		/**/
 		$Run = true;
	    if (!intval($Doc_Type))		{ $Run = false; echo "<br>Error! Doc_Type:$Doc_Type";};
	    if (!intval($Employee_ID))	{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
	    if (!intval($Article_ID))	{ $Run = false; echo "<br>Error! Article_ID:$Article_ID";};

		if ($Run)
		{
			return RunSQL("INSERT INTO Doc_Article_Store(
   							DOCDATE
   							,DOC_TYPE
   							,EMPLOYEE_ID
   							,ARTICLE_ID
  							) VALUES (
                             '$DocDate'
	                        ,$Doc_Type
	                        ,$Employee_ID
	                        ,$Article_ID
  							 )");
  		}
  		else {
  		echo "Error! InsDoc_Article_Store";
  		return false; }
  		/**/
	}

	// удаление записи в таблице склада оборудования
	function DelDoc_Article_Store($Doc_Article_Store_ID)
	{
		if (intval($Doc_Article_Store_ID))
			return RunSQL("DELETE FROM Doc_Article_Store WHERE (ID = $Doc_Article_Store_ID)");
		else
			return false;
	}
	
	// изменение записи в таблице склада оборудования
	function UpdDoc_Article_Store(
			$Doc_Article_Store_ID
			,$DocDate
			,$Employee_ID
			,$Article_ID
	)
	{
		$Run = true;
		if (!intval($Doc_Article_Store_ID))				{ $Run = false; echo "<br>Error! Doc_Article_Store_ID:$Doc_Article_Store_ID";};
		if (!intval($Employee_ID))						{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
		if (!intval($Article_ID))						{ $Run = false; echo "<br>Error! Article_ID:$Article_ID";};
	
		if (($Run) && ( RunSQL("UPDATE Doc_Article_Store SET
				DOCDATE                 =     '$DocDate'
				,EMPLOYEE_ID             =     $Employee_ID
				,ARTICLE_ID              =     $Article_ID
				WHERE (ID = $Doc_Article_Store_ID)")))
		{
			return true;
		}
		else { echo "Eror!"; return false; }
	}
		
	// оформление накладной прихода оборудования на склад
	function ComingArticleToStore($DocDate,$Employee_ID,$Article_ID)
	{
		// проверка на наличие данного оборудования на складе
		$RResult = RunSQL("select ifnull(max(ID),0) as MaxID
							from Doc_Article_Store
							where (ARTICLE_ID = ".$Article_ID.
							") and (DOC_TYPE = 1)");
  		$row = mysql_fetch_array($RResult);
		// если оборудвания нет - добавляем
		if ($row["MaxID"] <= 0)
		{
			echo "<br> Insert begin...<br> ";
			if (InsDoc_Article_Store($DocDate,1,$Employee_ID,$Article_ID))
			echo "<br> Succes: Фискальный регистратор успешно прибыл на склад. <br> ";
		}
		else
		{			echo "<br> Error: Такой фискальный регистратор на складе уже есть !<br> ";		}
	}

	// оформление расходной накладной оборудования со склада
	function LeaveArticleFromStore($DocDate,$Employee_ID,$Article_ID	)
	{
		// проверяем наличие оборудавания на складе
		$RResult = RunSQL("select max(ID) as MaxID
							from Doc_Article_Store
							where (ARTICLE_ID = ".$Article_ID.
							") and (DOC_TYPE = -1)");

  		$row = mysql_fetch_array($RResult);
  		// если оборудвание есть - выносим
		if ($row["MaxID"] <= 0)
		{
			echo "<br> Insert begin...<br> ";
			if (InsDoc_Article_Store($DocDate,-1,$Employee_ID,$Article_ID))
			echo "<br> Succes: Фискальный регистратор успешно отправлен со склада. <br> ";
		}
		else
		{
			echo "<br> Error: Такого фискального регистратора на складе нет!<br> ";
		}
	}
			
	// выводим все оборудование на складе
	function GetAllArticleInStore()
	{
		$result = RunSQL("select
	 						 das.ID as DOC_ARTICLE_STORE_ID
	 						,das.DOCDATE
	 						,das.DOCNUMBER
	 						,das.DOC_TYPE
	 						,das.CONSIGNMENT_RECORDSID
	 						,das.EMPLOYEE_ID
	 						,das.ARTICLE_ID
	
	 						,a.ARTICLE_MODEL_ID
	 						,a.PRODUCTIONDATE
	 						,a.FISCALNUMBER
	 						,a.FACTORYNUMBER
	 						,a.ARTICLE_SOFTVERSION_ID
	 						,a.PROCREATOR_ID
	
	 						,am.NAME
 							,am.COMPONENTS
	
	 						from doc_article_store das inner join article a
	 						on (das.ARTICLE_ID = a.ID) inner join article_model am
	 						on (a.ARTICLE_MODEL_ID = am.ID)");
		return $result;
	}
	
	// переводим оборудование на объект
	function ComingArticleToObject($DocDate,$Employee_ID,$Article_ID,$Object_ID)
	{
		// выносим оборудование со склада
		LeaveArticleFromStore($DocDate,$Employee_ID,$Article_ID);

		// вычисляем идентификатор расходной накладной со склада
		$Result = RunSQL("select ifnull(max(ID),0) as MaxID
				from Doc_Article_Store
				where (DOC_TYPE = -1)
				and   (DOCDATE = '$DocDate')
				and   (ARTICLE_ID = $Article_ID)
				and   (EMPLOYEE_ID = $Employee_ID)");
	
		$Doc_Article_Store_ID = mysql_fetch_array($Result);
		echo $Doc_Article_Store_ID["MaxID"];
	
		// создаем акт ввода в эксплуатацию с указанием ссылки на расходную накладную
		include_once("Doc_Service_AV.php");
		InsDoc_Service_AV($DocDate,$Employee_ID,$Article_ID,$Object_ID,$Doc_Article_Store_ID["MaxID"]);
		/**/
	}
	
	// перевод оборудования с объекта на склад
	function LeaveArticleFromObject()
	{
	//	InsDoc_Service_AV($DocDate,$Employee_ID,$Article_ID,$Object_ID,$Doc_Article_Store_ID);
	// 	LeaveFrom_Article_Store($DocDate,$Price,$Employee_ID,$Article_ID);
	}
}