
<h4 class='title_pad'>Снятие с эксплуатации:</h4>
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
<!--  -->
<div class="numExit">
	<div class="paddUpper">
		<div class="left">Номер:&nbsp;</div>
		<input size=2/> - 
		<input size=6/> - 
		<input size=2/>
	</div>
	<div class="contrEx">
		<div class="left">Контрагент:&nbsp;</div>
		<select class="left">
			<option>АТБ маркет</option>
			<option>РУШ</option>
		</select>
	</div>
</div>
<div class="dateEx">
	<div>
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
	<div>
		<div class="mainEx">
			<div class="left">Ответственный:&nbsp;</div>
			<select class="left">
				<option>АТБ маркет</option>
				<option>РУШ</option>
			</select>
		</div>
	</div>
</div>
<br>
<br>
<br>
<!-- ПОЛЯ ФОРМЫ "РЕДАКТИР-Е ВВОДА В ЭКСПЛУАТАЦИЮ" -->

<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Сведения о контрагенте</legend>
		<div class='left'>
			<div class="factAdrEx">Фактич.адрес: &nbsp;</div>
			<select >
			  <option>Адрес 1</option>
			  <option>Адрес 2</option>
			  <option>Адрес 3</option>
			</select>
		</div>

		
	</fieldset>
</form>
<!-- Сведения об оборудовании -->
<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Сведения об оборудовании</legend>
		<div class='left'>
			<div class='left'>
				<div class="paddModel">Модель: &nbsp;</div>
				<select class="plomb">
					<option>ЕКСЕЛЛИО 221</option>
					<option>ЕКСЕЛЛИО 112</option>
				</select>
			</div>
        </div>

		<div>
			<div class="right">
				<div class="paddModel">Завод.№: &nbsp;</div>
				<select  class="factoryLeft">
					<option>АП-34-332-33</option>
					<option>ГР-45-433-23</option>
				</select>
			</div>

			
		</div>

		
	</fieldset>
</form>

<!-- Справка о опломбировке -->
<form id="example" name="example" method="post" action="send.php">
	<fieldset>
		<legend>Справка об распломбировке</legend>

		<div class='left'>

			<div class="numActEx">
				<div class='left'>Номер справки: &nbsp;</div>
				<input id="number" value="" />
			</div>

			<div class="timePlombEx">
				<div class="timePlomb2Ex">Время распломбировки:
					&nbsp;</div>
				<input id="nomFiskal" value="" />
			</div>
		</div>

		<div style="margin-top: 20px;margin-left: 70px">
			<div>
				<div class="plomb3">
					<div class="paddPlomb">Пломба 1: &nbsp;</div>
					<select class="plomb">
						<option>АП-34-332-33</option>
						<option>ГР-45-433-23</option>
					</select>
				</div>
				<div style="float: left; margin-left: 71px; margin-top: 20px">
					<div class="paddPlomb">Пломба 2: &nbsp;</div>
					<select class="plomb4">
						<option>АП-34-332-33</option>
						<option>ГР-45-433-23</option>
					</select>
				</div>			
			</div>		
		</div>
		<br><br>
	<div class="summMoney">	
      <div class="left">Сумма дневной выручки: </div>				 
      <input value="" id="inpSumMoney" />
	</div>
	</fieldset>
</form>
<div style="float: left; margin-left: 45px;">
	<button class="btn btn-info" name="mail_submit" type="submit"
		value="Отправить сообщение">Печать акта</button>
</div>

<div style="float: left; margin-left: 10px;">
	<button class="btn" name="close" type="button" value="Закрыть"
		length="30">Печать справки</button>
</div>

<div style="float: right;">
	<div style="float: left; margin-right: 10px;">
		<button class="btn btn-info" name="mail_submit" type="submit"
			value="Отправить сообщение">Сохранить</button>
	</div>

	<div style="float: right; margin-right: 0px;">
		<button class="btn" name="close" type="button" value="Закрыть">Отмена
		</button>
	</div>
</div>
