<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Clienttypemodel extends Model_Fiscal_Basemodel
{

	function getClientType()
	{
		$sql = "SELECT * FROM client_type ";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	}
	
	
	function getClientType4Select()
	{
		$sql = "SELECT * FROM client_type ";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		foreach($result as $item)
		{
			$arr[$item['ID']] = $item['NAME'];
		}
	
		return $arr;
	}
	
	


	// Функция добавления записи в таблицу "Сlient_Type"
	// "Client_TypeName" varchar(100) - Имя клиената
	// "ISSUPPLIER" 	 smallint	  - Признак поставщика
	// "ISCUSTOMER" 	 smallint 	  - Признак покупателя
	// "ISPRODUCER" 	 smallint 	  - Признак производителя
	
	function InsClient_Type($Client_TypeName, $IsSupplier, $IsCustomer, $IsProducer)
	{
	$Client_TypeName = trim($Client_TypeName);
	
	if (intval($IsSupplier)
	&&(intval($IsCustomer))
	&&(intval($IsProducer)))
	{
	
	$sql = "INSERT INTO client_type
					(NAME,
					ISSUPPLIER,
					ISCUSTOMER,
					ISPRODUCER) VALUES (
					:param_Client_TypeName,
					:param_IsSupplier,
					:param_IsCustomer,
					:param_IsProducer)";
	
	
			$query = DB::query(Database::INSERT, $sql);
					
				$query->param(':param_Client_TypeName', $Client_TypeName);
				$query->param(':param_IsSupplier', $IsSupplier);
			$query->param(':param_IsCustomer', $IsCustomer);
			$query->param(':param_IsProducer', $IsProducer);
	
						$result = $query->execute($this->_db);
							
						return true;
	
	
	}
	else { return false; }
	}
	
	
	// Функция изменения записи в таблице "Сlient_Type" по ключу "Сlient_Type_ID"
	// "Сlient_Type_TypeName" varchar(100) - Имя клиената
	// "ISSUPPLIER" 	 smallint	  - Признак поставщика
	// "ISCUSTOMER" 	 smallint 	  - Признак покупателя
	// "ISPRODUCER" 	 smallint 	  - Признак производителя
	
	function UpdClient_Type($Client_Type_ID, $Client_TypeName, $IsSupplier, $IsCustomer, $IsProducer)
				{
				$Client_TypeName = trim($Client_TypeName);
	
				if (intval($IsSupplier)
						&&(intval($Client_Type_ID))
						&&(intval($IsCustomer))
						&&(intval($IsProducer)))
				{
					
				$sql = "UPDATE Client_Type SET
					NAME = :param_Client_TypeName,
					ISSUPPLIER = :param_IsSupplier,
					ISCUSTOMER = :param_IsCustomer,
					ISPRODUCER = :param_IsProducer
				WHERE
				ID = :param_Client_Type_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
					
				$query->param(':param_Client_TypeName', $Client_TypeName);
			$query->param(':param_IsSupplier', $IsSupplier);
			$query->param(':param_IsCustomer', $IsCustomer);
			$query->param(':param_IsProducer', $IsProducer);
			$query->param(':param_Client_Type_ID', $Client_Type_ID);
		
			$result = $query->execute($this->_db);
					
				return true;
				}
				else { return false; }
				}

	
}