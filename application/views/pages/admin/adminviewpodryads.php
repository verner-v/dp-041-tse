<h2 class="a-center">Подрядные организации</h2>

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
			if(isset($podryads))
			{
				foreach($podryads as $podryad)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/editpodryad/<?php echo $podryad['ID_PODRYAD']?>"> <?php echo $podryad['NAME'] ?> </a>
							</td>
							<td>
								<?php echo $podryad['CITY']; ?>
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
