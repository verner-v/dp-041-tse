  <div class="wrap1">
 <div style="margin-left: 40px;margin-top:10px;"><b>Заполнение данных о контрагенте:</b></div>
<?php echo Form::open('/fiscal/main/contragentadd'); ?>
<div style="width: 450px;">
			<div class="categoryAg" style="float: left;">
			<div class="lable">Категория контрагента:</div>
				<?php echo Form::select('client_type_id_add',$client_type,''); ?>
			</div>
			<div style="float: right; margin-right: 50px;">
				<div class="lable">ЕДРПОУ:</div>
				<input name="edrpou_add" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: left;">
				<div class="lable">Наименование контрагента:</div>
				<input name="name_add" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: right;margin-right: 50px;" >
				<div class="lable">Форма собственности:</div>
				<input name="ownership_add" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div >
				<div class="lable">Юридический адрес:</div>
				<div ><textarea name="uaddress_add" cols="35" rows="3"
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
	<?php echo Form::close();?>	
	</div>


<!-- Кнопка закрытия формы  -->
<script type="text/javascript">
function closeMega1() {
	$('.wrap1').css('display','none');
}
</script>


<!--Окно "Редактировать" -->
 <div class="wrap2">
 <div style="margin-left: 40px;margin-top:10px;"><b>Редактировать данные о контрагенте:</b></div>
<?php echo Form::open('/fiscal/main/contragentedit'); ?>
<div style="width: 450px;">
			<div class="categoryAg" style="float: left;">
			
			<div class="lable">Категория контрагента:</div>
				<?php echo Form::select('client_type_id_edit',$client_type,''); ?>
			</div>
			<div style="float: right; margin-right: 50px;">
				<div class="lable">ЕДРПОУ:</div>
				<input id="edrpou_edit" name="edrpou_edit" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: left;">
				<div class="lable">Наименование контрагента:</div>
				<input id="name_edit" name="name_edit" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div style="float: right;margin-right: 50px;" >
				<div class="lable">Форма собственности:</div>
				<input id="ownership_edit" name="ownership_edit" size="20" maxlength="20"
					class="input" type="text">
			</div>
			<div >
				<div class="lable">Юридический адрес:</div>
				<div ><textarea id="uaddress_edit" name="uaddress_edit" cols="35" rows="3"
						class="input"></textarea></div>
			</div>
			
			<input type="hidden" name = 'client_id' value = '-1' id = 'client_id' >
			
			
			
			
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
<?php echo Form::close();?>

<!-- Кнопка закрытия формы  -->
<script type="text/javascript">
function closeMega2() {
	$('.wrap2').css('display','none');
}
</script>


<h4 class="" style="margin-left: 40px;">Контрагенты</h4>
<?php echo Form::open('/fuscal/main/stuff') ?>
 
  <div style="float:left;">
    <div>Выберите категорию контрагента:</div>
    
		<?php echo Form::select('jqclienttype',$client_type,'',array('id'=>'jqclienttype')); ?>
									
    <div> Контрагенты:</div>
    	<?php echo Form::select('jqclients',array('-1'=>'Выберите категорию'),'',array('id'=>'jqclients')); 	?>
    <div>Юридический адрес:</div>
     	<textarea id='uaddress' cols="40" style=" width:400px; height: 50px;"></textarea>
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
			 
			var fieldVal = $("#jqclients option:selected").val();
			 
			$.ajax({
				type : 'post',
				url : '/ajax/getclientbyid/',
				data : ({"client_id":fieldVal}),
				success : 
					function(msg){
						var obj = $.parseJSON(msg);
						$("#client_id").val(obj.ID);
						$("#client_type_id_edit").val(obj.CLIENT_TYPE_ID);
						$("#edrpou_edit").val(obj.EDRPOU);
						$("#name_edit").val(obj.NAME);
						$("#ownership_edit").val(obj.OWNERSHIP);
						$("#uaddress_edit").val(obj.UADDRESS);
					}
			});

			
		   $('.wrap2').show(500);
	    });
	});
</script>

  <div class="padd">
  <a href='#'><button class="btn" type="button" id="edit" >Редактировать</button></a></div> 
 <div><button class="btn" type="button" id="Close">Удалить</button></div> 
</div>    
<?php echo form::close() ?>