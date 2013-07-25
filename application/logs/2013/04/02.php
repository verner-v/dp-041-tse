<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-02 01:03:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in :
2013-04-02 01:03:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-02 01:54:47 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /srv/www/vhosts/asu/system/classes/Kohana/Cookie.php:67
2013-04-02 01:54:47 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /srv/www/vhosts/asu/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /srv/www/vhosts/asu/system/classes/Kohana/Cookie.php:67
2013-04-02 01:55:35 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /srv/www/vhosts/asu/system/classes/Kohana/Cookie.php:67
2013-04-02 01:55:35 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /srv/www/vhosts/asu/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /srv/www/vhosts/asu/system/classes/Kohana/Cookie.php:67
2013-04-02 10:10:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/pages/catalog/equipment/main.php [ 6 ] in /srv/www/vhosts/asu/application/views/pages/catalog/equipment/main.php:6
2013-04-02 10:10:41 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/catalog/equipment/main.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/vhosts...', 6, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
#2 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#3 /srv/www/vhosts/asu/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /srv/www/vhosts/asu/application/views/templates/maintemplate.php(45): Kohana_View->__toString()
#5 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
#6 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#7 /srv/www/vhosts/asu/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /srv/www/vhosts/asu/application/classes/Controller/Template/Defcntr.php(82): Kohana_Controller_Template->after()
#9 /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php(13): Controller_Template_Defcntr->after()
#10 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(87): Controller_Catalog_Equipment->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog_Equipment))
#13 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#16 {main} in /srv/www/vhosts/asu/application/views/pages/catalog/equipment/main.php:6