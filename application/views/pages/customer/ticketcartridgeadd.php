<div class="container">
<?php echo form::open('customer/ticket',array('onSubmit'=>'return checkFormAddTicketByCustomer(this);')) ?>
    <div class="span4 offset4 well">
    
	    <div class="span4">
			<label>Принтер</label>
			<div class="span4">
			<?php echo form::select('printer_name', array_combine(array(1,2),array('hello','world')) ); ?>
			</div>
		</div>
    
    	<div class="span4">
			<label>Количество картриджей</label>
			<div class="span4">
			<?php echo form::select('amount', array_combine(array(1,2,3,4,5),array(1,2,3,4,5)) ); ?>
			</div>
		</div>
    	
        <div class="form-actions">
	    	<!-- <button class="btn pull-right" type="submit" name="submit" value="Отменить">Отменить</button> -->
	    	<a class="btn pull-right" href="<?php echo URL::base()?>customer">Отменить</a>
	    	<button class="btn btn-success pull-right" type="submit" name="submit" value="Сохранить">Сохранить</button>
		</div>
    </div>
	<?php echo form::hidden('ticket_type',$ticket_type);?>
<?php echo form::close(); ?>
</div>