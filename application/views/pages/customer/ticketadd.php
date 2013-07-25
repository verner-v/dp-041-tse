<div class="container">
<?php echo form::open('customer/ticket',array('onSubmit'=>'return checkFormAddTicketByCustomer(this);')) ?>

	<?php echo $ddd;?>
	sdf
    <div class="span4 offset4 well">
    	<textarea class="span4" id="description" name="description" placeholder="Введите суть проблемы" rows="5" onKeyup='charactersLeft(this)'></textarea>
    	<h6 class="pull-left" id="ch_left">1500 символов осталось</h6>
        <div class="form-actions">
	    	<!-- <button class="btn pull-right" type="submit" name="submit" value="Отменить">Отменить</button> -->
	    	<a class="btn pull-right" href="<?php echo URL::base()?>customer">Отменить</a>
	    	<button class="btn btn-success pull-right" type="submit" name="submit" value="Сохранить">Сохранить</button>
		</div>
    </div>

<?php echo form::close(); ?>
</div>