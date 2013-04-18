<h2 class="a-center">Редактирование заказчика</h2>

<?php echo form::open('admin/updatezakazchik') ?>
<?php foreach ($zakazchiks as $zakazchik) { ?>
	<div class="col-left-30">
		<?php echo form::label('city','Город') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('city',$zakazchik['CITY'],array('id'=>'city')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('address','Адрес') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('address',$zakazchik['ADDRESS'],array('id'=>'address')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('telephon','Телефон') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('telephon',$zakazchik['TELEPHON'],array('id'=>'telephon')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('contact_face','Контактное лицо') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('contact_face',$zakazchik['CONTACT_FACE'],array('id'=>'contact_face')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('name','Название') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('name',$zakazchik['NAME'],array('id'=>'name')); ?>
	</div>
	
	<?php echo form::hidden('id_zakazchik',$id_zakazchik) ?>

<?php }?>	
		    
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Сохранить'/*,array('onClick'=>'return MessageBox("Ваша заявка принята!")')*/); ?>
    	<?php echo form::submit('submit','Отменить'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
    	<?php echo form::submit('submit','Выход'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
  	</div>
	<?php echo form::close() ?>