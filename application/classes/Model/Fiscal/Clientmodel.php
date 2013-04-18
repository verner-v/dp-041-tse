<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Clientmodel extends Model_Fiscal_Basemodel
{	

	function getAllProcreator()
	{
	
		$sql = "SELECT * FROM client WHERE CLIENT_TYPE_ID = 1";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	}
	
	function getAllProcreator4Select()
	{
	
		$sql = "SELECT * FROM client WHERE CLIENT_TYPE_ID = 1";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		$arr = array();
	
		foreach($result as $item)
		{
			$arr[$item['ID']] = $item['NAME'];
		}
	
		return $arr;
	}
	
	function getClientById($id)
	{
		$sql = "SELECT client.*, client_type.name as CLIETNT_TYPE_NAME FROM client, client_type WHERE client_type.id = client.client_type_id and client.ID = :param_ID";
	
		$query = DB::query(Database::SELECT, $sql);
	
		$query->param(':param_ID', $id);
	
		$result = $query->execute($this->_db)->as_array();
	
		if(count($result) == 1)
			return $result[0];
	
		return null;
	}
	
	function getAllCustomer()
	{
		$sql = "SELECT * FROM client WHERE CLIENT_TYPE_ID = 2";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	}
	
	function getClientsByClientTypeId($clientTypeId)
	{
		$sql = "SELECT * FROM client WHERE CLIENT_TYPE_ID = :param_CLIENT_TYPE_ID";
	
		$query = DB::query(Database::SELECT, $sql);
	
		$query->param(':param_CLIENT_TYPE_ID', $clientTypeId);
	
		$result = $query->execute($this->_db)->as_array();
	
		return $result;
	}
	
	function getClientsByClientTypeId4Select($clientTypeId)
	{
		$sql = "SELECT * FROM client WHERE CLIENT_TYPE_ID = :param_CLIENT_TYPE_ID";
	
		$query = DB::query(Database::SELECT, $sql);
	
		$query->param(':param_CLIENT_TYPE_ID', $clientTypeId);
	
		$result = $query->execute($this->_db)->as_array();
	
		$arr = array();
	
		foreach($result as $item)
		{
			$arr[$item['ID']] = $item['NAME'];
		}
	
		return $arr;
	}
	





	// Функция добавления записи в таблицу "Client"
	// "ClientName" varchar(100) - Имя клиената
	// "EDRPOU" 	varchar(20)	 - ЕДРПОУ
	// "UAddress" 	varchar(300) - укр.адрес
	// "Client_Type_ID" int 	 - тип клиента, таблица (client_type)
	// "OwnerShip" 	varchar(50)	 - форма юридического лица
	// "City_ID" 		int 	 - город, таблица (city)
	
	function InsClient($ClientName, $EDRPOU, $UAddress, $Client_Type_ID, $OwnerShip, $City_ID)
	{
		$ClientName = trim($ClientName);
		$EDRPOU 	= trim($EDRPOU);
		$UAddress 	= trim($UAddress);
		$OwnerShip 	= trim($OwnerShip);
	
			
		$sql = "INSERT INTO client(
					NAME,
					EDRPOU,
					UADDRESS,
					CLIENT_TYPE_ID,
					OWNERSHIP,
					CITY_ID
			) values (
					:paramClientName,
					:paramEDRPOU,
					:paramUAddress,
					:paramClient_Type_ID,
					:paramOwnerShip,
					:paramCity_ID)";
			
		$query = DB::query(Database::INSERT, $sql);
			
		$query->param(':paramClientName',$ClientName);
		$query->param(':paramEDRPOU',$EDRPOU);
		$query->param(':paramUAddress',$UAddress);
		$query->param(':paramClient_Type_ID',$Client_Type_ID);
		$query->param(':paramOwnerShip',$OwnerShip);
		$query->param(':paramCity_ID',$City_ID);
			
		$result = $query->execute($this->_db);
			
		return true;
	
	}
	
	
	
	// Функция изменения записи в таблице "Client" по ключу "ClientID"
	// "CLIENTNAME" varchar(100) - Имя клиената
	// "EDRPOU" 	varchar(20)	 - ЕДРПОУ
	// "UADDRESS" 	varchar(300) - укр.адрес
	// "CLIENT_TYPE_ID" int 	 - тип клиента, таблица (client_type)
	// "OWNERSHIP" 	varchar(50)	 - форма юридического лица
	// "CITY_ID" 		int 	 - город, таблица (city)
	
	function UpdClient($Client_ID, $ClientName, $EDRPOU, $UAddress, $Client_Type_ID, $OwnerShip, $City_ID)
	{
		$ClientName = trim($ClientName);
		$EDRPOU 	= trim($EDRPOU);
		$UAddress 	= trim($UAddress);
		$OwnerShip 	= trim($OwnerShip);
	
			
		$sql = "UPDATE client SET
					NAME = :param_ClientName,
					EDRPOU = :param_EDRPOU,
					UAddress = :param_UAddress,
					Client_Type_ID = :param_Client_Type_ID,
					OwnerShip = :param_OwnerShip,
					City_ID = :param_City_ID
				WHERE
				ID = :param_Client_ID
				";
	
		$query = DB::query(Database::UPDATE, $sql);
	
		$query->param(':param_ClientName', $ClientName);
		$query->param(':param_EDRPOU', $EDRPOU);
		$query->param(':param_UAddress', $UAddress);
		$query->param(':param_Client_Type_ID', $Client_Type_ID);
		$query->param(':param_OwnerShip', $OwnerShip);
		$query->param(':param_City_ID', $City_ID);
		$query->param(':param_Client_ID', $Client_ID);
	
		$result = $query->execute($this->_db);
			
		return true;
	
	}
	
		
	
	function GetAllClient()
	{
		$result = RunSQL("SELECT ID
								,NAME
								,EDRPOU
								,UADDRESS
								,CLIENT_TYPE_ID
								,OWNERSHIP
								,CITY_ID
								FROM Client
								where CLIENT_TYPE_ID = 2
								group by NAME");
		return $result;
	}
}
	
	