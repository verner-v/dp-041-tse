<h2 class="a-center">Редактировать исполнителя</h2>

<?php echo form::open('admin/updateexecuter') ?>
	
	<div class="col-left-30">
		<?php echo form::label('fio','ФИО') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('fio',$executer['FIO'],array('id'=>'fio')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('telephon','Телефон') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('telephon',$executer['TELEPHON'],array('id'=>'telephon')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('post','Пост') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('post',$executer['POST'],array('id'=>'post')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('email','Эл.почта') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('email',$executer['EMAIL'],array('id'=>'email')); ?>
	</div>
	
	<?php echo form::hidden('id_executer',$executer['ID_EXECUTER']);?>
				    
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Сохранить'/*,array('onClick'=>'return MessageBox("Ваша заявка принята!")')*/); ?>
    	<?php echo form::submit('submit','Отменить'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
    	<?php echo form::submit('submit','Выход'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
  	</div>
	<?php echo form::close() ?>