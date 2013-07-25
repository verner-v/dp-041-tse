<h4 class='title_pad'>Ремонт оборудования:</h4>
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
						<label class="checkbox"> <input type="checkbox"> Включить фильтр <a
							href="<?php echo URL::base() ?>manager/FilterOption"> (Настройка
								фильтра)</a>
						</label>
					</div>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- № документа, Дата, Ответственный  -->
<div class="left">
<div class="leftPadd">Номер:&nbsp;</div>
	<input size=2 /> -
	<input size=6 /> -
	<input size=2 />
<div class="dataRep">
	Дата документа:
	<div id="datetimepicker10" class="input-append date">
		<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
			style="height: 20px"></input> <span class="add-on"><i
			data-date-icon="icon-calendar"></i> </span>
		<script type="text/javascript">
  			$(function() {
    		$('#datetimepicker10').datetimepicker({
     		language: 'pt-BR'
    	    	});
 			});
		</script>
	</div>
</div>
<div class="mainRep">
	<div class="left">Ответственный:</div>
		<select class="right">
 			<option>Иванов А.А.</option>
 			<option>Карпенко А.В.</option>
		</select>
	</div>
</div><br><br><br>

<!-- Сведения о контрагенте  -->
<form id="dataDoc" name="dataDoc" method="post" action="send.php">
	<fieldset>
		<legend>Сведения о контрагенте: </legend>
		<div class="leftPadd">
			<div >Контрагент:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div class="factAdrContr">
			<div >Фактический адрес контрагента:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
	</fieldset>
</form>
<!-- Форма  "Справка о распломбировке"-->
<form id="dataDoc" name="dataDoc" method="post" action="send.php">	
	<fieldset >
		<legend>Сведения об оборудовании: </legend>
	
		<div class="leftPadd">
			<div class="contrEq">Контрагент:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div class="factAdrEq">
			<div class="reasonRep">Фактич. адрес контрагента:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
	
		<div class="verPOEq">
			<div >Версия ПО:</div>
				<div class="left" style="">
					<input id="verPO" value=""/>
				</div>
			</div>
			
				<br><br><br><br>
		<div class="fiskContrEq">
			<div class="contrEq">Фискал.номер:</div>
			<div class="left" style="">
					<input id="verPO" value=""/>
				</div>
		</div>
		<div class="dateMadeEq">
			<div class="reasonRep">Дата изготовления:</div>
			<div class="left" style="">
					<input id="verPO" value=""/>
				</div>
		</div>
		
		<div class="charactEq">
			<div >Характ-ка неисправности:</div>
				<select>
				  <option>Нарушена изоляция, обрыв шнура питания</option>
				  <option>Нарушена изоляция, обрыв шнура питания</option>
				</select>
			</div>	
			
	</fieldset>
</form>

<div class="rasplombEq">
			<label class="checkboxRasplomb"> 
			<input type="checkbox" id="PlombOr" >Необходимость распломбировки/опломбировки оборудования
			
			</label>
		</div>

<!-- Необходимость опломбировки, checkbox -->		
<script>
	$(document).ready(function() {		
		$('#mydiv2,#mydiv').find('form,input, textarea, button, select').attr('disabled','disabled');
		$("#PlombOr").change(function(){
			if($(this).is(':checked')){
				$('#mydiv2,#mydiv').find('form,input, textarea, button, select').removeAttr('disabled');
				
				$("PlombOr").attr('checked', true) ;
				}
			else{			
				$('#mydiv2,#mydiv').find('form,input, textarea, button, select').attr('disabled','disabled');
				
				$("PlombOr").attr('checked', false) ;	
		    	}
			});
	});
</script>	
		
		
<!-- Распломбировка объекта  -->
<div id="mydiv">
<form id="Rasplomb" name="dataDoc" method="post" action="send.php" style="width:540px;float: right;" disabled="disabled">
	<fieldset>
		<legend>Справка о распломбировке: </legend>
		<div class="leftPadd">
			<div class="actNumRep">Номер справки:</div>
			<input id=""/>
		</div>
		<div class="rasplombRep">
		<div>
			<div class="reasonRep">Причина распломбировки:</div>
			<select style="width: 260px;">
			 <option>Что то сломалось</option>
			 <option></option>
			</select>
		</div>
		</div>
		<br><br><br>
		<div class="leftPadd" >
			<div style="margin-top: 5px;">Пломба 1:</div>
			<input />
		</div>
		<div class="plomb2Eq">
			<div style="">Пломба 2:</div>
			<input />
		</div><br><br><br>
		<div class="timeRasplEq">
			<div class="reasonRep">Время распломбировки:</div>
			<input />
		</div>
		<div class="summEquip">
			<div style="margin:0px;">Сумма дневной выручки:</div>
			<input />
		</div>
		
		
		
	</fieldset>
</form>	
	</div>
<!-- Опломбировка объекта  -->	
<div id="mydiv2">
<form id="Oplomb" name="dataDoc" method="post" action="send.php" style="float:right ;width:420px;margin: 0px -40px 0 0;" disabled="disabled">
	<fieldset>
		<legend>Справка об опломбировке: </legend>
		<div class="leftPadd">
			<div style="margin-top: 5px; margin-right: 3px;">Номер:</div>
			<input id="numInquiry" value=""/>
		</div>
		<br>
		<div class="plomb2Rep">
			<div style="margin-top: 5px;">Пломба 2:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		
		<div class="plomb1Repair">
			<div style="">Пломба 1:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div class="timeOplomb">
		 <div class="timeOplEq">Время опломбировки:</div>
		 <input id="timePlomb" value=""/>
		</div>
	</fieldset>
</form>		
</div>

<div class="ckeckPayEq">
  <div class="checkPay"><input type="checkbox" id="payRepair"/>Произведена оплата ремонта</div>
</div>

<div class="repairePhase">Стадии ремонта:
 <select>
  <option>Стадия 1</option>
  <option>Стадия 2</option>
 </select>
</div>

<div class="employerStuff">Сотрудник выдавший аппарат:
  <select>
  <option>Серафимов А.В.</option>
  <option>Вербицкий А.Е.</option>
 </select>
</div>

<div class="dateOnEquip">Дата выдачи: 
   <div id="datetimepicker12" class="input-append date">
			<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
				style="height: 20px"></input> <span class="add-on"><i
				data-date-icon="icon-calendar"></i> </span>
			<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker12').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script>
		</div>
</div>

<div class="printActEq">
	<button class="btn btn-info" name="print" type="submit"
		value="print">Печать справки</button>
</div>


<div class="equipDiv">
<div class="right">
	<div class="saveEq">
		<button class="btn btn-info" name="save" type="submit"
			value="save">Сохранить</button>
	</div>

	<div class="right">
		<button class="btn" name="close" type="button" value="Закрыть">Отмена
		</button>
	</div>
</div>
</div>