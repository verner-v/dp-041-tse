<h4 class='title_pad'>Настройки сервис-центра:</h4>
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


<form id="optionDate" name="optionDate" method="post" action="send.php">
	<fieldset>
		<legend>Фильтровать по дате</legend>
		<div>
			<label class="checkbox"> <input type="checkbox"> Включить фильтр</a>
			</label>
		</div>
		<div class="left">
			<div style="float: left; margin-top: 5px;">Начиная с: &nbsp;</div>
			<div id="datetimepicker6" class="input-append date">
				<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
					style="height: 20px"></input> <span class="add-on"><i
					data-date-icon="icon-calendar"></i> </span>
				<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker6').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script>
			</div>
		</div>

		<div class="right" style="margin-right: 280px">
			<div style="float: left; margin: 5px;">Включительно по: &nbsp;</div>
			<div id="datetimepicker1" class="input-append date">
				<input data-format="dd/MM/yyyy hh:mm:ss" type="text"
					style="height: 20px"></input> <span class="add-on"><i
					data-date-icon="icon-calendar"></i> </span>
				<script type="text/javascript">
  								$(function() {
    							$('#datetimepicker1').datetimepicker({
     		 					language: 'pt-BR'
    								});
 			 					});
								</script>
			</div>
		</div>
	</fieldset>
</form>



<!--  -->

<form id="optionDate" name="optionDate" method="post" action="send.php">
	<fieldset>
		<legend>Фильтр по контрагенту</legend>

		<div class="left">
			<div>
				<label class="checkbox"> <input type="checkbox"> Включить фильтр </input>
				</label>
			</div>
			<div>
				<div class="left">Тип документа: &nbsp;</div>
				<select>
					<option>Ввод в эксплуатацию</option>
					<option>Ввод куда-то там еще</option>
				</select>

			</div>
		</div>
		<div class="left" style="margin-left: 40px">
			<div>
				<label class="checkbox"> <input type="checkbox"> Включить фильтр </input>
				</label>
			</div>
			<div>
				<div class="left">Тип документа: &nbsp;</div>
				<select>
					<option>Ввод в эксплуатацию</option>
					<option>Ввод куда-то там еще</option>
				</select>

			</div>
		</div>
	</fieldset>
</form>

<form id="optionDate" name="optionDate" method="post" action="send.php">
	<fieldset>
		<legend>Фильтр по типу документов</legend>

		<div class="left">
			<div>
				<label class="checkbox"> <input type="checkbox"> Включить фильтр </input>
				</label>
			</div>
			<div>
				<div class="left">Тип документа: &nbsp;</div>
				<select>
					<option>Ввод в эксплуатацию</option>
					<option>Ввод куда-то там еще</option>
				</select>
			</div>
		</div>

	</fieldset>
</form>
