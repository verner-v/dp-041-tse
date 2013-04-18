<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Stampmodel extends Model_Fiscal_Basemodel
{
	
	
	
	// Функция изменения записи в таблице "Stamp" по ключу "StampID"
	// "Doc_Stamp_Store_ID" int - ссылка на накладную ухода со склада
	// "Series" 			varchar (2)	 - серия пломбы
	// "Number" 			int			 - номер пломбы
	// "Price" 				numeric[5,2] - цена
	
	function UpdStamp($Stamp_ID, $Doc_Stamp_Store_ID, $Series, $Number, $Price)
	{
	$Series = trim($Series);
	
	if (intval($Doc_Stamp_Store_ID)
		&& intval($Stamp_ID)
		&& intval($Number)
		&& intval($Price))
	{
		
	
	
		}
		else { return false; }
	}
	
// Функция добавления записи в таблицу "Stamp"
// "Doc_Stamp_Store_ID" int - ссылка на накладную ухода со склада
// "Series" 			varchar (2)	 - серия пломбы
// "Number" 			int			 - номер пломбы
// "Price" 				numeric[5,2] - цена

	function InsStamp($DocIn_Stamp_Store_ID
					 ,$DocOut_Stamp_Store_ID
					 ,$Series
					 ,$Number
					 ,$Price
					 ,$Type_Stamp)
	{
  		$Series = trim($Series);

		
			
			$sql = "INSERT INTO Stamp(
							DOCIN_STAMP_STORE_ID,
							DOCOUT_STAMP_STORE_ID,
  						  	SERIES,
  							NUMBER,
  							PRICE,
							TYPE_STAMP
  							) VALUES (
					:param_DocIn_Stamp_Store_ID,
					:param_DocOut_Stamp_Store_ID,
					:param_Series,
					:param_Number,
					:param_Price,
					:param_Type_Stamp
					)";
			
			$query = DB::query(Database::INSERT, $sql);
			
			$query->param(':param_Doc_Stamp_Store_ID', $DocIn_Stamp_Store_ID);
			$query->param(':param_DocOut_Stamp_Store_ID', $DocOut_Stamp_Store_ID);
			$query->param(':param_Series', $Series);
			$query->param(':param_Number', $Number);
			$query->param(':param_Price', $Price);
			$query->param(':param_Type_Stamp', $Type_Stamp);
			
			$result = $query->execute($this->_db);
			
			return $result;
	}
	
	function UpdStamp($Stamp_ID
					 ,$DocIn_Stamp_Store_ID
					 ,$DocOut_Stamp_Store_ID
					 ,$Series
					 ,$Number
					 ,$Price
					 ,$Type_Stamp)
	{
  		$Series = trim($Series);

				
			$sql = "UPDATE Stamp SET
					DOCIN_STAMP_STORE_ID 	 = :param_DocIn_Stamp_Store_ID,
					DOCOUT_STAMP_STORE_ID 	 = :param_DocOut_Stamp_Store_ID,
					SERIES  = :param_Series,
					NUMBER  = :param_Number,
					PRICE   = :param_Price,
					TYPE_STAMP   = :param_Type_Stamp
					WHERE
					ID = :param_Stamp_ID
				";
			
			$query = DB::query(Database::UPDATE, $sql);
			
			$query->param(':param_DocIn_Stamp_Store_ID', $DocIn_Stamp_Store_ID);
			$query->param(':param_DocOut_Stamp_Store_ID', $DocOut_Stamp_Store_ID);
			$query->param(':param_Series', $Series);
			$query->param(':param_Number', $Number);
			$query->param(':param_Price', $Price);
			$query->param(':param_Type_Stamp', $Type_Stamp);
			$query->param(':param_Stamp_ID', $Stamp_ID);
			
			$result = $query->execute($this->_db);
			
			return 	$result;
				
	}

	function SetOutStampFromStore($Stamp_ID,$DocOut_Stamp_Store_ID)
	{
		$Run = true;
		if (!intval($DocOut_Stamp_Store_ID)){ $Run = false; echo "<br>Error! DocOut_Stamp_Store_ID:$DocOut_Stamp_Store_ID";};
		if (!intval($Stamp_ID))				{ $Run = false; echo "<br>Error! Stamp_ID:$Stamp_ID";};
		 
		if ($Run)
		{
			return RunSQL("UPDATE Stamp SET
					DOCOUT_STAMP_STORE_ID 	 = $DocOut_Stamp_Store_ID
					WHERE (ID = $Stamp_ID)");
		}
		else { echo "Error!: StampSetOutFromStore"; return false; }
	}	
	
		
	function GetActiveStamp()
	{
		$result = RunSQL("SELECT ID, SERIES, NUMBER, PRICE, DOCIN_STAMP_STORE_ID, DOCOUT_STAMP_STORE_ID, TYPE_STAMP
				 		  FROM stamp
						  where (DOCOUT_STAMP_STORE_ID = 0)");
		
		return $result;
	}
}