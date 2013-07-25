<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us" />
         
    <title><?php echo $title;?></title>
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'/>
    <meta name="keywords" content="<?php echo $meta_keywords;?>" />
    <meta name="description" content="<?php echo $meta_description;?>" />
    <meta name="copyright" content="<?php echo $meta_copywrite;?>" />
    <?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }?>
    <?php foreach($scripts as $file) { echo HTML::script($file, NULL, TRUE), "\n"; }?>
   
  </head>
<body>

	<div id="wrap">

		<?php echo $header; ?>
		<?php echo $subheader;?>

		<div class="container">


			<div class="row">
				<div class="span2">
					<?php echo $sidebar; ?>
				</div>
				<div class="span10">

					<?php if(isset($errormessage) && $errormessage != NULL && $errormessage != '' ) :?>

					<div class="row">
						<div class="span9">
							<div class="alert alert-error">
								<a class="close" data-dismiss="alert" href="#">×</a>
								<?php echo $errormessage; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>

					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php echo $footer; ?>
	</div>

</body>
</html>