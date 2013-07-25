<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-09 13:43:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_DefaultController' not found ~ APPPATH/classes/Controller/It/Main.php [ 3 ] in :
2013-04-09 13:43:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 13:44:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/manager/mainManager could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/vhosts/asu/system/classes/Kohana/View.php:137
2013-04-09 13:44:18 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/manager/m...')
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/manager/m...', NULL)
#2 /srv/www/vhosts/asu/application/classes/Controller/It/Main.php(10): Kohana_View::factory('pages/manager/m...')
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_It_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_It_Main))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/system/classes/Kohana/View.php:137
2013-04-09 13:45:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/it/mainManager.php [ 1 ] in :
2013-04-09 13:45:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 13:52:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view block/header_vic could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/vhosts/asu/system/classes/Kohana/View.php:137
2013-04-09 13:52:39 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/View.php(137): Kohana_View->set_filename('block/header_vi...')
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(30): Kohana_View->__construct('block/header_vi...', NULL)
#2 /srv/www/vhosts/asu/application/classes/Controller/It/Main.php(8): Kohana_View::factory('block/header_vi...')
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(69): Controller_It_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_It_Main))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/system/classes/Kohana/View.php:137
2013-04-09 14:10:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/manager/stuff could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/vhosts/asu/system/classes/Kohana/View.php:137
2013-04-09 14:10:44 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/manager/s...')
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/manager/s...', NULL)
#2 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(28): Kohana_View::factory('pages/manager/s...')
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_stuff()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/system/classes/Kohana/View.php:137
2013-04-09 14:14:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/stuff.php [ 49 ] in :
2013-04-09 14:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 14:28:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/stuff.php [ 49 ] in :
2013-04-09 14:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 14:28:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/stuff.php [ 49 ] in :
2013-04-09 14:28:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 14:29:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/stuff.php [ 49 ] in :
2013-04-09 14:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 14:29:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/stuff.php [ 49 ] in :
2013-04-09 14:29:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 14:40:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/contragents.php [ 103 ] in :
2013-04-09 14:40:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-09 15:15:01 --- EMERGENCY: ErrorException [ 2 ]: include(/srv/www/vhosts/asu/application/views/pages/fiscal/contragents.php): failed to open stream: Отказано в доступе ~ SYSPATH/classes/Kohana/View.php [ 61 ] in /srv/www/vhosts/asu/system/classes/Kohana/View.php:61
2013-04-09 15:15:01 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): Kohana_Core::error_handler(2, 'include(/srv/ww...', '/srv/www/vhosts...', 61, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): Kohana_View::capture()
#2 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#3 /srv/www/vhosts/asu/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /srv/www/vhosts/asu/application/views/templates/layout.php(31): Kohana_View->__toString()
#5 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
#6 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#7 /srv/www/vhosts/asu/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /srv/www/vhosts/asu/application/classes/Controller/Template/Defcntr.php(82): Kohana_Controller_Template->after()
#9 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(14): Controller_Template_Defcntr->after()
#10 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(87): Controller_Fiscal_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#13 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#16 {main} in /srv/www/vhosts/asu/system/classes/Kohana/View.php:61
2013-04-09 15:35:14 --- EMERGENCY: ErrorException [ 2 ]: include(/srv/www/vhosts/asu/application/views/pages/fiscal/contragents.php): failed to open stream: Отказано в доступе ~ SYSPATH/classes/Kohana/View.php [ 61 ] in /srv/www/vhosts/asu/system/classes/Kohana/View.php:61
2013-04-09 15:35:14 --- DEBUG: #0 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): Kohana_Core::error_handler(2, 'include(/srv/ww...', '/srv/www/vhosts...', 61, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): Kohana_View::capture()
#2 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#3 /srv/www/vhosts/asu/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /srv/www/vhosts/asu/application/views/templates/layout.php(31): Kohana_View->__toString()
#5 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
#6 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#7 /srv/www/vhosts/asu/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /srv/www/vhosts/asu/application/classes/Controller/Template/Defcntr.php(82): Kohana_Controller_Template->after()
#9 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(14): Controller_Template_Defcntr->after()
#10 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(87): Controller_Fiscal_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#13 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#16 {main} in /srv/www/vhosts/asu/system/classes/Kohana/View.php:61
2013-04-09 15:35:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/contragents.php [ 205 ] in :
2013-04-09 15:35:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :