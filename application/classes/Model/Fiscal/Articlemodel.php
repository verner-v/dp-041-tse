<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Articlemodel extends Model_Fiscal_Basemodel
{
	// Функция добавления записи в таблицу "Article"
	
	
	// Article_Model_ID		int(11)		- Ссылка на наименование артикля/модели оборудования (ARTICLE_MODEL)
	// Components			int(11)		- Компоненты оборудования: например, блоки фискального регистратора
	// ProductionDate		int(11)		- Дата производства
	// FiscalNumber			varchar(50)	- Фискальный номер
	// FactoryNumber		varchar(50)	- Фабричный номер
	// Article_SoftVersion_ID	int(11)	- Ссылка на версию ПО
	// Procreator_ID			int(11)	- Ссылка на производителя
	
	function InsArticle(
			$Article_Model_ID
			,$Components
			,$ProductionDate
			,$FiscalNumber
			,$FactoryNumber
			,$Article_SoftVersion_ID
			,$Procreator_ID
	)
	{
	$FiscalNumber = trim($FiscalNumber);
	$Components = trim($Components);
	$FactoryNumber 	= trim($FactoryNumber);
	$FDate = explode(".",$ProductionDate);
	
	
		
	$sql = "INSERT INTO article(
			ARTICLE_MODEL_ID
					,COMPONENTS
					,PRODUCTIONDATE
					,FISCALNUMBER
					,FACTORYNUMBER
					,ARTICLE_SOFTVERSION_ID
					,PROCREATOR_ID
			) VALUES  (
					:param_Article_Model_ID,
					:param_Components,
					:param_ProductionDate,
					:param_FiscalNumber,
					:param_FactoryNumber,
					:param_Article_SoftVersion_ID,
					:param_Procreator_ID
					)";
	
			$query = DB::query(Database::INSERT, $sql);
	
				$query->param(':param_Article_Model_ID',$Article_Model_ID);
			$query->param(':param_Components',$Components);
				$query->param(':param_ProductionDate',$ProductionDate);
			$query->param(':param_FiscalNumber',$FiscalNumber);
			$query->param(':param_FactoryNumber',$FactoryNumber);
			$query->param(':param_Article_SoftVersion_ID',$Article_SoftVersion_ID);
			$query->param(':param_Procreator_ID',$Procreator_ID);
	
			$result = $query->execute($this->_db);
		
	return $result;
	
	}
	
	
	// Функция изменения записи в таблице "Article" по ключу "ArticleID"
	
	// Article_Model_ID		int(11)		- Ссылка на наименование артикля/модели оборудования (ARTICLE_MODEL)
	// Components			int(11)		- Компоненты оборудования: например, блоки фискального регистратора
	// ProductionDate		int(11)		- Дата производства
	// FiscalNumber			varchar(50)	- Фискальный номер
	// FactoryNumber		varchar(50)	- Фабричный номер
	// Article_SoftVersion_ID	int(11)	- Ссылка на версию ПО
	// Procreator_ID			int(11)	- Ссылка на производителя
	
	function UpdArticle(
	$Article_ID
	,$Article_Model_ID
	,$Components
	,$ProductionDate
	,$FiscalNumber
	,$FactoryNumber
	,$Article_SoftVersion_ID
	,$Procreator_ID
	)
				{
				$Components = trim($Components);
				$FiscalNumber = trim($FiscalNumber);
				$FactoryNumber 	= trim($FactoryNumber);
				$FDate = explode(".",$ProductionDate);
	
				if ((checkdate($FDate[0],$FDate[1],$FDate[2]))
				&& intval($Article_Model_ID)
				&& intval($Article_ID)
				&& intval($ProductionDate)
				&& intval($Article_SoftVersion_ID)
				&& intval($Procreator_ID))
				{
					
					
				$sql = "UPDATE Article SET
				ARTICLE_MODEL_ID = :param_Article_Model_ID,
					COMPONENTS = :param_Components,
				PRODUCTIONDATE = :param_ProductionDate,
				FISCALNUMBER = :param_FiscalNumber,
				FACTORYNUMBER = :param_FactoryNumber,
				ARTICLE_SOFTVERSION_ID = :param_Article_SoftVersion_ID,
				PROCREATOR_ID = :param_Procreator_ID
				WHERE
				ID = :param_Article_ID
				";
		
			$query = DB::query(Database::UPDATE, $sql);
		
			$query->param(':param_Article_Model_ID', $Article_Model_ID);
				$query->param(':param_Components', $Components);
			$query->param(':param_ProductionDate', $ProductionDate);
			$query->param(':param_FiscalNumber', $FiscalNumber);
			$query->param(':param_FactoryNumber', $FactoryNumber);
			$query->param(':param_Article_SoftVersion_ID', $Article_SoftVersion_ID);
				$query->param(':param_Procreator_ID', $Procreator_ID);
	
				$query->param(':param_Article_ID', $Article_ID);
		
			$result = $query->execute($this->_db);
					
					
			return true;
				}
				else { return false; }
				}
	

// Функция добавления записи в таблицу "Article"


// Article_Model_ID		int(11)		- Ссылка на наименование артикля/модели оборудования (ARTICLE_MODEL)
// Components			int(11)		- Компоненты оборудования: например, блоки фискального регистратора
// ProductionDate		int(11)		- Дата производства
// FiscalNumber			varchar(50)	- Фискальный номер
// FactoryNumber		varchar(50)	- Фабричный номер
// Article_SoftVersion_ID	int(11)	- Ссылка на версию ПО
// Procreator_ID			int(11)	- Ссылка на производителя

	function InsArticle(
	 $Article_Model_ID
	,$ProductionDate
	,$FiscalNumber
	,$FactoryNumber
	,$Article_SoftVersion_ID
	,$Procreator_ID
	)
	{
		$FiscalNumber = trim($FiscalNumber);
		$FactoryNumber 	= trim($FactoryNumber);
		$Run = true;
	    if (!intval($Article_Model_ID))			{ $Run = false; echo "<br>Error! Article_Model_ID:$Article_Model_ID";};
	    if (!intval($Article_SoftVersion_ID))	{ $Run = false; echo "<br>Error! Article_SoftVersion_ID:$Article_SoftVersion_ID";};
	    if (!intval($Procreator_ID))			{ $Run = false; echo "<br>Error! Procreator_ID:$Procreator_ID";};

		if ($Run)
		{
			return 	RunSQL("INSERT INTO Article(
                            ARTICLE_MODEL_ID
                           ,PRODUCTIONDATE
                           ,FISCALNUMBER
                           ,FACTORYNUMBER
                           ,ARTICLE_SOFTVERSION_ID
                           ,PROCREATOR_ID
  							) VALUES (
                            $Article_Model_ID
	                       ,'$ProductionDate'
	                       ,$FiscalNumber
	                       ,$FactoryNumber
	                       ,$Article_SoftVersion_ID
	                       ,$Procreator_ID
                            )");								
     	}
  		else {echo "Error!: InsArticle"; return false; }
	}

	
	function UpdArticle(
		 	 $Article_ID
			,$Article_Model_ID
			,$ProductionDate
			,$FiscalNumber
			,$FactoryNumber
			,$Article_SoftVersion_ID
			,$Procreator_ID
	)
	{
		$FiscalNumber = trim($FiscalNumber);
		$FactoryNumber 	= trim($FactoryNumber);
		$Run = true;
	    if (!intval($Article_ID))				{ $Run = false; echo "<br>Error! Article_ID:$Article_ID";};
	    if (!intval($Article_Model_ID))			{ $Run = false; echo "<br>Error! Article_Model_ID:$Article_Model_ID";};
	    if (!intval($Article_SoftVersion_ID))	{ $Run = false; echo "<br>Error! Article_SoftVersion_ID:$Article_SoftVersion_ID";};
	    if (!intval($Procreator_ID))			{ $Run = false; echo "<br>Error! Procreator_ID:$Procreator_ID";};

		if ($Run)
		{
			if ( RunSQL("UPDATE Article SET
					ARTICLE_MODEL_ID           = $Article_Model_ID
					,PRODUCTIONDATE             = '$ProductionDate'
					,FISCALNUMBER               = $FiscalNumber
					,FACTORYNUMBER              = $FactoryNumber
					,ARTICLE_SOFTVERSION_ID     = $Article_SoftVersion_ID
					,PROCREATOR_ID              = $Procreator_ID
					WHERE (ID = $Article_ID)"))
				echo "Succes : Измененние произведено успешно.";
			else
				echo "Error!: UpdArticle";
		}
		else {
			echo "Error!: UpdArticle <<Входные параметры не выдержали проверки!>>";
			return false;
		}
	}
	
	// Функция удаления записи таблицы "Article" по ключу "Article_ID"
	function DelArticle($Article_ID)
	{
		if (intval($Article_ID))
			return RunSQL("DELETE FROM Article WHERE (ID = $Article_ID)");
		else
		{
			echo "Error: DelArticle";
			return false;
		}			
	}
	
	
	function GetAllArticle()
	{
		$result = RunSQL("SELECT A.ID,
								 AM.NAME,
								 A.ARTICLE_MODEL_ID,
								 A.PRODUCTIONDATE,
								 A.FISCALNUMBER,
								 A.FACTORYNUMBER,
								 A.ARTICLE_SOFTVERSION_ID,
								 A.PROCREATOR_ID
								 FROM Article A inner join article_model AM
								 on A.ARTICLE_MODEL_ID = AM.ID");
		return $result;
	}

	
	switch ($_REQUEST["button"])
	{
		case "Добавить" ;
			InsArticle($_REQUEST["Article_Model_ID"],
						$_REQUEST["ProductionDate"],
						$_REQUEST["FiscalNumber"],
						$_REQUEST["FactoryNumber"],
						$_REQUEST["Article_SoftVersion_ID"],
						$_REQUEST["Procreator_ID"]);
		break;
			
		case "Изменить" ;
			UpdArticle($_REQUEST["Article_ID"],
						$_REQUEST["Article_Model_ID"],
						$_REQUEST["ProductionDate"],
						$_REQUEST["FiscalNumber"],
						$_REQUEST["FactoryNumber"],
						$_REQUEST["Article_SoftVersion_ID"],
						$_REQUEST["Procreator_ID"]);
		break;
	
		case "Удалить" ;
			DelArticle($_REQUEST["Article_ID"]);
		break;
	}
}