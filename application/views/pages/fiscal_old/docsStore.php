
<h4 class='title_pad'>Новые данные о товаре:</h4>
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
      		<li><a href="<?php echo URL::base() ?>manager/inBill"> Приходная накладная</a></li>
      		<li><a href="<?php echo URL::base() ?>manager/inBillPlomb"> Приходная накладная(Пломбы)</a></li>
      		<li><a href="<?php echo URL::base() ?>manager/OutBill"> Расходная накладная</a></li>
   		</ul>
   		</li>
   		<li><a href="<?php echo URL::base() ?>manager/inBill">Изменить</a></li>
   		<li><a href="<?php echo URL::base() ?>manager/inBill">Удалить</a></li>
   		
   		<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
    	<input class="span2" size="16" type="text" value="12-02-2012">
    	<span class="add-on"><i class="icon-th"></i></span>
    	</div>    
   	   </li>
   	 </ul>
    </div>
  </div>
</div>

<!-- Основная форма -->
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
  
  <!-- Таблицы  -->
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
  </div>