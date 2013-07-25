
<h4 class='title_pad'>Документы склада:</h4>
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
   		<li><a href="<?php echo URL::base() ?>fiscalmain//inBill">Удалить</a></li>
   		
   		<div style="float:left;margin: 5px 0 0 65px;">
   			<div style="float:left;margin-top:3px;">Cортировать с: &nbsp;&nbsp;</div>
   			<div id="datetimepicker2" class="input-append date">
    			<input data-format="dd/MM/yyyy" type="text"></input>
    				<span class="add-on">
      					<i data-date-icon="icon-calendar"></i>
    				</span>
 			<script type="text/javascript">
  				$(function() {
    			$('#datetimepicker2').datetimepicker({
     		 	language: 'pt-BR'
    			});
 			 });
			</script> 
		</div>
  
  		<div style="float:right;margin-top:1px;">&nbsp;&nbsp;по:&nbsp;       	
  		<div id="datetimepicker1" class="input-append date">
    		<input data-format="dd/MM/yyyy" type="text"></input>
    			<span class="add-on">
    		  		<i data-date-icon="icon-calendar"></i>
    			</span>
 			<script type="text/javascript">
  				$(function() {
    			$('#datetimepicker1').datetimepicker({
      			language: 'ru-RU'
    			});
  			 });
			</script> 
		</div>
        </div>
        </div>
   	 </ul>
    </div>
  </div>
</div>
</div>


 
    
  <!-- Таблицы  -->

  <div>Документы склада:</div>
  <table class="table table-bordered" style="float: right">
   				<thead>
    				<tr>
    					<th>Тип</th>
    					<th>Номер</th>
    					<th>Дата</th>
    					<th>Склад</th>
    					<th>Контрагент</th>
    				</tr>
    			</thead>
    		<tbody >
    			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    				<td>222</td>
   			 	</tr>
   			 	<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    				<td>222</td>
   			 	</tr>
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    				<td>222</td>
    			</tr>
     			<tr>
    				<td>111</td>
    				<td>222</td>
    				<td>111</td>
    				<td>222</td>
    				<td>222</td>
    			</tr>
    		</tbody>
    	</table>  	
    	
    	
    	
 