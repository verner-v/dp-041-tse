<div class="w1ell">
	<div class="qwe">

		<?php
		if(isset($var) && (count($var) > 0)) :
			
		?>

		<table class="table table-condensed">
			<caption>
				<h5>Открытые заявки</h5>
			</caption>
			<thead>
				<tr>
					<th>Ид</th>
					<th>NAME</th>
					<th>IP</th>

					<th style="width: 18px;"></th>

				</tr>
			</thead>
			<tbody>
				<?php 
				foreach($var as $item):
				?>
				<tr>
					<td><?php echo $item['ID_SHOPSERVER'];?> </a></td>
					<td><?php echo $item['NAME']; ?></td>
					<td><?php echo $item['IP']; ?></td>
					<td><a
						href="<?php echo URL::base(); ?>settings/shopserveredit/<?php echo $item['ID_SHOPSERVER']; ?>"><i
							class="icon-edit"></i>
					</a></td>
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





</div>


