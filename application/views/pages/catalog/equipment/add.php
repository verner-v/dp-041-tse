<form id="form" class="form-horizontal" action="<?php echo URL::base().'catalog/equipment/add'; ?>" method="POST">
	<fieldset>
		<div id="legend">
			<legend class="">Добавить модель</legend>
		</div>
				
		<div class="control-group">
			<label class="control-label" for="ID_TYPE">Тип оборудования</label>
			<div class="controls">
				<!-- <input type="text" id="ID_TYPE" name="ID_TYPE" placeholder="" class="input-medium" /> -->
				<?php  echo Form::select('ID_TYPE',array_combine($arr_id,$arr_name),'',array('id'=>'ID_TYPE','class'=>'ajx_brand')); ?>
			</div>
		</div>

		
		<div class="control-group">
			<label class="control-label" for="ID_BRAND">BRAND</label>
			<div class="controls">
				<!-- <input type="text" id="ID_BRAND" name="ID_BRAND" placeholder="" class="input-medium" /> -->
				<?php  echo Form::select('ID_BRAND',array('-1'=>'Выберите тип'),'',array('id'=>'ID_BRAND')); ?>
			</div>
		</div>
		
		<div class="control-group">
			<!-- Password-->
			<label class="control-label" for="NAME">NAME</label>
			<div class="controls">
				<input type="text" id="NAME" name="NAME" placeholder="" class="input-medium" value = "hello" />
			</div>
		</div>
		
		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button class="btn btn-success">Сохранить</button>
			</div>
		</div>

	</fieldset>
</form>