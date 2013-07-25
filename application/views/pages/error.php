<div class="a-center">
	<h2 > <?php
				if(is_array($message))
				{
					foreach($message as $item)
					{
						echo $item.'<br/>';
					}
				}
				else
				
		 			echo $message; 
		 ?>
	</h2>
</div>
<div class="a-center">
	<input type="button" value="Назад" onClick="window.history.back() ;"> 
</div>
