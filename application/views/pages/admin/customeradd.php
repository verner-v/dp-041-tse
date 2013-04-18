<h2 class="a-center">Добавить объект</h2>

<?php echo form::open('admin/customeradd') ?>
	
	<div class="col-left-30">
		<?php echo form::label('client_id','Заказчик:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::select('client_id',array_combine($arr_client_id,$arr_client_name),'',array('id'=>'client_id')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('region_id','Регион:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::select('region_id',array_combine($arr_region_id,$arr_region_name),'',array('id'=>'region_id','class'=>'jqtestclass')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('city_id','Город:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::select('city_id',/*array_combine($arr_city_id,$arr_city_name)*/array('-1'=>'Выберите регион'),'',array('id'=>'city_id')); ?>
	</div>
		
	<div class="col-left-30">
		<?php echo form::label('address','Адрес:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('address','',array('id'=>'address')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('phonenumber','Телефон:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('phonenumber','',array('id'=>'phonenumber')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('name','Название:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('name','',array('id'=>'name')); ?>
	</div>
 
	<div class="col-left-30">
		<?php echo form::label('name_alternative','Альтернативное название:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::input('name_alternative','',array('id'=>'name_alternative')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('note','Примечание:') ?> 
	</div>
	<div class="col-right-70">
		<?php echo form::textarea('note','',array('id' => 'note','rows'=>'7','cols'=>'75'));?>
	</div>
				    
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Добавить'); ?>
    	<?php echo form::submit('submit','Отменить'); ?>
  	</div>
	<?php echo form::close() ?>