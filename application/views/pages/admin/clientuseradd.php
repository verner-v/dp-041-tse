<h2 class="a-center">Добавить пользователя-заказчика</h2>

<?php echo form::open('admin/clientuseradd'); ?>
	
	<div class="col-left-30">
		<?php echo form::label('client_id','Клиент:'); ?>
	</div>
	
	<div class="col-right-70">
   		<?php echo form::select('client_id',array_combine($arr_client_id,$arr_client_name),'',array('id'=>'client_id')); ?>
	</div>
		
	<div class="col-left-30">
		<?php echo form::label('username','Login:'); ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('username','',array('id'=>'username')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('password','Password:'); ?>
	</div>
	<div class="col-right-70">
		<?php echo form::input('password','',array('id'=>'password','type'=>'password')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php 	echo form::label('email', 'E-Mail:'); ?>
	</div>
	<div class="col-right-70">
		<?php echo form::input('email', '', array('id' => 'email')); ?>
	</div>
	<div class="col-left-30">
		<?php echo form::label('fullname', 'ФИО:'); ?>
	</div>
	<div class="col-right-70">
		<?php echo form::input('fullname', '', array('id' => 'fullname')); ?>
	</div>
	
			
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Добавить'); ?>
    	<?php echo form::submit('submit','Отменить'); ?>
  	</div>
	<?php echo form::close(); ?>