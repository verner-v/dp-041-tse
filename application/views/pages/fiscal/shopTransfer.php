<h4 class='title_pad'>Перевод между магазинами:</h4>
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

<form id="newDoc" name="newDoc" method="post" action="send.php">
	<fieldset>
		<legend>Документ</legend>
		<div class="docTransfer">Новый:&nbsp;</div>
		<input size=2 /> - <input size=6 /> - <input size=2 />

		<div class="dataTransfer" >
			Дата:
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
	</fieldset>
</form>

<form id="dataDoc" name="dataDoc" method="post" action="send.php">
	<fieldset>
		<legend>Сведения о контрагенте: </legend>
		<div class="leftPadd">
			<div class="donorTransf">Контрагент донор:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div class="fAdrTransf">
			<div class="fAdrPad">Фактический адрес контрагента:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<br>
		<div class="contrReceiver">
			<div style="margin-top: 5px; margin-right: 3px;">Контрагент получатель:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div class="adressContragent">
			<div style="margin-top: 5px;">Фактический адрес контрагента:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		
		<div class="checkboxTransf">
			<label class="checkbox" style="color: red;"> <input type="checkbox">
				Убрать прошедших ТО в текущем месяце
			</label>
		</div>

	</fieldset>
</form>

<form id="stuffDoc" name="stuffDoc" method="post" action="send.php">
	<fieldset>
		<legend>Ответственный: </legend>
		<div class="leftPadd">Ответственный:</div>
		<select class="mainTransf">
			<option>Новиков А.Д.</option>
			<option>Шишкин О.Л.</option>
		</select>
	</fieldset>
</form>

<form id="stuffInfo" name="stuffInfo" method="post" action="send.php">
	<fieldset>
		<legend>Сведения об оборудовании:</legend>
		<div class="leftPadd">
			<div>Модель:</div>
			<select>
				<option>ПР-545-544</option>
				<option>ОР-54-33-22</option>
			</select>
		</div>
		

		<div class="factoryNum">
			<div>Заводской номер:</div>
			<select>
				<option>Все</option>
				<option>Инверт</option>
				
			</select>

		</div>
		<br>
		
	</fieldset>
</form>


<div class="right">
	<div class="receiveTransf">
		<button class="btn btn-info" name="receive" type="submit"
			value="">Перевести</button>
	</div>

	<div class="right">
		<button class="btn" name="close" type="button" value="Закрыть">Отмена
		</button>
	</div>
</div>
