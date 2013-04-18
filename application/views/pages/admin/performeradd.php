<h2 class="a-center">Добавление исполнителя</h2>

<?php echo form::open('admin/performeradd'); ?>
	
	<div class="col-left-30">
		<?php echo form::label('contractor_id','Подряд:'); ?>
	</div>
	<div class="col-right-70">
		<?php echo form::select('contractor_id',array_combine($arr_contractor_id,$arr_contractor_name),'',array('id'=>'contractor_id')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('notusedname','ФИО:'); ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('notusedname','',array('id'=>'notusedname')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('phonenumber','Телефон:'); ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('phonenumber','',array('id'=>'phonenumber')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('position','Должность:'); ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('position','',array('id'=>'position')); ?>
	</div>
				    
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Добавить'); ?>
    	<?php echo form::submit('submit','Отменить'); ?>
  	</div>
	<?php echo form::close(); ?>