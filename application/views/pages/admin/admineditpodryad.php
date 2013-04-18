<h2 class="a-center">Редактировать подрядную организацию</h2>

<?php echo form::open('admin/updatepodryad') ?>
<?php foreach ($podryads as $podryad) { ?>
	<div class="col-left-30">
		<?php echo form::label('city','Город') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('city',$podryad['CITY'],array('id'=>'city')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('address','Адрес') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('address',$podryad['ADDRESS'],array('id'=>'address')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('telephon','Телефон') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('telephon',$podryad['TELEPHON'],array('id'=>'telephon')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('contact_face','Контактное лицо') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('contact_face',$podryad['CONTACT_FACE'],array('id'=>'contact_face')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('name','Название') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('name',$podryad['NAME'],array('id'=>'name')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('remove','Удалить') ?> :
	</div>
	<div class="col-right-70">
		<?php	
			if( count($enabled_units) == 0) 
			{
				echo 'Нет объектов';
			}
			 foreach($enabled_units as $unit) {?>
			<?php echo form::checkbox('unit_remove[]',$unit['ID_UNIT'],FALSE); echo $unit['NAME']; ?>
			<br /> 		
		<?php } ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('add','Добавить') ?> :
	</div>
	<div class="col-right-70">
		<?php foreach($all_units as $unit) {?>
			<?php echo form::checkbox('unit_add[]',$unit['ID_UNIT'],FALSE); echo $unit['NAME']; ?> 	
			<br />	
		<?php } ?>
	</div>
	
	<?php echo form::hidden('id_podryad',$id_podryad) ?>
	
<?php } ?>
		    
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Сохранить'/*,array('onClick'=>'return MessageBox("Ваша заявка принята!")')*/); ?>
    	<?php echo form::submit('submit','Отменить'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
    	<?php echo form::submit('submit','Выход'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
  	</div>
	<?php echo form::close() ?>