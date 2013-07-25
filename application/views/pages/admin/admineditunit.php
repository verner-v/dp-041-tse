<h2 class="a-center">Редактировать объект</h2>

<?php echo form::open('admin/updateunit') ?>

<?php foreach($units as $unit) {?>
	<div class="col-left-30">
		<?php echo form::label('id_zakazchik','Заказчик') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::select('id_zakazchik',array_combine($arr_idzakazchik,$arr_namezakazchik),$unit['ID_ZAKAZCHIK'],array('id'=>'id_zakazchik')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('id_region','Регион') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::select('id_region',array_combine($arr_idregion,$arr_nameregion),$unit['ID_REGION'],array('id'=>'id_region')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('city','Город') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('city',$unit['CITY'],array('id'=>'city')); 	?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('address','Адрес') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('address',$unit['ADDRESS'],array('id'=>'address')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('telephon','Телефон') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('telephon',$unit['TELEPHON'],array('id'=>'telephon')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('contact_face','Контактное лицо') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('contact_face',$unit['CONTACT_FACE'],array('id'=>'contact_face')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('name','Название') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('name',$unit['NAME'],array('id'=>'name')); ?>
	</div>

	<div class="col-left-30">
		<?php echo form::label('date_it','Дата последнего ТО отдел ИТ') ?> :
	</div>
	<div class="col-right-70">
		Год: 
		<select name="date_it_year">
			<option value="2010" selected="selected">2011</option>
			<option value="2011">2012</option>
			<option value="2012">2013</option>
		</select> 
		Месяц: <select name="date_it_month">
			<option value="01" selected="selected">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select> 
		День: <select name="date_it_day">
			<option value="01" selected="selected">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
	</div>
	
	
	<div class="col-left-30">
		<?php echo form::label('date_cso','Дата последнего ТО отдел ЦСО') ?> :
	</div>
	<div class="col-right-70">
		Год: <select name="date_cso_year">
			<option value="2010" selected="selected">2011</option>
			<option value="2011">2012</option>
			<option value="2012">2013</option>
		</select> 
		Месяц: <select name="date_cso_month">
			<option value="01" selected="selected">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select> 
		День: <select name="date_cso_day">
			<option value="01" selected="selected">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
	</div>
	
	
	
	<div class="col-left-30">
		<?php echo form::label('date_fisc','Дата последнего ТО отдел Фиск') ?> :
	</div>
	<div class="col-right-70">
		Год: <select name="date_fisc_year">
			<option value="2010" selected="selected">2011</option>
			<option value="2011">2012</option>
			<option value="2012">2013</option>
		</select> 
		Месяц: <select name="date_fisc_month">
			<option value="01" selected="selected">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select> 
		День: <select name="date_fisc_day">
			<option value="01" selected="selected">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('fix_time','Время выполнения (час)') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('fix_time',$unit['FIX_TIME'],array('id'=>'fix_time')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('reaction_time','Время реагирования (час)') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('reaction_time',$unit['REACTION_TIME'],array('id'=>'reaction_time')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('to_it_time','Время между ТО отдела ИТ') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('to_it_time',$unit['TO_IT_TIME'],array('id'=>'to_it_time')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('to_cso_time','Время между ТО отдела ЦСО') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('to_cso_time',$unit['TO_CSO_TIME'],array('id'=>'to_cso_time')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('to_fisc_time','Время между ТО отдела ФИСК') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::input('to_fisc_time',$unit['TO_FISC_TIME'],array('id'=>'to_fisc_time')); ?>
	</div>
	
	<div class="col-left-30">
		<?php echo form::label('note','Примечание') ?> :
	</div>
	<div class="col-right-70">
		<?php echo form::textarea('note',$unit['NOTE'],array('id' => 'note','rows'=>'7','cols'=>'35'));?>
	</div>
	
<?php }?>	

	<?php echo form::hidden('id_unit',$id_unit)?>	
				    
	<div class="col-full a-center">
    	<?php echo form::submit('submit','Сохранить'/*,array('onClick'=>'return MessageBox("Ваша заявка принята!")')*/); ?>
    	<?php echo form::submit('submit','Отменить'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
    	<?php echo form::submit('submit','Выход'/*,array('onClick'=>'return ConfirmAction()')*/); ?>
  	</div>
	<?php echo form::close() ?>