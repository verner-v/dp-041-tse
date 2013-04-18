<!-- Для манагера "Справочники -> Оборудование" -->
 <div class="wrap">
 <h1 class='contact-title'>Новые данные о товаре:</h1>
<form action="send.php" method="post">
<div>
<div class="lable">Категория товара:</div>
				<div class="input"><input name="name" size="20" maxlength="20"
					class="input" type="text" value=" "></div>
			
			<div>
				<div class="lable">Наименование модели:</div>
				<div class="input"><input name="email" size="20" maxlength="20"
					class="input" type="text"></div>
			</div>
			<div>
				<div class="lable">Производитель:</div>
				<div class="input"><input name="subject" size="20" maxlength="20"
					class="input" type="text"></div>
			</div>
			<div>
				<div class="lable">Описание комплектации:</div>
				<div class="input"><textarea name="text_message" cols="30" rows="10"
						class="input"></textarea></div>
			</div>
			
			<div style="float: left;">
				
					<button class="btn btn-info" name="mail_submit" type="submit"
						value="Отправить сообщение" > Отправить</button>
				</div>
			<div style="float: right;">	
					<button class="btn" style="float: right;margin-right: 95px;" name="close" type="button"
						value="Закрыть" onclick="closeMega();" >Закрыть </button> </div>	
			</div>
		
	</div>
</form>

<script type="text/javascript">

function closeMega() {
	$('.wrap').css('display','none');
}

</script>
 
 </div>
<h4 class="" style="margin-left: 40px;">Оборудование</h4>
<?php echo Form::open('/manager/stuff') ?>
 <script src='asserts/js/jquery.js' type='text/javascript'></script>
  <div style="float:left;">
    <div>Выберите категорию товара:</div>
    <select>
		<option>Пломбы для фискальных регистраторов</option>
		<option>Регистратор расчетных операций</option>
	</select>
	
    <div> Модель оборудования:</div>
    	<textarea  cols="40" style=" width:400px; height: 100px;resize: none;"></textarea>
    <div>Версия ПО:</div>
     	<input type="text" value=''/>
	<div>Описание комплектации:</div>
     	<input type="text" value=''/>
	<div>
	  	<button class="btn btn-info" type="button" id="Save">Сохранить</button>
	  	<button class="btn btn-info" type="button" id="Close">Закрыть</button>
    </div>
  </div>
  
  <div class="rbuttons">
  
    <div class="mybtn">
    <a href="#"><button class="btn" type="button" id="save" >Добавить</button></a>


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
	<div class="padd"><button class="btn" type="button" id="Close" >Редактировать</button></div> 
	<div><button class="btn" type="button" id="Close">Удалить</button></div> 
  </div>

  

    
     <?php echo form::close() ?>
