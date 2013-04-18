<h4 class='title_pad'>Оформление группового ТО:</h4>
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
		<div class="left" style="margin-left: 20px; margin-top: 7px;">Новый:&nbsp;</div>
		<input size=2 /> - <input size=6 /> - <input size=2 />

		<div style="float: right; margin-right: 400px;">
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
			<div class="contragentGr">Контрагент:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div style="float: left; margin-left: 120px;">
			<div style="margin-top: 5px;">Фактический адрес контрагента:</div>
			<select>
				<option>Сведение 1</option>
				<option>Сведение 2</option>
			</select>
		</div>
		<div class="left" style="margin-top: 30px; margin-left: 30px">
			<label class="checkbox" style="color: red;"> <input type="checkbox">
				Убрать прошедших ТО в текущем месяце
			</label>
		</div>

	</fieldset>
</form>

<form id="stuffDoc" name="stuffDoc" method="post" action="send.php">
	<fieldset>
		<legend>Ответственный: </legend>
		<div class="mainGr">Ответственный:</div>
		<select id="mainSur">
			<option>Новиков А.Д.</option>
			<option>Шишкин О.Л.</option>
		</select>
	</fieldset>
</form>

<form id="stuffInfo" name="stuffInfo" method="post" action="send.php">
	<fieldset>
		<legend>Сведения об оборудовании:</legend>
		<div class="modelGr">
			<div>Модель:</div>
			<select>
				<option>ПР-545-544</option>
				<option>ОР-54-33-22</option>
			</select>
		</div>
		<div class="left" style="margin: 0 0 0 120px">
			<div>Кол-во мес.до след. ТО:</div>
			<input id="monthTO" value="" />
		</div>

		<div class="left" style="margin: 0px 0 0 100px">
			<div>Заводской номер:</div>
			<select>
				<option>Все</option>
				<option>Инверт</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>

		</div>
		<br>
		<div class="payAct">
			<label class="checkbox" > <input type="checkbox">
				Оплачено
			</label>
		</div>
	</fieldset>
</form>

<div style="float: left; margin-left: 45px;">
	<button class="btn btn-info" name="mail_submit" type="submit"
		value="">Печать</button>
</div>



<div style="float: right;">
	<div style="float: left; margin-right: 10px;">
		<button class="btn btn-info" name="mail_submit" type="submit"
			value="">Сохранить</button>
	</div>

	<div style="float: right; margin-right: 0px;">
		<button class="btn" name="close" type="button" value="Закрыть">Отмена
		</button>
	</div>
</div>
