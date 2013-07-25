
<?php foreach ($acts as $act): ?>
<div align="center">
<?php echo form::open(); ?>
    <table border="5" style="width:65%">
        <tr>
            <th colspan="2" align="left"><i><?php echo form::label('pc_service','Виконавець'); ?></i></th>
            <th colspan="2" align="right"><i><?php echo form::label('atb_market','Замовник'); ?></i></th>
        </tr>
        <tr>
            <th colspan="2" align="left"><i><?php echo form::label('pc_service','ТОВ "НВП "ПК-Сервіс"'); ?></i></th>
            <th colspan="2" align="right"><i><?php echo form::label('atb_market',$zakazchikname); ?></i></th>
        </tr>
        <tr>
            <th colspan="4" style="font-size:140%"><?php echo form::label('act_number','Акт '.$act['NUMBER'].'['.$act['ID_ticket_ATB'].']'); ?></th>
        </tr>
        
        <tr>
            <th colspan="4" align="left"><?php echo form::label('create','Створена: '.$act['DATE_START']); ?></th>
        </tr>
        <tr>
            <th colspan="4" align="left"><?php echo form::label('coming','Прибув: '.$act['DATE_COMING']); ?></th>
        </tr>
        <tr>
            <th colspan="4" align="left"><?php echo form::label('leave','Відбув: '.$act['DATE_CREATE']); ?></th>
        </tr>
        <tr>
            <th colspan="4" align="left"><?php echo form::label('object_name','Об’єкт: '.$act['NAME']); ?></th>
        </tr>
        <tr>
            <th colspan="4" align="left"><?php echo form::label('address','Адреса: '.$act['ADDRESS']); ?></th>
        </tr>
        <tr>
            <th colspan="4"><?php echo form::textarea('static_info','Ми, ті, що нижче підписались, від ЗАМОВНИКА '.$act['NAME'].' '.$act['FIOREQ'].', з одного боку, та ТОВ "НВП "ПК-Сервіс" в особі сервісного інженера '.$act['FIOEXE'].', з другого боку, склали цей акт про нижченаведене:
ВИКОНАВЕЦЬ виконав, а ЗАМОВНИК прийняв наступні послуги:', array('rows' => '3', 'cols' => '114')); ?></th>
        </tr>
        
       
        
        <tr>
            <th colspan="4" align="left"><?php echo form::label('purpose_lbl', 'Причина виїзду(магазин):'); ?></th>
        </tr>
        <tr>
            <th colspan="4"><?php echo form::textarea('purpose',$act['DESCREQ'], array('rows' => '3', 'cols' => '114')); ?></th>
        </tr>
        
         <tr>
            <th colspan="4" align="left"><?php echo form::label('reason_lbl', 'Причина виїзду(подряд):'); ?></th>
        </tr>
        <tr>
            <th colspan="4"><?php echo form::textarea('purpose',$act['REASON'], array('rows' => '3', 'cols' => '114')); ?></th>
        </tr>
        
        
        <tr>
            <th colspan="4" align="left"><?php echo form::label('content_info_lbl','Сутність виконаних робіт:'); ?></th>
        </tr>
        <tr>
            <th colspan="4"><?php echo form::textarea('content_info',$act['DESCACT'], array('rows' => '4', 'cols' => '114')); ?></th>
        </tr>
        <tr>
            <th colspan="4" align="left"><?php echo form::label('ststic_text', 'Зроблено візуальний огляд всього комп’ютерного обладнання та кабелів живлення на предмет зауважень пожежної безпеки. Зауважень немає.'); ?></th>
        </tr>
        <tr>
            <td colspan="4"><pre>   </pre></td>
        </tr>
        <tr>
            <td colspan="4"><?php echo form::label('name_table_lbl','Обладнання:'); ?></td>
        </tr>
        <tr>
            <td bgcolor="lightgrey"><center>Тип</center></td>
            <td bgcolor="lightgrey"><center>Модель</center></td>
            <td bgcolor="lightgrey"><center>Зав.№</center></td>
            <td bgcolor="lightgrey"><center>Iнв.№</center></td>
        </tr>
        <?php foreach($hardware as $hrdw): ?>
        <tr>
            <td><center><?php echo $hrdw['HARDWARE_TYPE']; ?></center></td>
            <td><center><?php echo $hrdw['HARDWARE_MODEL']; ?></center></td>
            <td><center><?php echo $hrdw['HARDWARE_ZAVOD']; ?></center></td>
            <td><center><?php echo $hrdw['HARDWARE_INVENT']; ?></center></td>
        </tr>
        <?php endforeach; ?>        
        <?php
        if(!empty($software))
        {
            echo '<tr>';
            echo '<td colspan="4"><pre>   </pre></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="4">';
            echo form::label('static_lbl01','Програмне забезпечення:');
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td bgcolor="lightgrey"><center>Найменування</center></td>';
            echo '<td bgcolor="lightgrey"><center>Ключ сертифіката</center></td>';
            echo '<td colspan="2" bgcolor="lightgrey"><center>Ключ дистрибутива</center></td>';
            echo '</tr>';
        }
        ?>
        <?php foreach($software as $sftw): ?>        
        <tr>
            <td><center><?php echo $sftw['SOFTWARE_NAME']; ?></center></td>
            <td><center><?php echo $sftw['SOFTWARE_KEY']; ?></center></td>
            <td colspan="2"><center><?php echo $sftw['SOFTWARE_KEY_DISTR']; ?></center></td>
        </tr>        
        <?php endforeach; ?>        
        <?php
        if(!empty($equipment))
        {
            echo '<tr>';
            echo '<td colspan="4"><pre>   </pre></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="4">';
            echo form::label('static_lbl02','Під час виконання робіт були використані наступні матеріали та комплектуючі:');
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td bgcolor="lightgrey"><center>Тип</center></td>';
            echo '<td bgcolor="lightgrey"><center>Модель</center></td>';
            echo '<td bgcolor="lightgrey"><center>Зав.№</center></td>';
            echo '<td bgcolor="lightgrey"><center>Iнв.№</center></td>';
            echo '</tr>';
        }
        ?>
        <?php foreach($equipment as $eqp): ?>        
        <tr>
            <td><center><?php echo $eqp['TEQNAME']; ?></center></td>
            <td><center><?php echo $eqp['EQNAME']; ?></center></td>
            <td><center><?php echo $eqp['SERIAL']; ?></center></td>
            <td><center><?php echo $eqp['INVENT']; ?></center></td>
        </tr>        
        <?php endforeach; ?>
        <tr>
            <td colspan="4"><pre>   </pre></td>
        </tr>
        <tr>
            <td colspan="4"><?php echo form::label('zauvazh_lbl','Зауваження та пропозиції:'); ?></td>
        </tr>
        <tr>
            <td colspan="4"><pre>   </pre></td>
        </tr>
        <tr>
            <td colspan="4"><?php echo form::label('static_lbl2','По наданим послугам ЗАМОВНИК претензій не має.'); ?></td>
        </tr>
        <tr>
            <td colspan="4"><pre>   </pre></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo form::label('static_lbl3','ТОВ "НВП "ПК-Сервіс"'); ?></td>
            <td colspan="2"><?php echo form::label('static_lbl4',$act['NAME']); ?></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo form::label('static_lbl5','П.І.Б. '.$act['FIOEXE']); ?></td>
            <td colspan="2"><?php echo form::label('static_lbl6','П.І.Б. '.$act['FIOREQ']); ?></td>
        </tr>
        <tr>
            <td colspan="4"><pre>   </pre></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo form::label('static_lbl7','Підпис______________'); ?></td>
            <td colspan="2"><?php echo form::label('static_lbl8','Підпис______________'); ?></td>
        </tr>
    </table>
<?php echo form::close(); ?>
</div>


<div class="col-left-30">
		Скачать акт (если есть): 
</div>
<div class="col-right-70">
		<?php if($act['URL'] != '')
		{ 
			?>
			<a href="<?php echo URL::base(); ?>dispetcher/download/<?php echo $act['URL']?>"> link </a>
			<?php 
		}
		else 
		{
			echo "нет";
		}
		?>
</div>

<?php if(count($changelogs) != 0)
		{
			?> 
	<div class="col-left-30">
		История изменения 
	</div>
	<div class="col-right-70">
		:
	</div>
	<?php 
			
	
		foreach($changelogs as $item) 
		{ 
	
	?>
		
		<div class="col-left-30">
			<?php echo $item['DATE_CHANGE']; ?> : 
		</div>
		
		
		<div class="col-right-70">
			<?php echo $item['LOG'];?>
		</div>	
	<?php 	
		} 
	}
	?>


<?php endforeach; ?>


