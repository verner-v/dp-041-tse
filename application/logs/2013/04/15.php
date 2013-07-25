<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-15 15:03:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Fiscal' not found ~ APPPATH/classes/Controller/Fiscal/Main.php [ 35 ] in :
2013-04-15 15:03:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-15 15:04:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Fiscal' not found ~ APPPATH/classes/Controller/Ajax.php [ 45 ] in :
2013-04-15 15:04:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-15 15:05:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Fiscal' not found ~ APPPATH/classes/Controller/Ajax.php [ 45 ] in :
2013-04-15 15:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-15 15:06:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Fiscal' not found ~ APPPATH/classes/Controller/Ajax.php [ 45 ] in :
2013-04-15 15:06:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-15 15:34:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'CLIENT_TYPE_ID' in 'where clause' [ SELECT * FROM client_type WHERE CLIENT_TYPE_ID = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-15 15:34:21 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Main.php(2145): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Controller/Ajax.php(47): Model_Fiscal_Main->getClientsByClientTypeId4Select(1)
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getclientsbyclienttypeid()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-15 15:41:51 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'CLIENT_TYPE_ID' in 'where clause' [ SELECT * FROM client_type WHERE CLIENT_TYPE_ID = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-15 15:41:51 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2145): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Controller/Ajax.php(47): Model_Fiscal_Fiscalmodel->getClientsByClientTypeId4Select(1)
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getclientsbyclienttypeid()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-15 15:46:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Model/Fiscal/Fiscalmodel.php [ 2151 ] in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2151
2013-04-15 15:46:49 --- DEBUG: #0 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2151): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/vhosts...', 2151, Array)
#1 /srv/www/vhosts/asu/application/classes/Controller/Ajax.php(47): Model_Fiscal_Fiscalmodel->getClientsByClientTypeId4Select(1)
#2 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getclientsbyclienttypeid()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2151