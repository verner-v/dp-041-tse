<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Objectmodel extends Model_Fiscal_Basemodel
{
	
	// Функция добавления записи в таблицу "Object"
	// "ObjectName" 	varchar(50)  - Имя обьекта
	// "$Contact_Face" 	varchar(100) - контактое лицо
	// "$UAddress" 		varchar(100) - укр.адрес
	// "$Phone_Number" 	varchar(50)	 - номер телефона
	// "City_ID" 		int 	 	 - город, таблица (City)
	
	function InsObject($ObjectName, $Contact_Face, $Phone_Number, $UAddress, $City_ID)
	{
		$ObjectName 	= trim($ObjectName);
		$Contact_Face 	= trim($Contact_Face);
		$Phone_Number 	= trim($Phone_Number);
		$UAddress 		= trim($UAddress);
	
		if (intval($City_ID))
		{
				
			$sql = "INSERT INTO Object
					(NAME,
					CONTACT_FACE,
					PHONE_NUMBER,
					UADDRESS,
					CITY_ID
				) VALUES (
					:param_ObjectName,
					:param_Contact_Face,
					:param_Phone_Number,
					:param_UAddress,
					:param_City_ID
					)";
				
			$query = DB::query(Database::INSERT, $sql);
				
			$query->param(':param_ObjectName', $ObjectName);
			$query->param(':param_Contact_Face', $Contact_Face);
			$query->param(':param_Phone_Number', $Phone_Number);
			$query->param(':param_UAddress', $UAddress);
			$query->param(':param_City_ID', $City_ID);
	
			$result = $query->execute($this->_db);
				
			return true;
		}
		else { return false; }
	}
	
	// Функция редактирования записи в таблицу "Object"
	// "ObjectName" 	varchar(50)  - Имя обьекта
	// "$Contact_Face" 	varchar(100) - контактое лицо
	// "$UAddress" 		varchar(100) - укр.адрес
	// "$Phone_Number" 	varchar(50)	 - номер телефона
	// "City_ID" 		int 	 	 - город, таблица (City)
	
	function UpdObject($Object_ID, $ObjectName, $Contact_Face, $Phone_Number, $UAddress, $City_ID)
	{
		$ObjectName 	= trim($ObjectName);
		$Contact_Face 	= trim($Contact_Face);
		$Phone_Number 	= trim($Phone_Number);
		$UAddress 		= trim($UAddress);
	
		if (intval($Object_ID)
				&& intval($City_ID))
		{
				
			$sql = "UPDATE Object SET
					NAME = :param_ObjectName,
					CONTACT_FACE = :param_Contact_Face,
					PHONE_NUMBER = :param_Phone_Number,
					UADDRESS = :param_UAddress,
					CITY_ID = :param_City_ID
		
				WHERE
				ID = :param_Object_ID
				";
				
			$query = DB::query(Database::UPDATE, $sql);
				
			$query->param(':param_ObjectName', $ObjectName);
			$query->param(':param_Contact_Face', $Contact_Face);
			$query->param(':param_Phone_Number', $Phone_Number);
			$query->param(':param_UAddress', $UAddress);
			$query->param(':param_City_ID', $City_ID);
			$query->param(':param_Object_ID', $Object_ID);
				
	
	
	
			$result = $query->execute($this->_db);
	
			return true;
				
		}
		else
		{
			return false;
		}
	}
	

// Функция добавления записи в таблицу "Object"
// "ObjectName" 	varchar(50)  - Имя обьекта
// "$Contact_Face" 	varchar(100) - контактое лицо
// "$UAddress" 		varchar(100) - укр.адрес
// "$Phone_Number" 	varchar(50)	 - номер телефона
// "City_ID" 		int 	 	 - город, таблица (City)

	function InsObject($ObjectName, $Contact_Face, $Phone_Number, $UAddress, $City_ID)
	{
  		$ObjectName 	= trim($ObjectName);
  		$Contact_Face 	= trim($Contact_Face);
  		$Phone_Number 	= trim($Phone_Number);
  		$UAddress 		= trim($UAddress);

  		$Run = true;
		if (!intval($City_ID)) 	{ $Run = false; echo "<br>Error! City_ID:$City_ID";};

		if ($Run)
		{
			return RunSQL("INSERT INTO Object
					(NAME,
  					CONTACT_FACE,
  					PHONE_NUMBER,
  					UADDRESS,
  					CITY_ID)
  			VALUES ('$ObjectName',
  					'$Contact_Face',
  					'$Phone_Number',
  					'$UAddress',
  					 $City_ID)");
  		}
  		else { echo "Error!:InsObject"; return false; }
	}
	
	function UpdObject($Object_ID, $ObjectName, $Contact_Face, $Phone_Number, $UAddress, $City_ID)
	{
		$ObjectName 	= trim($ObjectName);
		$Contact_Face 	= trim($Contact_Face);
		$Phone_Number 	= trim($Phone_Number);
		$UAddress 		= trim($UAddress);
	
		$Run = true;
		if (!intval($City_ID)) 		{ $Run = false; echo "<br>Error! City_ID:$City_ID";};
		if (!intval($Object_ID)) 	{ $Run = false; echo "<br>Error! Object_ID:$Object_ID";};
		
		if ($Run)
		{
			return RunSQL("UPDATE Object SET
					NAME 	 	 = '$ObjectName',
					CONTACT_FACE = '$Contact_Face',
					PHONE_NUMBER = '$Phone_Number',
					UADDRESS 	 = '$UAddress',
					CITY_ID   	 = $City_ID
					WHERE (ID 	 = $Object_ID)");
		}
		else
		{
			echo "Error!:UpdObject"; return false;
		}
	}
	
	function DelObject($Object_ID)
	{
		if (intval($Object_ID))
			return RunSQL("DELETE FROM Object WHERE (ID = $Object_ID)");
		else
			return false;
	}
	
	
	function GetAllObject()
	{
		$Result = RunSQL("SELECT ID
								,CLIENT_ID
								,NAME
								,CONTACT_FACE
								,PHONE_NUMBER
								,UADDRESS
								,CITY_ID
								 FROM object
								 group by NAME");
		return $Result;
	}
	
	function GetObject($CLIENT_ID)
	{
		$Result = RunSQL("SELECT ID
				,CLIENT_ID
				,NAME
				,CONTACT_FACE
				,PHONE_NUMBER
				,UADDRESS
				,CITY_ID
				FROM object
				where CLIENT_ID = $CLIENT_ID
				group by NAME");
				return $Result;
	}
	
	
	
	switch ($_REQUEST["button"])
	{
		case "Добавить" ;
		InsObject($_REQUEST["ObjectName"],
			  		$_REQUEST["Contact_Face"],
			  		$_REQUEST["Phone_Number"],
			  		$_REQUEST["UAddress"],
			  		$_REQUEST["City_ID"]);
		break;
			
		case "Изменить" ;
		UpdObject($_REQUEST["Object_ID"],
					$_REQUEST["ObjectName"],
					$_REQUEST["Contact_Face"],
					$_REQUEST["Phone_Number"],
					$_REQUEST["UAddress"],
					$_REQUEST["City_ID"]);
		break;
	
		case "Удалить" ;
		DelObject($_REQUEST["Object_ID"]);
		break;
	}
}