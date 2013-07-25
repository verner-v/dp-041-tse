<h4 class='title_pad'>Прием на обслуживание:</h4>
<div class="navbar">
	<div class="navbar-inner_table">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse"
				data-target=".nav-collapse"> <span class="icon-bar"></span> <span
				class="icon-bar"></span> <span class="icon-bar"></span>
			</a>
			<!-- ДОЧЕРНЕЕ МЕНЮ -->
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> Создать<b class="caret"></b>
							<ul class="dropdown-menu">
								<li><a href="<?php echo URL::base() ?>manager/enterExpl"> Ввод в
										эксплуатацию</a></li>
								<li><a href="<?php echo URL::base() ?>manager/exitExpl"> Снятие
										с эксплуатации</a></li>
								<li><a href="<?php echo URL::base() ?>manager/TechServ">
										Техническое обслуживание </a></li>
								<li><a href="<?php echo URL::base() ?>manager/TechServGroup">
										Техническое обслуживание группы </a></li>
								<li><a href="<?php echo URL::base() ?>manager/EquipRepair">
										Ремонт оборудования </a></li>
								<li><a href="<?php echo URL::base() ?>manager/inService"> Прием
										на обслуживание </a></li>
								<li><a href="<?php echo URL::base() ?>manager/shopTransfer">
										Перевод между магазинами </a></li>
							</ul>
					
					</li>
					<li><a href="<?php echo URL::base() ?>manager/inBill">Изменить</a>
					</li>
					<li><a href="<?php echo URL::base() ?>manager/inBill">Удалить</a></li>
					<div class="filter">
						<label class="checkbox"> <input type="checkbox"> Включить фильтр<a
							href="<?php echo URL::base() ?>manager/FilterOption"> (Настройка
								фильтра)</a>
						</label>
					</div>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Выделение ячеек при пустом значении -->
<script>
  $(document).ready(function(){

	  if($('select').val().length == 0){  
          $('select').css("border","1px solid red");
      }
	     else{
              $('select').css("border","1px solid #cccccc");
        }
	     $('select').click(function(){
          if($(this).val().length==0){  
             $(this).css("border","1px solid red");
         }else{
              $(this).css("border","1px solid #cccccc");
        }
	  });
	     
  });
</script>

<!--Начало формы  -->
<div class="numInServe">
	<div class="numPaddServe">
		<div class="left" >Номер:&nbsp;</div>
		<input size=2 /> - 
		<input size=6 /> - 
		<input size=2 />
	</div>
</div>
<div class="dataInServ">
		Дата:
		<div id="datetimepicker9" class="input-append date">
			<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
				style="height: 20px"></input> <span class="add-on"><i
				data-date-icon="icon-calendar"></i> </span>
			<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker9').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script>
		</div>
	</div>
	
<div class="contragentPaddInServ">
	<div>Контрагент:
 		<select id="contragent">
  			<option></option>
  			<option></option>
 		</select>
	</div>
</div>

<div class="mainPaddInServ">
	<div>Ответственный:
 		<select id="main">
  			<option></option>
  			<option>Иванов</option>
  			<option>Алферов В.А</option>
 		</select>
	</div>
</div>
<br><br><br>
<form id="dataDoc" name="dataDoc" method="post" action="send.php" style="margin-top: 50px">	
	<fieldset >
		<legend>Сведения о контрагенте: </legend>
     
     <div class="addrServ">Фактический адрес:
       <select>
         <option></option>
         <option></option>
       </select>
     </div>
	
	<div class="packt"> Договор:
	   <select>
	    <option></option>
	    <option>Договор 10</option>
	    <option>Договор 2</option>
	   </select>
	</div>	
	</fieldset>
</form>	
	
<form id="dataDoc" name="dataDoc" method="post" action="send.php" style="margin-top: -15px">	
	<fieldset >
		<legend>Сведения об оборудовании: </legend>
	<div class="addrServ">Фактический адрес:
       <select>
         <option></option>
         <option></option>
       </select>
     </div>
	
	<div class="packt"> Договор:
	   <select>
	    <option></option>
	    <option>Договор 10</option>
	    <option>Договор 2</option>
	   </select>
	</div>	
	<div class="factoryNo">Заводской номер:
    <input id="factoryNum" value=""/>   
    </div>
	
	<div class="fiskalNo"> Фискальный номер:
	   <input id="fiskalNum" value=""/>
	</div>	
	
	<div class="dataInServeEnd">
		Дата:
		<div id="datetimepicker13" class="input-append date">
			<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
				style="height: 20px"></input> <span class="add-on"><i
				data-date-icon="icon-calendar"></i> </span>
			<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker13').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script>
		</div>
	</div>
	<div>
	<div class="componentArea">Компоненты:</div>
	<div style="float: right;"><textarea id="compArea" rows="5" cols="28"> </textarea>
	</div>
	</div>
	</fieldset>
</form>			

<form id="dataDoc" name="dataDoc" method="post" action="send.php" style="margin-top: -15px; ">	
	<fieldset >
		<legend>Суммы по данным фискальной памяти: </legend>
<div class="factoryNo">По ставке НДС 20%:
    <input id="factoryNum" value=""/>   
    </div>
	
	<div class="fiskalNo"> По ставке НДС 0%:
	   <input id="fiskalNum" value=""/>
	</div>	
	
	</fieldset>
</form>

<!-- Необходимость опломбировки, checkbox -->		
<script>
	$(document).ready(function() {		
		$('#Oplombirovka').find('form,input, textarea, button, select').attr('disabled','disabled');
		$("#docPackage").change(function(){
			if($(this).is(':checked')){
				$('#Oplombirovka').find('form,input, textarea, button, select').removeAttr('disabled');
				
				$("docPackage").attr('checked', true) ;
				}
			else{			
				$('#Oplombirovka').find('form,input, textarea, button, select').attr('disabled','disabled');
				
				$("docPackage").attr('checked', false) ;	
		    	}
			});
	});
</script>	
		

<div class="docExplServe">
			<label class="docPackageBox"> 
			<input type="checkbox" id="docPackage">Необходимость пакета документов на ввод в эксплуатацию	
			</label>
</div>
<div id="Oplombirovka">
<form id="dataDoc" name="dataDoc" method="post" action="send.php" style="margin-top: 60px; ">	
	<fieldset >
		<legend>Справка об опломбировке</legend>
        <div class="listDiv">
        <div class="listNumber">Номер справки:</div>
        <input id="listNum" value=""/>
        </div>
        
        <div class="dateOplomb">
		Дата:
		<div id="datetimepicker14" class="input-append date">
			<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
				style="height: 20px"></input> <span class="add-on"><i
				data-date-icon="icon-calendar"></i> </span>
			<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker14').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script>
		</div>
	</div>
	<div class="plomb1Serve">Пломба 1:
	 <select>
	   <option></option>
	   <option></option>
	 </select>
	</div>
	<div class="plomb2Serv">Пломба 2:
	 <select>
	   <option></option>
	   <option></option>
	 </select>
	</div>
	</fieldset>
</form>
</div>	

<div class="printServ">				
					<button class="btn btn-info" name="printAct" type="submit"
						value="printAct" > Печать акта</button>
		</div>
		
		<div class="printActServ">	
					<button class="btn" name="print" type="button"
						value="print" length="30">Печать справки </button> 
		</div>	

<div class="right">
		<div class="saveServ">				
					<button class="btn btn-info" name="save" type="submit"
						value="save" > Сохранить</button>
		</div>
		
		<div class="cancelServ">	
					<button class="btn" name="close" type="button"
						value="Закрыть">Отмена </button> 
		</div>	
</div>