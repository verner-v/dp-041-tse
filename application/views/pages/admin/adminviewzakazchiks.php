<h2 class="a-center">Заказчики</h2>

<table>
	<thead>
	<tr>
		<th width="70%">
			Наименование
		</th>
		<th width="30%">
			Город
		</th>
	</tr>
	</thead>
	<tbody>
		<?php
			if(isset($zakazchiks))
			{
				foreach($zakazchiks as $zakazchik)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/editzakazchik/<?php echo $zakazchik['ID_ZAKAZCHIK']?>"> <?php echo $zakazchik['NAME'] ?> </a>
							</td>
							<td>
								<?php echo $zakazchik['CITY']; ?>
							</td>
						</tr>
					<?php 
				}
			} 
			else
			{
				
			}
		?>
	</tbody>
</table>
