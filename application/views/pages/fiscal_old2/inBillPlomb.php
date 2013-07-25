
<h4 class='title_pad'><b>Приходная накладная:</b></h4>
<div class="navbar">
    <div class="navbar-inner_table">
    <div class="container-fluid">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
  
    <div class="nav-collapse collapse">
     <ul class="nav">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Создать<b class="caret"></b>
        <ul class="dropdown-menu">
      		<li><a href="<?php echo URL::base() ?>fiscal/main/inBill"> Приходная накладная</a></li>
      		<li><a href="<?php echo URL::base() ?>fiscal/main/inBillPlomb"> Приходная накладная(Пломбы)</a></li>
      		<li><a href="<?php echo URL::base() ?>fiscal/main/OutBill"> Расходная накладная</a></li>
   		</ul>
   		</li>
   		<li><a href="<?php echo URL::base() ?>fiscal/main/inBill">Изменить</a></li>
   		<li><a href="<?php echo URL::base() ?>fiscal/main/inBill">Удалить</a></li>
   		
   	       
        
   	   </li>
   	 </ul>
    </div>
  </div>
</div>
</div>

<!-- Основная форма -->

   
	<div style="margin: 0;">
     
     <div style="float:right;margin-top:0px; margin-right: 380px;">Дата документа: &nbsp;&nbsp;   
        <div id="datetimepicker5" class="input-append date">
    			<input data-format="dd/MM/yyyy" type="text"></input>
    				<span class="add-on">
      					<i data-date-icon="icon-calendar"></i>
    				</span>
 			<script type="text/javascript">
  				$(function() {
    			$('#datetimepicker5').datetimepicker({
     		 	language: 'pt-BR'
    			});
 			 });
			</script> 
		</div>   
     </div>
     
     <div style="float:">№ документа
       <input size=2> - </input>
       <input size=6> - </input>
       <input size=2></input>
     </div>
    </div>
      <br>  
<div class="padd">
 <div>
  <div class="alignFormL">
  <div>Склад:</div>
  <select name="store">
     <option value="1" >Основной склад</option>
  </select>
  </div>
  <div class="alignFormR">
  <div>Ответственный:</div>
  <select name="otv_employee">
     <option value="1" >Новиков В.В.</option>
  </select>
  </div>
  <div class="alignFormR">
  <div>Поставщик:</div>
  	<?php echo Form::select('procreator_id',$procreator_id,''); ?>
  </div>
  </div>
  </div>
 
 <br>
 <div style="margin-bottom: 10px;">Номер пломб:</div>
  <div style="float: left"> С: 
       <input size=2 /> - 
       <input size=6 /> 
  </div>
  <div style="float: left; margin-left: 40px"> по: 
       <input size=2 /> - 
       <input size=6 /> 
  </div>
  
   <div style="float: left; margin-left: 90px">Цена, грн: 
       <input size=6 />
   </div>    
    
  
    	<div style="float: left;margin-left:730px;">				
					<button class="btn btn-info" name="mail_submit" type="submit"
						value="Отправить сообщение" > Сохранить</button>
		</div>
		
		<div style="float: right;margin-right: 0px;">	
					<button class="btn" name="close" type="button"
						value="Закрыть" ">Отмена </button> 
		</div>	

