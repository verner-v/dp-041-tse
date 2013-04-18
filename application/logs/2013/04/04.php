<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-04 14:58:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/catalog/equipment/add.php [ 12 ] in :
2013-04-04 14:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-04 14:59:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arr_id ~ APPPATH/views/pages/catalog/equipment/add.php [ 11 ] in /srv/www/vhosts/asu/application/views/pages/catalog/equipment/add.php:11
2013-04-04 14:59:30 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/catalog/equipment/add.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 11, Array)
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
#16 {main} in /srv/www/vhosts/asu/application/views/pages/catalog/equipment/add.php:11
2013-04-04 15:05:12 --- EMERGENCY: ErrorException [ 2 ]: array_combine() expects parameter 1 to be array, string given ~ APPPATH/views/pages/catalog/equipment/add.php [ 11 ] in :
2013-04-04 15:05:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_combine()...', '/srv/www/vhosts...', 11, Array)
#1 /srv/www/vhosts/asu/application/views/pages/catalog/equipment/add.php(11): array_combine('49', '??????????????')
#2 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
#3 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#4 /srv/www/vhosts/asu/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /srv/www/vhosts/asu/application/views/templates/maintemplate.php(45): Kohana_View->__toString()
#6 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
#7 /srv/www/vhosts/asu/system/classes/Kohana/View.php(348): Kohana_View::capture('/srv/www/vhosts...', Array)
#8 /srv/www/vhosts/asu/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /srv/www/vhosts/asu/application/classes/Controller/Template/Defcntr.php(82): Kohana_Controller_Template->after()
#10 /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php(13): Controller_Template_Defcntr->after()
#11 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(87): Controller_Catalog_Equipment->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog_Equipment))
#14 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-04-04 17:56:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: qwe ~ APPPATH/classes/Controller/Catalog/Equipment.php [ 45 ] in /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php:45
2013-04-04 17:56:55 --- DEBUG: #0 /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 45, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Catalog_Equipment->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog_Equipment))
#4 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php:45
2013-04-04 17:59:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '41'',''hello'')' at line 1 [ INSERT INTO `EQ_BRAND` (`ID_TYPE`,`NAME`) values (''41'',''hello'') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-04 17:59:45 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `EQ...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Equipment.php(79): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php(46): Model_Equipment->addBrand('41', 'hello')
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Catalog_Equipment->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog_Equipment))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251