<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Clientcontractmodel extends Model_Fiscal_Basemodel
{	

	// Функция добавления записи в таблицу "ClientContract"
	// "Number" 			varchar(20)  - номер договора, уникален в пределах одного года
	// "Client_ID" 			int 	 - идентификатор контрагента
	// "FromDate" 			date 	 - дата заключения договора
	// "ToDate" 			date 	 - дата последнего дня действия договора
	// "Period_Servicing"  	smallint - период ТО
	
	function InsClientContract($Number, $Client_ID, $FromDate, $ToDate, $Period_Servicing)
	{
	$Number = trim($Number);
	$FDate = explode(".",$FromDate);
	$TDate = explode(".",$ToDate);
	
	if ((checkdate($FDate[0],$FDate[1],$FDate[2]))
	&&  (checkdate($TDate[0],$TDate[1],$TDate[2]))
	&&  (intval($Client_ID))
	&&  (intval($Period_Servicing)))
	{
		
	$sql = "INSERT INTO Client_Contract
	(NUMBER,
					CLIENT_ID,
					FROMDATE,
					TODATE,
					PERIOD_SERVICING
			) VALUES (
					:param_Number,
					:param_Client_ID,
					:param_FromDate,
					:param_ToDate,
					:param_Period_Servicing
					)";
		
			$query = DB::query(Database::INSERT, $sql);
					
				$query->param(':param_Number', $Number);
				$query->param(':param_Client_ID', $Client_ID);
				$query->param(':param_FromDate', $FromDate);
				$query->param(':param_ToDate', $ToDate);
				$query->param(':param_Period_Servicing', $Period_Servicing);
		
			$result = $query->execute($this->_db);
					
				return true;
	}
	else { return false; }
	}
	
	// Функция изменения записи в таблице "Client_Contract" по ключу "ClientContract_ID"
	// "Number" 			varchar(20)  - номер договора, уникален в пределах одного года
	// "Client_ID" 			int 	 - идентификатор контрагента
	// "FromDate" 			date 	 - дата заключения договора
	// "ToDate" 			date 	 - дата последнего дня действия договора
	// "Period_Servicing"  	smallint - период ТО
	
	function UpdClientContract($ClientContract_ID, $Number, $Client_ID, $FromDate, $ToDate, $Period_Servicing)
	{
	$umber = trim($Number);
	$FDate = explode(".",$FromDate);
	$TDate = explode(".",$ToDate);
	
	if ((checkdate($FDate[0],$FDate[1],$FDate[2]))
		&&  (checkdate($TDate[0],$TDate[1],$TDate[2]))
		&&  (intval($ClientContract_ID))
		&&  (intval($Client_ID))
		&&  (intval($Period_Servicing)))
		{
			
		$sql = "UPDATE Client_Contract SET
		NUMBER = :param_Number,
		CLIENT_ID = :param_Client_ID,
					FROMDATE = :param_FromDate,
					TODATE = :param_ToDate,
					PERIOD_SERVICING = :Period_Servicing
				WHERE
				ID = :param_ClientContract_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
		
			$query->param(':param_Number', $Number);
				$query->param(':param_Client_ID', $Client_ID);
				$query->param(':param_FromDate', $FromDate);
			$query->param(':param_ToDate', $ToDate);
				$query->param(':Period_Servicing', $Period_Servicing);
			$query->param(':param_ClientContract_ID', $ClientContract_ID);
					
				$result = $query->execute($this->_db);
		
			return true;
		}
		else { return false; }
		}
	
// Функция добавления записи в таблицу "ClientContract"
// "Number" 			varchar(20)  - номер договора, уникален в пределах одного года
// "Client_ID" 			int 	 - идентификатор контрагента
// "FromDate" 			date 	 - дата заключения договора
// "ToDate" 			date 	 - дата последнего дня действия договора
// "Period_Servicing"  	smallint - период ТО

	function InsClientContract($Client_ID, $FromDate, $ToDate, $Period_Servicing)
	{
  		$Run = true;
		if (!intval($Client_ID)) 		{ $Run = false; echo "<br>Error! Client_ID:$Client_ID";};
	    if (!intval($Period_Servicing))	{ $Run = false; echo "<br>Error! Period_Servicing:$Period_Servicing";};

		if ($Run)
		{
			return RunSQL("INSERT INTO Client_Contract
							(CLIENT_ID,
  							FROMDATE,
  							TODATE,
  							PERIOD_SERVICING
  							) VALUES (
  							 $Client_ID,
  							'$FromDate',
  							'$ToDate',
  							 $Period_Servicing)");
  		}
  		else { echo "Error!: InsClientContract"; return false; }
	}

	function DelClientContract($Client_Contract_ID)
	{
		$Run = true;
		if (!intval($Client_Contract_ID)) 		{ $Run = false; echo "<br>Error! Client_Contract_ID:$Client_Contract_ID";};
	   
		if ($Run)
			return RunSQL("DELETE FROM Client_Contract WHERE (ID = $Client_Contract_ID)");
		else
		{	
			echo "Error! : DelClientContract";
			return false;
		}
	}
	
	function UpdClientContract($Client_Contract_ID, $Client_ID, $FromDate, $ToDate, $Period_Servicing)
	{
		$Run = true;
		if (!intval($Client_ID)) 			{ $Run = false; echo "<br>Error! Client_ID:$Client_ID";};
	    if (!intval($Client_Contract_ID))	{ $Run = false; echo "<br>Error! Client_Contract_ID:$Client_Contract_ID";};
		if (!intval($Period_Servicing))		{ $Run = false; echo "<br>Error! Period_Servicing:$Period_Servicing";};

		if ($Run)
		{
			return RunSQL("UPDATE Client_Contract SET
					CLIENT_ID 	 	 =  $Client_ID,
					FROMDATE  		 = '$FromDate',
					TODATE 			 = '$ToDate',
					PERIOD_SERVICING =  $Period_Servicing
					WHERE (ID = $Client_Contract_ID)");
		}
		else {echo "Error!: UpdClientContract"; return false; }
	}
}