<h2 class="a-center">Исполнители</h2>

<table>
	<thead>
	<tr>
		<th width="70%">
			Наименование
		</th>
		<th width="30%">
			Подряд
		</th>
	</tr>
	</thead>
	<tbody>
		<?php
			if(isset($executers))
			{
				foreach($executers as $executer)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/editexecuter/<?php echo $executer['ID_EXECUTER']?>"> <?php echo $executer['FIO'] ?> </a>
							</td>
							<td>
								<?php echo $executer['NAME']; ?>
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
