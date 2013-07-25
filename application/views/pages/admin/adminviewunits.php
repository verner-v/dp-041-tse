<h2 class="a-center">Объекты</h2>

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
			if(isset($units))
			{
				foreach($units as $unit)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/editunit/<?php echo $unit['ID_UNIT']?>"> <?php echo $unit['NAME'] ?> </a>
							</td>
							<td>
								<?php echo $unit['CITY']; ?>
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
