<h2 class="a-center">Изменить пользователя</h2>

<?php echo form::open('admin/edituser') ?>

	<div class="col-left-30">
		<?php echo form::label('login','Login') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('login',$user['username'],array('id'=>'login')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('pwd','Password') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('pwd','',array('id'=>'pwd','type'=>'password')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php 	echo form::label('email', 'E-Mail: '); ?>
	</div>
	<div class="col-right-70">
		<?php echo form::input('email', $user['email'], array('id' => 'email')); ?>
	</div>

	<div class="col-left-30">
		<?php echo form::label('fio','ФИО') ?> :
	</div>
	
	<div class="col-right-70">
		<?php echo form::input('fio', $user['fio'], array('id' => 'fio')); ?>
	</div>	
	
	<?php echo form::hidden('id_user',$user['id']);?>	
		
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Сохранить'/*,array('onClick'=>'return MessageBox("Ваша заявка принята!")')*/); ?>
    	<?php echo form::submit('submit','Отменить'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
    	<?php echo form::submit('submit','Выход'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
  	</div>
	<?php echo form::close() ?>