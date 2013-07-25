<!-- Для манагера "Справочники -> Оборудование" -->


<!-- Для "Добавить" в Справочнике -->
<div class="wrap">
	<div style="margin: 20px 0 0 40px">
		<b>Заполните новые данные о модели:</b>
	</div>
	<form action="send.php" method="post">
		<div>
			<div class="lable">Категория товара:</div>
			<input name="name" size="20" maxlength="20" class="input" type="text"
				value=" ">

			<div>
				<div class="lable">Наименование модели:</div>
				<input name="email" size="20" maxlength="20" class="input"
					type="text">
			</div>
			<div>
				<div class="lable">Производитель:</div>
				<select>
					<option>Производитель 1</option>
					<option>Производитель 2</option>
					<option>Производитель 3</option>
				</select>
			</div>
			<div>
				<div style="float: left;">
					<div class="lable">Версия ПО:</div>
					<textarea name="text_message" cols="10" rows="5" class="input"></textarea>
				</div>
				<div style="float: right; margin-right: 50px;">
					<div class="lable">Описание комплектации:</div>
					<textarea name="text_message" cols="20" rows="5" class="input"></textarea>
				</div>
			</div>

			<div style="float: left; margin-left: 0px;">

				<button class="btn btn-info" name="mail_submit" type="submit"
					value="Отправить сообщение">Отправить</button>
			</div>
			<div style="float: right;">
				<button class="btn" style="float: right; margin-right: 150px;"
					name="close" type="button" value="Закрыть" onclick="closeMega();">Закрыть
				</button>
			</div>
		</div>

</div>
</form>

<script type="text/javascript">

function closeMega() {
	$('.wrap').css('display','none');
}

</script>

</div>


<!-- Для "Редактировать" в Справочники -->
<div class="wrap3">
	<div style="margin: 20px 0 0 40px">
		<b>Редактировать данные о модели:</b>
	</div>
	<form action="send.php" method="post">
		<div>
			<div class="lable">Категория товара:</div>
			<input name="name" size="20" maxlength="20" class="input" type="text"
				value=" ">

			<div>
				<div class="lable">Наименование модели:</div>
				<input name="email" size="20" maxlength="20" class="input"
					type="text">
			</div>
			<div>
				<div class="lable">Производитель:</div>
				<select>
					<option>Производитель 1</option>
					<option>Производитель 2</option>
					<option>Производитель 3</option>
				</select>
			</div>
			<div>
				<div style="float: left;">
					<div class="lable">Версия ПО:</div>
					<textarea name="text_message" cols="10" rows="5" class="input"></textarea>
				</div>
				<div style="float: right; margin-right: 50px;">
					<div class="lable">Описание комплектации:</div>
					<textarea name="text_message" cols="20" rows="5" class="input"></textarea>
				</div>
			</div>

			<div style="float: left; margin-left: 0px;">

				<button class="btn btn-info" name="mail_submit" type="submit"
					value="Отправить сообщение">Отправить</button>
			</div>
			<div style="float: right;">
				<button class="btn" style="float: right; margin-right: 150px;"
					name="close" type="button" value="Закрыть" onclick="closeMega3();">Закрыть
				</button>
			</div>
		</div>

</div>
</form>

<script type="text/javascript">

function closeMega3() {
	$('.wrap3').css('display','none');
}

</script>

</div>
<h4 class="" style="margin-left: 40px;">Оборудование</h4>
<?php echo Form::open('/manager/stuff') ?>
<script
	src='asserts/js/jquery.js' type='text/javascript'></script>
<div style="float: left;">
	<div>Выберите категорию товара:</div>
	<select>
		<option value = 1 selected>Пломбы для фискальных регистраторов</option>
		<option value = 2>Регистратор расчетных операций</option>
	</select>

	<div>Модель оборудования:</div>
	
	<?php //echo form::select('problemcategory_id',array_combine($arr_problemcategory_id,$arr_problemcategory_name),'',array('id'=>'problemcategory_id','class'=>'jqtestproblemcategoryclass')); ?>
			<?php //echo form::select('problemsubcategory_id',array('-1'=>'Выберите категорию'),'',array('id'=>'problemsubcategory_id')); 	?>
	
	<select>
		<option>Производитель 1</option>
		<option>Производитель 2</option>
		<option>Производитель 3</option>
	</select>
	<div>Версия ПО:</div>
	<input type="text" value='' />
	<div>Описание комплектации:</div>
	<textarea name="text_message" cols="37" rows="10" class="input"></textarea>
	<div>
		<button class="btn btn-info" type="button" id="Save">Сохранить</button>
		<button class="btn btn-info" type="button" id="Close">Закрыть</button>
	</div>
</div>

<div class="rbuttons">

	<div class="mybtn">
		<a href="#"><button class="btn" type="button" id="save">Добавить</button>
		</a>


	</div>
	<script>

	$(function(){	
		$('#save').click(
		function()
		{
		   $('.wrap').show(500);
				});
	});
	
</script>

	<script>
	$(function(){	
		$('#edit').click(
		function()
		{
		   $('.wrap3').show(500);
	    });
	});
</script>
	<div class="padd">
		<button class="btn" type="button" id="edit">Редактировать</button>
	</div>
	<div>
		<button class="btn" type="button" id="Close">Удалить</button>
	</div>
</div>




<?php echo form::close() ?>
