<div class="container">
<div class="span5 offset3">

<?php echo form::open('customer/feedback',array('class'=>'form-horizontal')); ?>
<legend>Отзывы и пожелания</legend>	
	<div class="control-group">
		<label class="control-label" for="type">Вид</label>
		<div class="controls">
			<?php echo form::select('type',array('Благодарность','Замечания','Пожелания'),'',array('id'=>'type')); ?>
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="comment">Описание</label>
		<div class="controls">
			<textarea class="span3" id="comment" name="comment" placeholder="Комментарий" rows="3"></textarea>
		</div>
	</div>
	
	<label>Мы будем благодарны Вам за оценку нашего сервиса</label>
	
	<label class="radio">
		<input type="radio" name="score" id="score" value="5">
		Отлично
	</label>
	<label class="radio">
		<input type="radio" name="score" id="score" value="4">
		Хорошо
	</label>
	<label class="radio">
		<input type="radio" name="score" id="score" value="3">
		Удовл
	</label>
	<label class="radio">
		<input type="radio" name="score" id="score" value="2">
		Плохо
	</label>
	<label class="radio">
		<input type="radio" name="score" id="score" value="0" checked="checked">
		Воздержаться
	</label>
   
    <div class="form-actions">
	    	<!-- <button class="btn pull-right" type="submit" name="submit" value="Отменить">Отменить</button> -->
	    	<a class="btn pull-right" href="<?php echo URL::base()?>customer">Отменить</a>
	    	<button class="btn btn-success pull-right" type="submit" name="submit" value="Сохранить">Сохранить</button>
	</div>
    	
	<?php echo form::close(); ?>
</div>
</div>