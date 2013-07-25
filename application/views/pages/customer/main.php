<div class="container">
	
	<div class="well">
	
	<?php
			if(isset($arr_ticket) && (count($arr_ticket) > 0))
			{
				?>
	
		<table class="table table-condensed">
			<caption><h5>Открытые заявки</h5></caption>
	<thead>
		<tr>
		<th width="4%">
			#
		</th>
		<th width="13%">
			Дата
		</th>
		<th width="15%">
			ФИО
		</th>
		<th >
			Описание
		</th>
		<th width="5%">
			Статус
		</th>
		<th style="width: 18px;"></th>
		
	</tr>
	</thead>
	<tbody>
		<?php 
				foreach($arr_ticket as $ticket)
				{
					?>
						<tr>
							<td>
								<?php echo $ticket['ticket_id'];?> </a>
							</td>
							<td>
								<?php echo $ticket['datetime_start']; ?>
							</td>
							<td>
								<?php echo $ticket['fullname']; ?>
							</td>
							<td>
								<?php echo $ticket['description'];?>
							</td>
							<td>
								<?php 
									switch($ticket['status'])
									{
										case -1: echo '<span class="label label-warning">Отк.</span>';
											break;
										case 0: echo '<span class="label label-success">В раб.</span>';
											break;
										default:
												echo '*';	
									}
								?>
							</td>
							<td>
							<a href="<?php echo URL::base(); ?>customer/viewticket/<?php echo $ticket['ticket_id']?>">
								<i class="icon-pencil"></i> 
							</a>
							</td>
						</tr>
					<?php 
				}
		?>
	</tbody>
</table>
<?php 

}

	else 
	{
		?>
		<h4>Открытых заявок нет</h4>
		<?php 
	}

?>
</div>
	
</div>


