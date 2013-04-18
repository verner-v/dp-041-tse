<div class="container">
<?php echo form::open('customer/archiv',array('class'=>'form-horizontal')); ?>

<div class="row">
	<div class="span6 offset3">
		<div class="row">
			<div class="span3">
				<span class="help-block">Начало периода</span>
				<div id="dpl" class="input-append date" data-date-format="dd-mm-yyyy" data-date="">
				 	<input class="span2" type="text" readonly="" value="" name="left_date" size="16">
					<span class="add-on"><i	class="icon-calendar"></i> </span>
				</div>
				
			</div>

			<div class="span3">
				<span class="help-block">Конец периода</span>
				<div id="dpr" class="input-append date" data-date-format="dd-mm-yyyy" data-date="">
					<input class="span2" type="text" readonly="" value="" name="right_date" size="16"> 
					<span class="add-on"><i	class="icon-calendar"></i> </span>
				</div>
			</div>
		</div>
		
		<div class="row">
		
			<div class="span3">
				<span class="help-block">Тип заявки</span>
				<?php 
						echo form::select('ticket_type',array_combine
								(
									array('0','1','2','3','4'),
									array(
										'Все заявки',
										'Заправки',
										'ТО принтеров',	
										'ТО комп',
										'Другие'
											)
								),0,array('id'=>'ticket_type','class'=>'span2'));
						?>
			</div>
			<div class="span3">
				<span class="help-block">Вид сортировки</span>
				<?php 
					echo form::select('sort_type',array_combine
							(
									array('0','1'),
									array(
											'По возрастанию',
											'По убыванию'
									)
							),0,array('id'=>'sort_type','class'=>'span2'));
					?>
			</div>
		</div>
		
				
		<div class="form-actions">
	    	<button class="btn btn-success pull-right" type="submit" name="submit" value="Поиск">Поиск</button>
		</div>
		
	</div>
</div>
		<?php 
			echo form::hidden('sort_by',1);
		?>
<?php echo form::close(); ?>

	<?php if(isset($closed_tickets) && (count($closed_tickets) > 0))
	{
	
	?>
	<div class="well">
		<table class="table table-condensed">
			<caption><h5>Закрытые заявки</h5></caption>
			<thead>
			<tr>
					<th width="3%">#</th>
					<th width="3%">#</th>
					<th>Доп.№</th>
					<th width="15%">Создана</th>
					<th width="15%">Закрыта</th>
					<th>Описание</th>
					<th>Выполнена работа</th>
					<th style="width: 18px;"></th>
					
				</tr>
			</thead>
			
			<tbody>
			<?php
			if(isset($closed_tickets))
			{
				$i = 1;
				foreach($closed_tickets as $ticket)
				{
					?>
						<tr>
						
							<td >
								<?php echo $i; ?>
							</td>
							<td >
								<?php echo $ticket['ticket_id'];?>
							</td>
							<td >
								<?php echo $ticket['additional_number'];?>
							</td>
							
							<td >
								<?php echo $ticket['datetime_start'];?>
							</td>
							<td>
								<?php echo $ticket['datetime_create'];?>
							</td>
			
							<td >
								<?php echo $ticket['description'];?>
							</td>
							<td>
								<?php echo $ticket['worked'];?>
							</td>
							
							<td >
								<a href="<?php echo URL::base(); ?>customer/viewclosedticket/<?php echo $ticket['ticket_id']?>">
								<i class=" icon-eye-open"></i>
								</a>
							</td>

						</tr>
					<?php 
					$i++;
				}
			} 
			?>
			</tbody>
		
		</table>
	</div>
	<?php 
	}
	?>

</div>


