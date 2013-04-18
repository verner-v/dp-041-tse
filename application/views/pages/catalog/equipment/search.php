<form id="form" class="form-horizontal" action="<?php echo URL::base().'catalog/productedit'; ?>" method="POST">
<fieldset>

		<div class="control-group">
			<label class="control-label" for="SEARCH_ID_EUQIPMENT">Введите ID</label>
			<div class="controls">
				<input type="text" id="SEARCH_ID_EUQIPMENT" name="SEARCH_ID_EUQIPMENT" placeholder="" class="input-medium" />
				<button type="submit" class="btn" name="submit" value="SEARCH_ID_EUQIPMENT">Search</button>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="SEARCH_MODEL_NAME">Введите Модель</label>
			<div class="controls">
				<input type="text" id="SEARCH_MODEL_NAME" name="SEARCH_MODEL_NAME" placeholder="" class="input-medium" />
				<button type="submit" class="btn" name="submit" value="SEARCH_MODEL_NAME">Search</button>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="SEARCH_SERIAL">Введите S/N:</label>
			<div class="controls">
				<input type="text" id="SEARCH_SERIAL" name="SEARCH_SERIAL" placeholder=""
					class="input-medium" />
				<button type="submit" class="btn" name="submit" value="SEARCH_SERIAL">Search</button>
			</div>
		</div>


		<?php if(isset($product)) :

?>
		<div id="legend">
			<legend class="">Редактирование товара</legend>
		</div>
		<div class="control-group">
			<!-- Username -->
			<label class="control-label" for="ID_ARTICLES">ID_ARTICLES</label>
			<div class="controls">
				<input type="text" id="ID_ARTICLES" name="ID_ARTICLES" placeholder="" class="input-xlarge"  value = "<?php echo $product['ID_ARTICLES']; ?>" />
			</div>
		</div>
		
		<div class="control-group">
			<!-- Username -->
			<label class="control-label" for="ARTICLE">ARTICLE</label>
			<div class="controls">
				<input type="text" id="ARTICLE" name="ARTICLE" placeholder="" class="input-xlarge" value = "<?php echo $product['ARTICLE']; ?>" />
			</div>
		</div>
		
		<div class="control-group">
			<!-- Username -->
			<label class="control-label" for="ID_ARTICLES_CATEGORY">ID_ARTICLES_CATEGORY</label>
			<div class="controls">
				<input type="text" id="ID_ARTICLES_CATEGORY" name="ID_ARTICLES_CATEGORY" placeholder="" class="input-xlarge" value = "<?php echo $product['ID_ARTICLES_CATEGORY']; ?>" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ID_ARTICLES_GROUP">ID_ARTICLES_GROUP</label>
			<div class="controls">
				<input type="text" id="ID_ARTICLES_GROUP" name="ID_ARTICLES_GROUP" placeholder="" class="input-xlarge" value = "<?php echo $product['ID_ARTICLES_GROUP']; ?>" />
			</div>
		</div>

		<div class="control-group">
			<!-- Password-->
			<label class="control-label" for="FULLNAME">FULLNAME</label>
			<div class="controls">
				<input type="text" id="FULLNAME" name="FULLNAME" placeholder="" class="input-xlarge" value = "<?php echo $product['FULLNAME']; ?>" />
			</div>
		</div>
		
		<div class="control-group">
			<!-- Password-->
			<label class="control-label" for="NAME">NAME</label>
			<div class="controls">
				<input type="text" id="NAME" name="NAME" placeholder="" class="input-xlarge" value = "<?php echo $product['NAME']; ?>" />
			</div>
		</div>

		<div class="control-group">
			<!-- Password-->
			<label class="control-label" for="TAXGROUP">TAXGROUP</label>
			<div class="controls">
				<input type="text" id="TAXGROUP" name="TAXGROUP" placeholder="" class="input-xlarge" value = "<?php echo $product['TAXGROUP']; ?>" />
			</div>
		</div>

		Штрихкод <a href="#" onClick='createBarcode(); event.preventDefault();'> добавить </a>

	

		
	
	<div id="place_for_insert">
		
	</div>
	
		
		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button class="btn btn-success" type="submit" name="submit" value="Сохранить">Сохранить </button>
			</div>
		</div>
	<?php 
	endif;
	?>
	
	
	</fieldset>
</form>
