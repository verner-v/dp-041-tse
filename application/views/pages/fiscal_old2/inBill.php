

 <div class="wrap1">
 <div style="margin-left: 40px;margin-top:10px;"><b>Заполнение данных о контрагенте:</b></div>
<div style="width: 450px;">
			<div class="categoryAg" style="float: left;">
			<div class="lable">Оборудование:</div>
				<?php echo Form::select('article_model_id_add',$article_model_id_add,'',array('id'=>'article_model_id_add')); ?>
				
			</div>
			<div style="float: right; margin-right: 50px;">
				<div class="lable">Версия ПО:</div>
				<?php echo Form::select('softversion_id_add',$softversion_id_add,'',array('id'=>'softversion_id_add')); 	?>
			</div>
			<div style="float: left;">
				<div class="lable">Дата производства:</div>
				<div id="datetimepicker5" class="input-append date">
    			<input data-format="dd/MM/yyyy" type="text" name="date_facture_add" id = "date_facture_add"></input>
    				<span class="add-on">
      					<i data-date-icon="icon-calendar"></i>
    				</span>
 			<script type="text/javascript">
  				$(function() {
    			$('#datetimepicker5').datetimepicker({
     		 	language: 'ru-RU'
    			});
 			 });
			</script> 
		</div>  
			</div>
			<div style="float: right;margin-right: 50px;" >
				<div class="lable">Zavod nomer:</div>
				<input name="zavod_number_add" size="20" maxlength="20"
					class="input" type="text" id = "zavod_number_add">
			</div>
				
			<div style="float: left;">				
					<button class="btn btn-info" name="mail_submit" type="button"
						value="Отправить сообщение" onClick="doMagicAdd();" > Добавить</button>
				</div>
			<div style="float: right;margin-right: 145px;">	
					<button class="btn" name="close" type="button"
						value="Закрыть" onclick="closeMega1();">Отмена </button> </div>	
			</div>
	
	</div>


<!-- Кнопка закрытия формы  -->
<script type="text/javascript">
function closeMega1() {
	$('.wrap1').css('display','none');
}

</script>

<script type="text/javascript">
function doMagicAdd() {
	var article_model_id = $('#article_model_id_add option:selected').val();
	var article_model_name = $('#article_model_id_add option:selected').text();
	var softversion_id = $('#softversion_id_add option:selected').val();
	var softversion_name = $('#softversion_id_add option:selected').text();
	
	var date_facture = $('#date_facture_add').val();
	var zavod_number = $('#zavod_number_add').val();


	$('#myTable > tbody:last').append('<tr> \
			<td><input type="hidden" name="article_model_id[]" value="' + article_model_id + '"/> '+ article_model_name +'</td> \
			<td><input type="hidden" name="softversion[]" value="' + softversion_id + '"/>' + softversion_name + '</td> \
			<td><input type="hidden" name="date_facture[]" value="' + date_facture + '"/>' + date_facture + '</td> \
			<td><input type="hidden" name="zavod_number[]" value="' + zavod_number + '"/>' + zavod_number + '</td></tr>');
	
	$('#article_model_id_add').val(0);
	$('#softversion_id_add').val(0);
	$('#date_facture_add').val('');
	$('#zavod_number_add').val('');
	
	$('.wrap1').css('display','none');
	
}

</script>





<h4 class='title_pad'><b>Приходная накладная:</b></h4>
<div class="navbar">
    <div class="navbar-inner_table">
    <div class="container-fluid">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
  
    <div class="nav-collapse collapse">
     <ul class="nav">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Создать<b class="caret"></b>
        <ul class="dropdown-menu">
      		<li><a href="<?php echo URL::base() ?>fiscal/main/inBill"> Приходная накладная</a></li>
      		<li><a href="<?php echo URL::base() ?>fiscal/main/inBillPlomb"> Приходная накладная(Пломбы)</a></li>
      		<li><a href="<?php echo URL::base() ?>fiscal/main/OutBill"> Расходная накладная</a></li>
   		</ul>
   		</li>
   		<li><a href="<?php echo URL::base() ?>fiscal/main/inBill">Изменить</a></li>
   		<li><a href="<?php echo URL::base() ?>fiscal/main/inBill">Удалить</a></li>
   		
   	       
        
   	   </li>
   	 </ul>
    </div>
  </div>
</div>
</div>

<!-- Основная форма -->
<?php echo Form::open('/fiscal/main/inBill');?>
   
	<div style="margin: 0;">
     
     <div style="float:right;margin-top:0px; margin-right: 380px;">Дата документа: &nbsp;&nbsp;   
       <div id="datetimepicker4" class="input-append date">
    			<input data-format="dd/MM/yyyy" type="text" name='date_doc'></input>
    				<span class="add-on">
      					<i data-date-icon="icon-calendar"></i>
    				</span>
 			<script type="text/javascript">
  				$(function() {
    			$('#datetimepicker4').datetimepicker({
     		 	language: 'ru-RU'
    			});
 			 });
			</script> 
		</div>  
     </div>
     
     <div style="float:">№ документа
       <input size=2> - </input>
       <input size=6> - </input>
       <input size=2></input>
     </div>
    </div>
      <br>  
<div class="padd">
 <div>
  <div class="alignFormL">
  <div>Склад:</div>
  <select name="store">
     <option value="1" >Основной склад</option>
  </select>
  </div>
  <div class="alignFormR">
  <div>Ответственный:</div>
  <select name="otv_employee">
     <option value="1" >Новиков В.В.</option>
  </select>
  </div>
  <div class="alignFormR">
  <div>Поставщик:</div>
  	<?php echo Form::select('procreator_id',$procreator_id,''); ?>
  </div>
  </div>
  </div>
 
  
 <div class="padd_table"></div>
  <!-- Таблицы  -->
  <div class="tbl4">
  <table id="myTable" class="table table-bordered" style="float: right">
   				<thead>
    				<tr>
    					<th>Наименование</th>
    					<th>Дата изготовл.</th>
    					<th>Завод.№</th>
    					<th>Кол-вс</th>
    				</tr>
    			</thead>
    		<tbody >
    			
    		</tbody>
    	</table>  	
    	
    	</div>
    	
    	<div style="float: left;margin-left:730px;">				
					<button class="btn btn-info" name="mail_submit" type="button" id="addbutton"
						value="Add" > Добавить</button>
		</div>
    	
    	<div style="float: left;margin-left:730px;">				
					<button class="btn btn-info" name="mail_submit" type="submit"
						value="Отправить сообщение" > Сохранить</button>
		</div>
		
		<div style="float: right;margin-right: 0px;">	
					<button class="btn" name="close" type="button"
						value="Закрыть">Отмена </button> 
		</div>	
<?php echo Form::close();?>
		
<script>
	$(function(){	
		$('#addbutton').click(
		function()
		{
		   $('.wrap1').show(500);
	    });
	});
</script>
