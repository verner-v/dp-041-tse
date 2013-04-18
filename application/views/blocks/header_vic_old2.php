
<script
	type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script
	type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link
	href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css"
	rel="stylesheet">
<link
	rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/bootstrap-datetimepicker.min.css">
	
<link
	rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/style.css">
		
</head>
<body>

	<script type="text/javascript" src="js/jquery.js">
    </script>
	<script type="text/javascript" src="js/bootstrap.min.js">
    </script>
	<script type="text/javascript"
		src="/assets/js/bootstrap-datetimepicker.min.js">
    </script>
	<script type="text/javascript"
		src="/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>

</body>

<script>
      $(document).ready(function(){
      $(".left").css("float","left");
      $(".right").css("float","right");
          });
    </script>


<!-- Основное меню -->
<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse"
				data-target=".nav-collapse"> <span class="icon-bar"></span> <span
				class="icon-bar"></span> <span class="icon-bar"></span>
			</a> <a class="brand" href="<?php echo URL::base() ?>manager/index"
				name="top">PC-SERVICE</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<!-- Пункт Справочники -->
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><i class="icon-book"></i> Справочники <b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::base() ?>manager/stuff">
									Оборудование</a></li>
							<li><a href="<?php echo URL::base() ?>manager/contragents">
									Контрагенты</a></li>
						</ul>
					</li>
					<li class="divider-vertical"></li>
					<!-- Пункт Документы -->
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><i class=" icon-file"></i> Журналы <b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::base() ?>manager/docsStore">
									Документы склада</a></li>
							<li><a href="<?php echo URL::base() ?>manager/docsCenter">
									Документы сервисного центра</a></li>
						</ul>
					</li>
					<li class="divider-vertical"></li>
					<!-- Пункт Отчеты -->
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><i class="icon-list-alt"></i> Отчеты <b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::base() ?>manager/ordersPlombs">
									Отчеты по пломбам</a></li>
							<li><a href="<?php echo URL::base() ?>manager/planingTO">
									Планируемое ТО</a></li>
						</ul>
					</li>
					<li class="divider-vertical"></li>
				</ul>

				<!-- Меню для учетной записи -->
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-user"></i> Manager <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-info-sign"></i> О программе</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-share"></i> Выйти</a></li>
					</ul>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
