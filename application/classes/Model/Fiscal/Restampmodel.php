<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Restampmodel extends Model_Fiscal_Basemodel
{

// Функция опломбировки

// DOCDATE				date	-
// EMPLOYEE_ID			int(11) -
// UNSEALINGTIME		int(11) - 
// SEALINGDATE			date	-
// SEALINGTIME			time	-
// STAMPA_ID			int(11) -
// STAMPB_ID			int(11) -
// UNSEALING_STAMP_ID	int(11) -

	function ReStamp($DOCDATE
					 ,$EMPLOYEE_ID
					 ,$UNSEALINGTIME
					 ,$SEALINGDATE		
					 ,$SEALINGTIME
					 ,$STAMPA_ID
		 			 ,$STAMPB_ID
					 ,$UNSEALING_STAMP_ID )
	{
		$Run = true;
		if (!intval($STAMPA_ID))			{ $Run = false; echo "<br>Error! STAMPA_ID:$STAMPA_ID";};
		if (!intval($STAMPB_ID))			{ $Run = false; echo "<br>Error! STAMPB_ID:$STAMPB_ID";};
		if (!intval($EMPLOYEE_ID))			{ $Run = false; echo "<br>Error! EMPLOYEE_ID:$EMPLOYEE_ID";};
		if (!intval($UNSEALING_STAMP_ID))	{ $Run = false; echo "<br>Error! UNSEALING_STAMP_ID:$UNSEALING_STAMP_ID";};
		
		if ($Run)
		{
			
		}
	}

	/*ComingArticleToStore(
			$_REQUEST["DocDate"],
			$_REQUEST["Employee_ID"],
			$_REQUEST["Article_ID"]);
			*/

}