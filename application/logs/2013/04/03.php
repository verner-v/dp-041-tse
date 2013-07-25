<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-03 10:20:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/pages/catalog/equipment/search.php [ 114 ] in :
2013-04-03 10:20:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-03 15:39:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: var ~ APPPATH/classes/Controller/Catalog/Equipment.php [ 62 ] in /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php:62
2013-04-03 15:39:22 --- DEBUG: #0 /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 62, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Catalog_Equipment->action_viewcat()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog_Equipment))
#4 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/vhosts/asu/application/classes/Controller/Catalog/Equipment.php:62