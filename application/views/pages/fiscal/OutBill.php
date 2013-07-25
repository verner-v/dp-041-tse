
<h4 class='title_pad'><b>Расходная накладная:</b></h4>
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
      		<li><a href="<?php echo URL::base() ?>fiscal/model/inBill"> Приходная накладная</a></li>
      		<li><a href="<?php echo URL::base() ?>fiscal/model/inBillPlomb"> Приходная накладная(Пломбы)</a></li>
      		<li><a href="<?php echo URL::base() ?>fiscal/OutBill"> Расходная накладная</a></li>
   		</ul>
   		</li>
   		<li><a href="<?php echo URL::base() ?>fiscal/model/inBill">Изменить</a></li>
   		<li><a href="<?php echo URL::base() ?>fiscal/model/inBill">Удалить</a></li>
   		
   	       
        
   	   </li>
   	 </ul>
    </div>
  </div>
</div>
</div>

<!-- Основная форма -->

   
	<div style="margin: 0;">
     
     <div style="float:right;margin-top:0px; margin-right: 380px;">
     <div style="margin-top:3px; float: left;">Дата документа: &nbsp;&nbsp;</div>   
       <div id="datetimepicker5" class="input-append date">
    			<input data-format="dd/MM/yyyy" type="text"></input>
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
  <select>
     <option >Основной склад</option>
     <option>Еще какой-то склад</option>
     <option>Еще какой-то после какого-то склад</option>
  </select>
  </div>
  <div class="alignFormR">
  <div>Ответственный:</div>
  <select>
     <option>Новиков В.В.</option>
     <option>Петров А.Л.</option>
     <option>Ловчиков И.Д.</option>
  </select>
  </div>
  <div class="alignFormR">
  <div>Клиент:</div>
  <select>
     <option>АТБ - маркет</option>
     <option>Ева РУШ</option>
     <option>Пиченьки</option>
  </select>
  </div>
  </div>
  </div>
 
  
 <div class="padd_table"></div>
  <!-- Таблицы  -->
  <div class="tbl1">
  <table class="table table-bordered" style="float: right">
   				<thead>
    				<tr>
    					<th>Наименование</th>
    					<th>Дата изготовл.</th>
    					<th>Завод.№</th>
    					<th>Кол-вс</th>
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
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>  	
    	
    	</div>
    	
    <div class="tbl2">
  	
    	<div style="margin: 0px 450px;">
    		<div ><button class="arrow1"> &#171;</button></div>
    		
    		<div ><button class="arrow2">&#187;</button></div>
    	</div>
  </div> 	
    	
   <div class="tbl3"> 
    	<!-- Таблицы  -->
  <table class="table table-bordered" style="float: left;">
   				<thead>
    				<tr>
    					<th>Наименование</th>
    					<th>Дата изготовл.</th>
    					<th>Завод.№</th>
    					<th>Кол-вс</th>
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
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>  	
</div>


<div style="float: left;margin-left:730px;">				
					<button class="btn btn-info" name="mail_submit" type="submit"
						value="Отправить сообщение" > Сохранить</button>
		</div>
		
		<div style="float: right;margin-right: 0px;">	
					<button class="btn" name="close" type="button"
						value="Закрыть" >Отмена </button> 
		</div>
