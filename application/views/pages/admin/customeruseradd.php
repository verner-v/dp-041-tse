<h2 class="a-center">Добавить пользователя для объекта</h2>

<?php echo form::open('admin/customeruseradd') ?>
	
	<div class="col-left-30">
		<?php echo form::label('client_id','Клиент:'); ?>
	</div>
	
	<div class="col-right-70">
   		<?php echo form::select('client_id',array_combine($arr_client_id,$arr_client_name),'',array('id'=>'client_id','class'=>'jqtestclientclass')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('customer_id','Объект:'); ?>
	</div>
	
	<div class="col-right-70">
   		<?php echo form::select('customer_id',/*array_combine($arr_customer_id,$arr_customer_name)*/array('-1'=>'Выберите клиента'),'',array('id'=>'customer_id')); ?>
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
    	<?php echo form::submit('submit','Выход'); ?>
  	</div>
	<?php echo form::close(); ?>