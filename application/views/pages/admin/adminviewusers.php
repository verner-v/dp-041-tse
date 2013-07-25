<h2 class="a-center">Пользователи системы</h2>


<h3 class="a-center">Пользователи объектов</h3>
<table>
	<thead>
	<tr>
		<th width="50%">
			Имя пользователя
		</th>
		<th width="50%">
			Объект
		</th>
	</tr>
	</thead>
	<tbody>
		<?php
			if(isset($unitusers))
			{
				foreach($unitusers as $user)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/edituser/<?php echo $user['id']?>"> <?php echo $user['username'] ?> </a>
							</td>
							<td>
								<?php echo $user['NAME']; ?>
							</td>
						</tr>
					<?php 
				}
			} 
			else
			{
				
			}
		?>
	</tbody>
</table>

<h3 class="a-center">Пользователи заказчиков</h3>
<table>
	<thead>
	<tr>
		<th width="70%">
			Имя пользователя
		</th>
		<th width="30%">
			Заказчик
		</th>
	</tr>
	</thead>
	<tbody>
		<?php
			if(isset($zakazchikusers))
			{
				foreach($zakazchikusers as $user)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/edituser/<?php echo $user['id']?>"> <?php echo $user['username'] ?> </a>
							</td>
							<td>
								<?php echo $user['NAME']; ?>
							</td>
						</tr>
					<?php 
				}
			} 
			else
			{
				
			}
		?>
	</tbody>
</table>


<h3 class="a-center">Пользователи исполнителей</h3>
<table>
	<thead>
	<tr>
		<th width="70%">
			Имя пользователя
		</th>
		<th width="30%">
			Исполнитель
		</th>
	</tr>
	</thead>
	<tbody>
		<?php
			if(isset($executerusers))
			{
				foreach($executerusers as $user)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/edituser/<?php echo $user['id']?>"> <?php echo $user['username'] ?> </a>
							</td>
							<td>
								<?php echo $user['FIO']; ?>
							</td>
						</tr>
					<?php 
				}
			} 
			else
			{
				
			}
		?>
	</tbody>
</table>




<h3 class="a-center">Пользователи подрядчиков</h3>
<table>
	<thead>
	<tr>
		<th width="70%">
			Имя пользователя
		</th>
		<th width="30%">
			Подряд
		</th>
	</tr>
	</thead>
	<tbody>
		<?php
			if(isset($podryadusers))
			{
				foreach($podryadusers as $user)
				{
					?>
						<tr>
							<td>
								<a href="<?php echo URL::base(); ?>admin/edituser/<?php echo $user['id']?>"> <?php echo $user['username'] ?> </a>
							</td>
							<td>
								<?php echo $user['NAME']; ?>
							</td>
						</tr>
					<?php 
				}
			} 
			else
			{
				
			}
		?>
	</tbody>
</table>
