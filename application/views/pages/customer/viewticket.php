<div class="container">

<?php echo form::open('customer/commentadd',array('class'=>'form-horizontal')); ?>

	<div class="row">
		<div class="span4 offset4 ">
			<h4>Добавить комментарий</h4>
		</div>
	</div>

	<div class="row ">
		<div class="span4">
			<dl class="dl-horizontal">
				<dt>Описание</dt>
    			<dd><?php echo $description;?></dd>
			</dl>
		</div>
		
		<div class="span4">
			<dl class="dl-horizontal">
				<dt>Дата создания</dt>
    			<dd><?php echo $datetime_start;?></dd>
			</dl>
		</div>
		
		<div class="span4">
			<dl class="dl-horizontal">
				<dt>Пользователь</dt>
    			<dd><?php echo $user_fullname;?></dd>
			</dl>
		</div>
	</div>


	<div class="row">
		<div class="span7">
			<?php if( isset($arr_comment) && count($arr_comment) > 0) 
			{
			?>
			<dl class="dl-horizontal">
			<?php foreach($arr_comment as $item) 
				{
				?>
				<dt> <?php echo $item['datetime_create']; ?></dt> 
				<dd> <?php echo "[".$item['fullname']."]<".$item['name'].">".$item['text'];?> </dd>
	   			<?php
				}
				?>
    		</dl>
    		<?php 
			}
			?>
		</div>
		<div class="span4 well">
			<textarea class="span4" id="text" name="text"	placeholder="Введите комментарий" rows="3"></textarea>
			<button class="btn btn-info " type="submit" name="submit" value="Добавить">Добавить</button>
		</div>
	</div>

	<?php echo form::hidden('ticket_id',$ticket_id);?>
		
	<?php echo form::close(); ?>
</div>

