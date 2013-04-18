<?php if(isset($error_msg)) 
					{
						?>
					<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<?php echo $error_msg;?>
					</div>
					<?php
					}
					?>

<?php if(isset($result)) : 
	if(is_array($result)) :
		foreach($result as $item) :
		?>
		<div class="alert alert-error">
			<a class="close" data-dismiss="alert" href="#">×</a>
			<?php echo $item;?>
		</div>
		<?php
		endforeach;
	else :
	?>
		<div class="alert alert-error">
			<a class="close" data-dismiss="alert" href="#">×</a>
			<?php echo $result;?>
		</div>
	<?php 
	endif;
endif;
?>
					
<div class="container">
	
	
			
			<div style="display: block;" id="login-content" class="forma">
				<?php echo form::open('login/signin',array('method'=>'POST','accept-charset'=>'UTF-8')); ?>
				 	
					<div id="enterheader">
						<div class="buttomhead">
							<img src="assets/images/form.png">
						</div>
						<div id="enter">Вход в систему:</div>
					</div>
			<br>
			<div id="inputs">
					<div class="inp">
						<span class="label a-right">Login:</span>
						<span class="val"> <input id="usname" name="username" required="" type="text" size="20">  </span>
			    	</div>
			
					<div class="inp">
						<span class="label">Password:</span>
						<span class="val"> <input id="password" name="password" required="" type="password"> </span>
					</div>
					<div class="actions">
						<div id="enterbuttom">
							<div class="sendcom5">
								<input type="submit" name="submit" value="Отправить"/>
							</div>
						</div>
					</div>
				<?php echo form::close(); ?>
			</div>
</div>