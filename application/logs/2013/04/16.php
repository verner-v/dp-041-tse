<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-16 09:19:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/pages/fiscal/contragents.php [ 7 ] in :
2013-04-16 09:19:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 10:41:11 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'ID' in where clause is ambiguous [ SELECT client.*, client_type.name as CLIETNT_TYPE_NAME FROM client, client_type WHERE client_type.id = client.client_type_id and ID = '47' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 10:41:11 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT client.*...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2125): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Controller/Ajax.php(68): Model_Fiscal_Fiscalmodel->getClientById('47')
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getclientbyid()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 11:40:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Model/Fiscal/Fiscalmodel.php [ 2173 ] in :
2013-04-16 11:40:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 11:50:02 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'asuzf.Client' doesn't exist [ UPDATE Client SET
					NAME = 'aaaa',
					EDRPOU = 'ssss',
					UAddress = '',
					Client_Type_ID = '2',
					OwnerShip = 'dddd',
					City_ID = 0
				WHERE
				ID = '61'
				 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 11:50:02 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE Client S...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(473): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(95): Model_Fiscal_Fiscalmodel->UpdClient('61', 'aaaa', 'ssss', NULL, '2', 'dddd', 0)
#3 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_contragentedit()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:57:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: client_type ~ APPPATH/views/pages/fiscal/inBill.php [ 9 ] in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 14:57:22 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 9, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
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
#16 {main} in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 15:41:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: article_model_id ~ APPPATH/views/pages/fiscal/inBill.php [ 9 ] in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 15:41:54 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 9, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
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
#16 {main} in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 15:59:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: article_model_id ~ APPPATH/views/pages/fiscal/inBill.php [ 9 ] in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 15:59:09 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 9, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
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
#16 {main} in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 16:05:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: article_model_id ~ APPPATH/views/pages/fiscal/inBill.php [ 9 ] in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 16:05:38 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 9, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
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
#16 {main} in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:9
2013-04-16 16:05:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: softversion_id ~ APPPATH/views/pages/fiscal/inBill.php [ 14 ] in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:14
2013-04-16 16:05:59 --- DEBUG: #0 /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 14, Array)
#1 /srv/www/vhosts/asu/system/classes/Kohana/View.php(61): include('/srv/www/vhosts...')
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
#16 {main} in /srv/www/vhosts/asu/application/views/pages/fiscal/inBill.php:14