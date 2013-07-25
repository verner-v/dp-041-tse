<body>

<?php

include_once("DBContext.inc");
include_once("InsDoc_Stamp_Store.php");
include_once("InsStamp.php");

// Оформление прихода пломб на склад

// DocDate	      		- дата оформления документа
// Employee_ID      	- ответственный работник
// Series[] VarChar(2)	- серия пломбы
// Number[] int		  	- номер пломбы
// Price[]  decimal(5,2)- цена пломбы

	function AddStampToStore($DocDate,$Employee_ID,$Series,$Number, $Price)
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
?>
</body>
