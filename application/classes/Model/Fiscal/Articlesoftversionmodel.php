<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Articlesoftversionmodel extends Model_Fiscal_Basemodel
{

	
	function getSoftversion()
	{
		$sql = "SELECT * FROM  article_softversion ";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	}
	
	function getSoftversion4Select()
	{
		$sql = "SELECT * FROM  article_softversion ";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
			
		$arr = array();
	
		foreach($result as $item)
		{
			$arr[$item['ID']] = $item['NAME'];
		}
	
		return $arr;
	}

	// Функция добавления записи в таблицу "Article_Softversion"
	// Article_SoftversionName - наименование города
	function InsArticle_Softversion($Article_SoftversionName)
	{
		$Article_SoftversionName = trim($Article_SoftversionName);
	
		$sql = "INSERT INTO Article_Softversion (NAME) VALUES (:param_Article_SoftversionName)";
	
		$query = DB::query(Database::INSERT, $sql);
	
		$query->param(':param_Article_SoftversionName', $Article_SoftversionName);
	
	
		$result = $query->execute($this->_db);
	
			
		return true;
	}
	
	
	// Функция изменения записи в таблице "Article_Softversion" по ключу "Article_Softversion_ID"
	// Article_SoftversionName - наименование города
	function UpdArticle_Softversion($Article_Softversion_ID, $Article_SoftversionName)
	{
		$Article_SoftversionName = trim($Article_SoftversionName);
		if (intval($Article_Softversion_ID))
		{
			$sql = "UPDATE Article_Softversion SET
				name = :param_Article_SoftversionName
				WHERE
				id = :param_Article_Model_ID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_Article_SoftversionName', $Article_SoftversionName);
			$query->param(':param_Article_Model_ID', $Article_Softversion_ID);
	
			$result = $query->execute($this->_db);
				
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	
	
	
function GetArticle_SoftVersion()
{
	$result = RunSQL("SELECT ID, NAME FROM Article_SoftVersion");
	return $result;
}
// Функция добавления записи в таблицу "Article_Softversion"
// Article_SoftversionName - наименование города
	
	function InsArticle_Softversion($Article_SoftversionName)
	{
  		$Article_SoftversionName = trim($Article_SoftversionName);
  		RunSQL("INSERT INTO Article_Softversion (NAME) VALUES ('$Article_SoftversionName')");
	}

	function DelArticle_Softversion($Article_Softversion_ID)
	{
		if (intval($Article_Softversion_ID))
			return RunSQL("DELETE FROM Article_Softversion WHERE (ID = $Article_Softversion_ID)");
		else
			return false;
	}
	
	function UpdArticle_Softversion($Article_Softversion_ID, $Article_SoftversionName)
	{
		$Article_SoftversionName = trim($Article_SoftversionName);
		if (intval($Article_Softversion_ID))
			return RunSQL("UPDATE Article_Softversion SET name = '$Article_SoftversionName' WHERE id = $Article_Softversion_ID ");
		else
			return false;
	}
			
	switch ($_REQUEST["button"])
	{
		case "Добавить" ;
			InsArticle_Softversion($_REQUEST["Article_SoftversionName"]);
		break;
			
		case "Изменить" ;
			UpdArticle_Softversion($_REQUEST["Article_Softversion_ID"], $_REQUEST["Article_SoftversionName"]);
		break;
	
		case "Удалить" ;
			DelArticle_Softversion($_REQUEST["Article_Softversion_ID"]);
		break;
	}
?>
</body>
