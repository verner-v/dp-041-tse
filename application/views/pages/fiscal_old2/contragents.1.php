  <div class="wrap1">
 <div style="margin-left: 40px;margin-top:10px;"><b>Заполнение данных о контрагенте:</b></div>
<form action="send.php" method="post">
<div style="width: 450px;">
			<div class="categoryAg" style="float: left;">
			<div class="lable">Категория контрагента:</div>
				<input name="name" size="20" maxlength="20"
					class="input" type="text" value=" ">
			</div>
			<div style="float: right; margin-right: 50px;">
				<div class="lable">ЕДРПОУ:</div>
				<input name="email" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: left;">
				<div class="lable">Наименование контрагента:</div>
				<input name="subject" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: right;margin-right: 50px;" >
				<div class="lable">Форма собственности:</div>
				<input name="subject" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div >
				<div class="lable">Юридический адрес:</div>
				<div ><textarea name="text_message" cols="35" rows="3"
						class="input"></textarea></div>
			</div>
			<table class="table table-striped">
   				<thead>
    				<tr>
    					<th>Дата с</th>
    					<th>Дата по</th>
    					<th>№</th>
    					<th>Период ТО</th>
    				</tr>
    			</thead>
    		<tbody >
    			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
   			 	</tr>
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    			</tr>
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>  	
    	<table class="table table-striped">
   				<thead>
    				<tr>
    					<th>Подразделение</th>
    					<th>Адрес</th>
    					
    				</tr>
    			</thead>
    		<tbody >
    			<tr>   				
    				<td>111</td>
    				<td>222</td>
   			 	</tr>
     			<tr>   				
   				<td>111</td>
    				<td>222</td>
    			</tr>
     			<tr>   				
    				<td>111</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>			
			<div style="float: left;">				
					<button class="btn btn-info" name="mail_submit" type="submit"
						value="Отправить сообщение" > Добавить</button>
				</div>
			<div style="float: right;margin-right: 145px;">	
					<button class="btn" name="close" type="button"
						value="Закрыть" onclick="closeMega1();">Отмена </button> </div>	
			</div>	
	</div>
</form>

<!-- Кнопка закрытия формы  -->
<script type="text/javascript">
function closeMega1() {
	$('.wrap1').css('display','none');
}
</script>


<!--Окно "Редактировать" -->
 <div class="wrap2">
 <div style="margin-left: 40px;margin-top:10px;"><b>Редактировать данные о контрагенте:</b></div>
<form action="send.php" method="post">
<div style="width: 450px;">
			<div class="categoryAg" style="float: left;">
			<div class="lable">Категория контрагента:</div>
				<input name="name" size="20" maxlength="20"
					class="input" type="text" value=" ">
			</div>
			<div style="float: right; margin-right: 50px;">
				<div class="lable">ЕДРПОУ:</div>
				<input name="email" size="20" maxlength="20"
					class="input" type="text"></div>
			</div>
			<div style="float: left;">
				<div class="lable">Наименование контрагента:</div>
				<input name="subject" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: right;margin-right: 60px;" >
				<div class="lable">Форма собственности:</div>
				<input name="subject" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div >
				<div class="lable">Юридический адрес:</div>
				<div ><textarea name="text_message" cols="35" rows="3"
						class="input"></textarea></div>
			</div>
			<table class="table table-striped">
   				<thead>
    				<tr>
    					<th>Дата с</th>
    					<th>Дата по</th>
    					<th>№</th>
    					<th>Период ТО</th>
    				</tr>
    			</thead>
    		<tbody >
    			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
   			 	</tr>
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    			</tr>
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>  	
    	<table class="table table-striped">
   				<thead>
    				<tr>
    					<th>Подразделение</th>
    					<th>Адрес</th>
    					
    				</tr>
    			</thead>
    		<tbody >
    			<tr>   				
    				<td>111</td>
    				<td>222</td>
   			 	</tr>
     			<tr>   				
   				<td>111</td>
    				<td>222</td>
    			</tr>
     			<tr>   				
    				<td>111</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>			
			<div style="float: left;">				
					<button class="btn btn-info" name="mail_submit" type="submit"
						value="Отправить сообщение" > Добавить</button>
				</div>
			<div style="float: right;margin-right: 145px;">	
					<button class="btn" name="close" type="button"
						value="Закрыть" onclick="closeMega2();">Отмена </button> </div>	
			</div>	
	</div>
</form>

<!-- Кнопка закрытия формы  -->
<script type="text/javascript">
function closeMega2() {
	$('.wrap2').css('display','none');
}
</script>


<h4 class="" style="margin-left: 40px;">Контрагенты</h4>
<?php echo form::open('/manager/stuff') ?>
 <script src='asserts/js/jquery.js' type='text/javascript'></script>
  <div style="float:left;">
    <div>Выберите категорию контрагента:</div>
    <select>
		<option>Поставщик/Производитель</option>
		<option>Покупатель</option>
	</select>								
    <div> Контрагенты:</div>
    	<select>
		<option>АТБ Маркет</option>
		<option>РУШ Ева</option>
	</select>	
    <div>Юридический адрес:</div>
     	<textarea  cols="40" style=" width:400px; height: 50px;"></textarea>
	<div>Фактический адрес:</div>
     	<textarea  cols="40" style=" width:400px; height: 50px;"></textarea>
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
		   $('.wrap1').show(500);
	    });
	});
</script>
	
	
<script>
	$(function(){	
		$('#edit').click(
		function()
		{
		   $('.wrap2').show(500);
	    });
	});
</script>

  <div class="padd">
  <a href='#'><button class="btn" type="button" id="edit" >Редактировать</button></a></div> 
 <div><button class="btn" type="button" id="Close">Удалить</button></div> 
</div>    
<?php echo form::close() ?>