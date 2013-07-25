<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docstampstoremodel extends Model_Fiscal_Basemodel
{
	
	



	// Функция добавления записи в таблицу "Doc_Stamp_Store"
	// "God"		 int(11)  - год оформления документа
	// "DocDate"	 Date     - дата оформления документа
	// "DocNumber"	 int(11)  - номер документа
	// "Doc_Type"	 Smallint - тип документа: "1" - приход, "-1" - уход
	// "Employee_ID" int(11)  - ссылка на работника, оформившего документ
	
	function InsDoc_Stamp_Store($God, $DocDate ,$DocNumber ,$Doc_Type ,$Employee_ID)
	{
	$DD = explode(".",$DocDate);
	
	if ((checkdate($DD[0],$DD[1],$DD[2]))
	&& intval($God)
	&& intval($DocNumber)
	&& intval($Doc_Type)
	&& intval($Employee_ID))
	{
		
		
	$sql = "INSERT INTO Doc_Stamp_Store(
			GOD
					,DOCDATE
					,DOCNUMBER
					,DOC_TYPE
					,EMPLOYEE_ID
			) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Doc_Type,
					:param_Employee_ID
					)";
	
			$query = DB::query(Database::INSERT, $sql);
	
				$query->param(':param_God', $God);
	$query->param(':param_DocDate', $DocDate);
	$query->param(':param_DocNumber', $DocNumber);
	$query->param(':param_Object_ID', $Doc_Type);
	$query->param(':param_Employee_ID', $Employee_ID);
		
	$result = $query->execute($this->_db);
		
	return true;
	}
	else {	return false; }
	}
	
	// Функция изменения записи в таблице "Doc_Stamp_Store" по ключу "Doc_Stamp_StoreID"
	
	// "God"		 int(11)  - год оформления документа
	// "DocDate"	 Date     - дата оформления документа
	// "DocNumber"	 int(11)  - номер документа
	// "Doc_Type"	 Smallint - тип документа: "1" - приход, "-1" - уход
	// "Employee_ID" int(11)  - ссылка на работника, оформившего документ
	
	
	function UpdDoc_Stamp_Store($Doc_Stamp_Store_ID, $God, $DocDate ,$DocNumber ,$Doc_Type ,$Employee_ID)
	{
	
	$DD = explode(".",$DocDate);
	
	if ((checkdate($DD[0],$DD[1],$DD[2]))
	&& intval($God)
	&& intval($DocNumber)
		&& intval($Doc_Stamp_Store_ID)
		&& intval($Doc_Type)
		&& intval($Employee_ID))
		{
			
		$sql = "UPDATE Doc_Stamp_Store SET
		GOD = :param_God,
		DOCDATE = :param_DocDate,
		DOCNUMBER = :param_DocNumber,
					DOC_TYPE = :param_Doc_Type,
					EMPLOYEE_ID = :param_Employee_ID
	
				WHERE
				ID = :param_Doc_Stamp_Store_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
		
			$query->param(':param_God', $God);
			$query->param(':param_DocDate', $DocDate);
				$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Doc_Type', $Doc_Type);
						$query->param(':param_Employee_ID', $Employee_ID);
						$query->param(':param_Doc_Stamp_Store_ID', $Doc_Stamp_Store_ID);
	
						$result = $query->execute($this->_db);
	
						return true;
		}
		else { return false; }
	}
	
	


// Функция добавления записи в таблицу "Doc_Stamp_Store"
// "DocDate"	 Date     - дата оформления документа
// "Doc_Type"	 Smallint - тип документа: "1" - приход, "-1" - уход
// "Employee_ID" int(11)  - ссылка на работника, оформившего документ


	function InsDocToStampStore($DocDate, $Doc_Type ,$Employee_ID)
	{
		$Run = true;
		if (!intval($Employee_ID))	{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
		if (!intval($Doc_Type))	{ $Run = false; echo "<br>Error! Doc_Type:$Doc_Type";};
	
		if ($Run)
		{
			return RunSQL("INSERT INTO Doc_Stamp_Store(
					DOCDATE
					,DOC_TYPE
					,EMPLOYEE_ID
			) VALUES (
					'$DocDate'
					,$Doc_Type
					,$Employee_ID
			)");			
		}
		else { echo "<br>Error! InsDocToStampStore<br>"; return false;}
	}
	
	function DelDoc_Stamp_Store($Doc_Stamp_Store_ID)
	{
		if (intval($Doc_Stamp_Store_ID))
			return RunSQL("DELETE FROM Doc_Stamp_Store WHERE (ID = $Doc_Stamp_Store_ID)");
		else
			return false;
	}
	
	function UpdDoc_Stamp_Store($Doc_Stamp_Store_ID, $DocDate ,$Employee_ID)
	{
		if (
		intval($Doc_Stamp_Store_ID)
		&& intval($Employee_ID))
		{
			return RunSQL("UPDATE Doc_Stamp_Store SET
					DOCDATE 	= '$DocDate'
					,EMPLOYEE_ID = $Employee_ID
					WHERE (ID = $Doc_Stamp_Store_ID)");
		}
		else { echo "Error!"; return false; }
	}
	
	function ComingStampToStore($DocDate,$Employee_ID,$SeriesT,$NumberT, $PriceT)
	{		
		$Series[] = "AS";
		$Series[] = "AS";
		$Series[] = "AS";
		
		$Number[] = "1";
		$Number[] = "2";
		$Number[] = "3";
		
		$Price[] = "1";
		$Price[] = "2";
		$Price[] = "3";
		
		
		if (InsDocToStampStore($DocDate, 1, $Employee_ID))
		{
			$RResult = RunSQL("select ifnull(max(ID),0) as MaxID
							from Doc_Stamp_Store
							where (DocDate = '".$DocDate."') 
							and (Employee_ID = ".$Employee_ID.")
							and (DOC_TYPE = 1)");
				
			$row = mysql_fetch_array($RResult);
			$DocIn_Stamp_Store_ID = $row["MaxID"];

			if ($DocIn_Stamp_Store_ID > 0)
			{
				include_once("Stamp.php");
				echo "<br> Insert begin...<br> ";
				for ($i = 0; $i <= count($Series)-1; $i++)
				{
					 if (InsStamp($DocIn_Stamp_Store_ID,0, $Series[$i], $Number[$i], $Price[$i], 1))
						echo "<br> Succes: Пломба успешно прибыла на склад. <br> ";
				}
			}
			else
			{
				echo "<br> Error: Неудалось найти документ прихода пломбы на склад <br> ";
			}
		}
	};
	
	function LeaveStampFromStore($DocDate,$Employee_ID,$Stamp_ID)
	{
		if (InsDocToStampStore($DocDate, -1, $Employee_ID))
		{
			$RResult = RunSQL("select ifnull(max(ID),0) as MaxID
							from Doc_Stamp_Store
							where (DocDate = '".$DocDate."') 
							and (Employee_ID = ".$Employee_ID.")
							and (DOC_TYPE = -1)");
				
			$row = mysql_fetch_array($RResult);
			$DocOut_Stamp_Store_ID = $row["MaxID"];

			if ($DocOut_Stamp_Store_ID > 0)
			{
				include_once("Stamp.php");
				SetOutStampFromStore($Stamp_ID, $DocOut_Stamp_Store_ID);
			}
			else
			{
				echo "<br> Error: Неудалось найти документ прихода пломбы на склад <br> ";
			}
			return $DocOut_Stamp_Store_ID;
		}
		else 
			return false;
	};
	
						/**
						$Series[] = "AM";
						 $Series[] = "AM";
						 $Series[] = "AM";
	
						 $Number[] = "1";
						 $Number[] = "2";
						 $Number[] = "3";
	
						 $Price[] = "1";
						 $Price[] = "2";
						 $Price[] = "3";
	
						 $DocDate = "2012.01.01";
						 $Emp_ID = 1;
	
						 /**/
						 //	AddStamp($DocDate,$Emp_ID,$Series,$Number, $Price);
	
	
	// Движение окументов на складе пломб
	
	function MoveStampToStore($DocDate,$Employee_ID,$Series,$Number, $Price)
	{
		$Doc_Stamp_Store_ID = ComingStampToStore($DocDate, $Employee_ID);
	
		if ($Doc_Stamp_Store_ID > 0)
		{
			echo "<br> Insert begin...<br> ";
			for ($i = 0; $i <= count($Series)-1; $i++)
			{
			if (InsStamp($Doc_Stamp_Store_ID, $Series[$i], $Number[$i], $Price[$i]))
				echo "<br> Succes: Пломба успешно прибыла на склад. <br> ";
  			}
			}
			else
			{
			echo "<br> Error: Неудалось найти документ прихода пломбы на склад <br> ";
		}
	};
	
	
		function MoveStampFromStore($DocDate,$Employee_ID,$Series,$Number, $Price)
		{
		$Doc_Stamp_Store_ID = LeaveStampFromStore($DocDate, $Employee_ID);
	
		if ($Doc_Stamp_Store_ID > 0)
		{
		echo "<br> Insert begin...<br> ";
			if (UpdStamp($Stamp_ID, $Doc_Stamp_Store_ID, $Series[$i], $Number[$i], $Price[$i]))
				{
					echo "<br> Succes: Пломба успешно прибыла на склад. <br> ";
			}
			else
							echo "<br> Error: Неудалось найти документ прихода пломбы на склад <br> ";
		}
	};
	
}