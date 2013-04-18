
<h4 class='title_pad'>Документы сервис-центра:</h4>
<div class="navbar">
    <div class="navbar-inner_table">
    <div class="container-fluid">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
  <!-- ДОЧЕРНЕЕ МЕНЮ -->
    <div class="nav-collapse collapse">
     <ul class="nav">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Создать<b class="caret"></b>
        <ul class="dropdown-menu">
      		<li><a href="<?php echo URL::base() ?>manager/enterExpl"> Ввод в эксплуатацию</a></li>
      		<li><a href="<?php echo URL::base() ?>manager/exitExpl"> Снятие с эксплуатации</a></li>
      		<li><a href="<?php echo URL::base() ?>manager/TechServ"> Техническое обслуживание </a></li>
      		<li><a href="<?php echo URL::base() ?>manager/TechServGroup"> Техническое обслуживание группы </a></li>
      		<li><a href="<?php echo URL::base() ?>manager/EquipRepair"> Ремонт оборудования </a></li>
      		<li><a href="<?php echo URL::base() ?>manager/inService"> Прием на обслуживание </a></li>
      		<li><a href="<?php echo URL::base() ?>manager/shopTransfer"> Перевод между магазинами </a></li>
   		</ul>
   		</li>
   		<li><a href="<?php echo URL::base() ?>manager/inBill">Изменить</a></li>
   		<li><a href="<?php echo URL::base() ?>manager/inBill">Удалить</a></li>
   		<div class="filter">
   			<label class="checkbox">
				<input type="checkbox"> Включить фильтр<a href="<?php echo URL::base() ?>manager/FilterOption">  (Настройка фильтра)</a>
			</label>
		</div>
   	 </ul>
    </div>
  </div>
</div>
</div>
<!--  -->
<div class="upperPadd" >
<div class="paddUpper">	
	<div class="left">Номер:&nbsp; </div>
       <input size=2> - </input>
       <input size=6> - </input>
       <input size=2></input>
     </div>
<div style="margin-left: 20px ">
 <div class="left"> Контрагент:&nbsp;</div>
     <select class="left">
      <option>АТБ маркет</option>
      <option>РУШ</option>
     </select>
</div>
</div>
<div>
     <div class="dataExpl">	Дата:
	    <div id="datetimepicker9" class="input-append date">
    					<input data-format="dd/MM/yyyy hh:mm:ss" type="text" style="height: 20px"></input>
    						<span class="add-on"><i data-date-icon="icon-calendar"></i>
    						</span>
 								<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker9').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script> 
					</div>  
     </div>
     <div>
     <div class="mainExpl">
 	 <div class="left"> Ответственный:&nbsp;</div>
    	 <select class="left">
      		<option>АТБ маркет</option>
      		<option>РУШ</option>
     	 </select>
	 </div>
     </div>
</div>
<br><br><br>
<!-- ПОЛЯ ФОРМЫ "РЕДАКТИР-Е ВВОДА В ЭКСПЛУАТАЦИЮ" -->

<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Сведения о контрагенте</legend>
		 	<div  class='contrInfo'>
		 		<div class="addrExplF">Фактич.адрес: &nbsp; </div>
		  			<select class="right">
						<option>Продукты 100</option>
						<option>Продукты 101</option>
		  			</select>
		  		</div>
		  
		  	<div class="actExpl">
		  		<div class="addExplR">Договор: &nbsp; </div>
		  			<select class="right">
						<option>09-09СО 09.09.2009</option>
						<option>09-09СО 09.09.2009</option>
		  			</select>
		  		</div>
	</fieldset>
</form>
<!-- Сведения об оборудовании -->
<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Сведения об оборудовании</legend>
		  <div  class='left'> 
		   <div  class='left'>
		 		<div class="paddModel">Модель: &nbsp; </div>
		  			<select class="right">
						<option>ЕКСЕЛЛИО 221</option>
						<option>ЕКСЕЛЛИО 112</option>
		  			</select>
		  		</div>
		  
		   <div class="fiskalExpl">
		   		<div class="addrExplF">Фискал.№: &nbsp; </div>
		  			<input id="nomFiskal" value=""/>
		   </div> 
		  
		  <div class="divPO">
		  		<div class="verPO">Версия ПО: &nbsp; </div>
		  			<input id="nomFiskal" value=""/>
		  </div> 
		  </div>
		  
		  <div>
		  <div class="factNumExpl">
		 		<div class="paddModel">Завод.№: &nbsp; </div>
		  			<select class="right">
						<option>АП-34-332-33</option>
						<option>ГР-45-433-23</option>
		  			</select>
		  		</div>
		  
		   <div class="dataMadeExpl">
		   		<div class="addrExplF">Дата изготовл.: &nbsp; </div>
		  			<div id="datetimepicker6" class="input-append date">
    					<input data-format="dd/MM/yyyy hh:mm:ss" type="text" style="height: 20px"></input>
    						<span class="add-on"><i data-date-icon="icon-calendar"></i>
    						</span>
 								<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker6').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script> 
					</div>  
		   </div>  
		  </div>
		  
		    <div class="areaFiskal">
		  		<div class="addrExplF">Компоненты: &nbsp; </div>
		  			<textarea id="nomFiskal" value="" rows="2" cols="45"></textarea>
		  </div>
	</fieldset>
</form>
<!-- Суммы по данным фискальной памяти -->
<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Суммы по данным фискал.памяти</legend>
		  <div  class="nds20">
		 		<div class="left">По ставке НДС 20%: &nbsp; </div>
		  			<input value="" id="nds20"/>
		  		</div>
		  
		  	<div class="nds0">
		  		<div class="addrExplF">По ставке НДС 0%: &nbsp; </div>
		  			<input value="" id="nds0"/>
		  		</div>
	</fieldset>
</form>
<!-- Справка о опломбировке -->
<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Справка об опломбировке</legend>
		     	
		  <div class='left'> 
		  
		   <div style="float: left;margin-left: 35px">
		   		<div  class='left'>Номер: &nbsp; </div>
		  			<input id="number" value=""/>
		   </div> 
		  
		  <div class="timePlombExpl">
		  		<div class="addrExplF">Время опломбировки: &nbsp; </div>
		  			<input id="nomFiskal" value=""/>
		  </div> 
		  </div>
		  
		  <div >
			<div>
				<div class="plomb1">
					<div class="left">Пломба 1: &nbsp;</div>
					<select class="right">
						<option>АП-34-332-33</option>
						<option>ГР-45-433-23</option>
					</select>
				</div>
				<div class="plomb2">
					<div class="left">Пломба 2: &nbsp;</div>
					<select class="right">
						<option>АП-34-332-33</option>
						<option>ГР-45-433-23</option>
					</select>
				</div>			
			</div>		
		</div>
		<br>
		  
		   
	</fieldset>
</form>
<div class="printExpl">				
					<button class="btn btn-info" name="printAct" type="submit"
						value="printAct" > Печать акта</button>
		</div>
		
		<div class="printExplSp">	
					<button class="btn" name="print" type="button"
						value="print" length="30">Печать справки </button> 
		</div>	

<div class="right">
		<div class="saveExpl">				
					<button class="btn btn-info" name="save" type="submit"
						value="save" > Сохранить</button>
		</div>
		
		<div class="right">	
					<button class="btn" name="close" type="button"
						value="Закрыть">Отмена </button> 
		</div>	
</div>