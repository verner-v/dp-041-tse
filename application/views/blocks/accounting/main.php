<div class="w1ell">
	
	<?php
	if(isset($changes) && (count($changes) > 0)) : 
	?>
	
	<table class="table table-condensed table-striped" >
		<caption><h5>Изменения</h5></caption>
		<thead>
			<tr>
				<th>
					#
				</th>
					
				<th>
					OPERATION
				</th>
				
				<th>
					TABLE_ID
				</th>
				
				<th >
					ROW_ID
				</th>
				
				<th >
					NAME
				</th>
				
				<th >
					IP
				</th>
				
				<th style="width: 18px;"></th>
		
			</tr>
		</thead>
		<tbody>
		<?php 
				foreach($changes as $item) :
					?>
						<tr>
							<td>
								<?php echo $item['ID_SYNCHRO'];?> 
							</td>
							<td>
								<?php echo $item['OPERATION']; ?>
							</td>
							<td>
								<?php echo $item['TABLE_ID']; ?>
							</td>
							<td>
								<?php echo $item['ROW_ID'];?>
							</td>
							<td>
								<?php // echo //$item['NAME'];?>
							</td>
							<td>
								<?php //echo //$item['IP']; ?>
							</td>
							<td>
								<a href="#" > <i class="icon-trash"></i> </a>
							</td>
						</tr>
					<?php 
				endforeach;
		?>
		</tbody>
	</table>
<?php 
	endif;
?>
</div>