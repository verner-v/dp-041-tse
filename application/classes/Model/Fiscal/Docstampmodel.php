<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Docstampmodel extends Model_Fiscal_Basemodel
{	

	// Функция добавления записи в таблицу "Doc_Stamp"
	//  GOD					int(11)	- год оформления документа. Служит для обеспечения уникальности номера
	//  DOCDATE				date	- дата оформления документа
	//  DOCNUMBER			int(11)	- номер документа
	//  OBJECT_ID			int(11)	- ссылка на обьект
	//  ARTICLE_ID			int(11)	- ссылка на оборудование
	//  DOC_SERVICE_AV_ID	int(11)	- ссылка на акт ввода
	//  EMPLOYEE_ID			int(11)	- ссылка на работника, оформившего документ
	//  UNSEALINGTIME		int(11)	- время распломбировки
	//  SEALINGDATE			date	- дата опломбировки
	//  SEALINGTIME			time	- время опломбировки
	//  STAMPA_ID			int(11) - пломба "А"
	//  STAMPB_ID			int(11)	- пломба "Б"
	//  UNSEALING_STAMP_ID	int(11)	- ссылка на причину распломбировки
	//  NEXTSTAMPDATE		date	- дата плановой перепломбировки
	
	
	function InsDoc_Stamp( $God
			,$DocDate
			,$DocNumber
			,$Object_ID
			,$Article_ID
			,$Doc_Service_AV_ID
			,$Employee_ID
			,$UnwealingTime
			,$SealingDate
			,$SealingTime
			,$StampA_ID
			,$StampB_ID
			,$Unsealing_Stamp_ID
			,$NextStampDate		)
	{
	
	
	$DD  = explode(".",$DocDate);
	$SD  = explode(".",$SealingDate);
	$NSD = explode(".",$NextStampDate);
	
		
	if ((checkdate($DD[0],$DD[1],$DD[2]))
	&&  (checkdate($SD[0],$SD[1],$SD[2]))
	&&  (checkdate($NSD[0],$NSD[1],$NSD[2]))
	&&  intval($God)
	&& intval($DocNumber)
	&& intval($Object_ID)
	&& intval($Article_ID)
	&& intval($Doc_Service_AV_ID)
	&& intval($Employee_ID)
	&& intval($StampA_ID)
	&& intval($StampB_ID)
	&& intval($Unsealing_Stamp_ID))
	{
	
	$sql = "INSERT INTO Doc_Stamp(
			GOD
			,DOCDATE
			,DOCNUMBER
			,OBJECT_ID
				,ARTICLE_ID
				,DOC_SERVICE_AV_ID
				,EMPLOYEE_ID
				,UNSEALINGTIME
				,SEALINGDATE
				,SEALINGTIME
				,STAMPA_ID
				,STAMPB_ID
				,UNSEALING_STAMP_ID
				,NEXTSTAMPDATE
		) VALUES (
					:param_God,
					:param_DocDate,
					:param_DocNumber,
					:param_Object_ID,
					:param_Article_ID,
					:param_Doc_Service_AV_ID,
					:param_Employee_ID,
					:param_UnwealingTime,
					:param_SealingDate,
					:param_SealingTime,
					:param_StampA_ID,
					:param_StampB_ID,
					:param_Unsealing_Stamp_ID,
					:param_NextStampDate
					)";
		
			$query = DB::query(Database::INSERT, $sql);
		
			$query->param(':param_God', $God);
				$query->param(':param_DocDate', $DocDate);
			$query->param(':param_DocNumber', $DocNumber);
						$query->param(':param_Object_ID', $Object_ID);
						$query->param(':param_Article_ID', $Article_ID);
						$query->param(':param_Doc_Service_AV_ID', $Doc_Service_AV_ID);
						$query->param(':param_Employee_ID', $Employee_ID);
						$query->param(':param_UnwealingTime', $UnwealingTime);
			$query->param(':param_SealingDate', $SealingDate);
			$query->param(':param_SealingTime', $SealingTime);
			$query->param(':param_StampA_ID', $StampA_ID);
			$query->param(':param_StampB_ID', $StampB_ID);
			$query->param(':param_Unsealing_Stamp_ID', $Unsealing_Stamp_ID);
			$query->param(':param_NextStampDate', $NextStampDate);
	
			$result = $query->execute($this->_db);
						
				
				
				
			return true;
			}
			else { return false; }
			}
	
			// Функция изменения записи в таблице "Doc_Stamp" по ключу "Doc_Stamp_ID"
			//  GOD					int(11)	- год оформления документа. Служит для обеспечения уникальности номера
			//  DOCDATE				date	- дата оформления документа
			//  DOCNUMBER			int(11)	- номер документа
			//  OBJECT_ID			int(11)	- ссылка на обьект
			//  ARTICLE_ID			int(11)	- ссылка на оборудование
			//  DOC_SERVICE_AV_ID	int(11)	- ссылка на акт ввода
			//  EMPLOYEE_ID			int(11)	- ссылка на работника, оформившего документ
			//  UNSEALINGTIME		int(11)	- время распломбировки
			//  SEALINGDATE			date	- дата опломбировки
			//  SEALINGTIME			time	- время опломбировки
			//  STAMPA_ID			int(11) - пломба "А"
			//  STAMPB_ID			int(11)	- пломба "Б"
			//  UNSEALING_STAMP_ID	int(11)	- ссылка на причину распломбировки
			//  NEXTSTAMPDATE		date	- дата плановой перепломбировки
	
	
			function UpdDoc_Stamp( $Doc_Stamp_ID
			,$God
			,$DocDate
			,$DocNumber
			,$Object_ID
			,$Article_ID
			,$Doc_Service_AV_ID
			,$Employee_ID
			,$UnwealingTime
			,$SealingDate
			,$SealingTime
			,$StampA_ID
			,$StampB_ID
			,$Unsealing_Stamp_ID
			,$NextStampDate		)
			{
			$DD  = explode(".",$DocDate);
			$SD  = explode(".",$SealingDate);
			$NSD = explode(".",$NextStampDate);
	
			if ((checkdate($DD[0],$DD[1],$DD[2]))
			&&  (checkdate($SD[0],$SD[1],$SD[2]))
			&&  (checkdate($NSD[0],$NSD[1],$NSD[2]))
			&&  intval($God)
			&& intval($Doc_Stamp_ID)
			&& intval($DocNumber)
			&& intval($Object_ID)
			&& intval($Article_ID)
			&& intval($Doc_Service_AV_ID)
			&& intval($Employee_ID)
			&& intval($StampA_ID)
			&& intval($StampB_ID)
			&& intval($Unsealing_Stamp_ID))
			{
				
			$sql = "UPDATE Doc_Stamp SET
			GOD = :param_God,
			DOCDATE = :param_DocDate,
			DOCNUMBER = :param_DocNumber,
					OBJECT_ID = :param_Object_ID,
					ARTICLE_ID = :param_Article_ID,
					DOC_SERVICE_AV_ID = :param_Doc_Service_AV_ID,
					EMPLOYEE_ID = :param_Employee_ID,
					UNSEALINGTIME = :param_UnwealingTime,
					SEALINGDATE = :param_SealingDate,
					SEALINGTIME = :param_SealingTime,
					STAMPA_ID = :param_StampA_ID,
					STAMPB_ID = :param_StampB_ID,
					UNSEALING_STAMP_ID = :param_Unsealing_Stamp_ID,
					NEXTSTAMPDATE = :param_NextStampDate
	
				WHERE
				ID = :param_Doc_Stamp_ID
				";
	
			$query = DB::query(Database::UPDATE, $sql);
	
			$query->param(':param_God', $God);
			$query->param(':param_DocDate', $DocDate);
				$query->param(':param_DocNumber', $DocNumber);
			$query->param(':param_Object_ID', $Object_ID);
						$query->param(':param_Article_ID', $Article_ID);
						$query->param(':param_Doc_Service_AV_ID', $Doc_Service_AV_ID);
						$query->param(':param_Employee_ID', $Employee_ID);
						$query->param(':param_UnwealingTime', $UnwealingTime);
						$query->param(':param_SealingDate', $SealingDate);
						$query->param(':param_SealingTime', $SealingTime);
						$query->param(':param_StampA_ID', $StampA_ID);
			$query->param(':param_StampB_ID', $StampB_ID);
			$query->param(':param_Unsealing_Stamp_ID', $Unsealing_Stamp_ID);
			$query->param(':param_NextStampDate', $NextStampDate);
			$query->param(':param_Doc_Stamp_ID', $Doc_Stamp_ID);
					
					
		
			$result = $query->execute($this->_db);
					
				return true;
		}
		else { return false; }
	
			}
	
// Функция добавления записи в таблицу "Doc_Stamp"
//  DOCDATE				date	- дата оформления документа
//  DOC_SERVICE_AV_ID	int(11)	- ссылка на акт ввода
//  EMPLOYEE_ID			int(11)	- ссылка на работника, оформившего документ
//  UNSEALINGTIME		int(11)	- время распломбировки
//  SEALINGDATE			date	- дата опломбировки
//  SEALINGTIME			time	- время опломбировки
//  STAMPA_ID			int(11) - пломба "А"
//  STAMPB_ID			int(11)	- пломба "Б"
//  UNSEALING_STAMP_ID	int(11)	- ссылка на причину распломбировки
//  NEXTSTAMPDATE		date	- дата плановой перепломбировки

/**
 $DocDate
,$Article_ID
,$Employee_ID
,$UnsealingTime
,$SealingDate
,$SealingTime
,$StampA_ID
,$StampB_ID
,$Unsealing_Stamp_ID
,$NextStampDate

DOCDATE
DOC_SERVICE_AV_ID
EMPLOYEE_ID
UNSEALINGTIME
SEALINGDATE
SEALINGTIME
STAMPA_ID
STAMPB_ID
UNSEALING_STAMP_ID
NEXTSTAMPDATE
/**/
function InsDoc_Stamp($DocDate
				,$Article_ID
				,$Employee_ID
				,$UnsealingTime
				,$SealingDate
				,$SealingTime
				,$StampA_ID
				,$StampB_ID
				,$Unsealing_Stamp_ID)
{

	$Run = true;
	if (!intval($Employee_ID)) 	{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
	if (!intval($StampA_ID))	{ $Run = false; echo "<br>Error! StampA_ID:$StampA_ID";};
	if (!intval($StampB_ID))	{ $Run = false; echo "<br>Error! StampB_ID:$StampB_ID";};
	if (!intval($Unsealing_Stamp_ID))	{ $Run = false; echo "<br>Error! Unsealing_Stamp_ID:$Unsealing_Stamp_ID";};
	
	if ($Run)
	{/**/
		return RunSQL("INSERT INTO Doc_Stamp(
				DOCDATE
				,ARTICLE_ID
				,EMPLOYEE_ID
				,UNSEALINGTIME
				,SEALINGDATE
				,SEALINGTIME
				,STAMPA_ID
				,STAMPB_ID
				,UNSEALING_STAMP_ID
		) VALUES (
				 '$DocDate'
				,$Article_ID
				,$Employee_ID
				,'$UnsealingTime'
				,'$SealingDate'
				,'$SealingTime'
				,$StampA_ID
				,$StampB_ID
				,$Unsealing_Stamp_ID)");
		/**/
	}
	else { echo "Error!: InsDoc_Stamp"; return false; }
	}

	function DelDoc_Stamp($Doc_Stamp_ID)
	{
	if (intval($Doc_Stamp_ID))
		return RunSQL("DELETE FROM Doc_Stamp WHERE (ID = $Doc_Stamp_ID)");
				else
		return false;
	}

	function UpdDoc_Stamp($Doc_Stamp_ID
				,$DocDate
				,$Article_ID
				,$Employee_ID
				,$UnsealingTime
				,$SealingDate
				,$SealingTime
				,$StampA_ID
				,$StampB_ID
				,$Unsealing_Stamp_ID)
{

	$Run = true;
	if (!intval($Article_ID)) 	{ $Run = false; echo "<br>Error! Article_ID:$Article_ID";};
	if (!intval($Doc_Stamp_ID)) { $Run = false; echo "<br>Error! Doc_Stamp_ID:$Doc_Stamp_ID";};
	if (!intval($Employee_ID)) 	{ $Run = false; echo "<br>Error! Employee_ID:$Employee_ID";};
	if (!intval($StampA_ID))	{ $Run = false; echo "<br>Error! StampA_ID:$StampA_ID";};
	if (!intval($StampB_ID))	{ $Run = false; echo "<br>Error! StampB_ID:$StampB_ID";};
	if (!intval($Unsealing_Stamp_ID))	{ $Run = false; echo "<br>Error! Unsealing_Stamp_ID:$Unsealing_Stamp_ID";};
	
	if ($Run)
	{
	return RunSQL("UPDATE Doc_Stamp SET
	DOCDATE 	 		= '$DocDate',
	ARTICLE_ID		 	= '$Article_ID',
	EMPLOYEE_ID  		= '$Employee_ID',
	UNSEALINGTIME 		= '$UnsealingTime',
	SEALINGDATE 		= '$SealingDate',
	SEALINGTIME   		= '$SealingTime',
	STAMPA_ID   		= $StampA_ID,
	STAMPB_ID   		= $StampB_ID,
	UNSEALING_STAMP_ID  = $Unsealing_Stamp_ID	
	WHERE (ID = $Doc_Stamp_ID)");		
	}
	else { echo "Error!: UpdDoc_Stamp"; return false; }
	}
	
	
	function ReStamp( $DocDate
			,$Article_ID
			,$Employee_ID
			,$UnwealingTime
			,$SealingDate
			,$SealingTime
			,$StampA_ID
			,$StampB_ID
			,$Unsealing_Stamp_ID)
	{
		// оформляем отпускную накладную со склада пломбы "А", получаем ссылку на этот документ
		include_once("Doc_Stamp_Store.php");
		$DocOut_Stamp_Store_ID = LeaveStampFromStore($DocDate,$Employee_ID,$StampA_ID);
		/**/
		include_once("Stamp.php");
		// устанавливаем на пломбе "А" ссылку на отпускную накладную
		SetOutStampFromStore($StampA_ID,$DocOut_Stamp_Store_ID);
	
		// оформляем отпускную накладную со склада пломбы "Б", получаем ссылку на этот документ
		$DocOut_Stamp_Store_ID = LeaveStampFromStore($DocDate,$Employee_ID,$StampB_ID);
	
		// устанавливаем на пломбе "Б" ссылку на отпускную накладную
		SetOutStampFromStore($StampB_ID,$DocOut_Stamp_Store_ID);
	
		// оформляем акт об опломбировке оборудования
		InsDoc_Stamp($DocDate
		,$Article_ID
		,$Employee_ID
		,$UnsealingTime
		,$SealingDate
		,$SealingTime
		,$StampA_ID
		,$StampB_ID
		,$Unsealing_Stamp_ID);
		
	}
}