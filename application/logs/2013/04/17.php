<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-17 08:29:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Fiscal/Main.php [ 176 ] in :
2013-04-17 08:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 08:44:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: God ~ APPPATH/classes/Model/Fiscal/Fiscalmodel.php [ 2204 ] in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2204
2013-04-17 08:44:00 --- DEBUG: #0 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2204): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 2204, Array)
#1 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(177): Model_Fiscal_Fiscalmodel->addPrihodNakladnaya(Array)
#2 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_inBill()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2204
2013-04-17 09:48:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::addPrihodNakladnaya() ~ APPPATH/classes/Controller/Fiscal/Main.php [ 167 ] in :
2013-04-17 09:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 09:48:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Article_Model_ID_arr ~ APPPATH/classes/Model/Fiscal/Fiscalmodel.php [ 2212 ] in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2212
2013-04-17 09:48:42 --- DEBUG: #0 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2212): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 2212, Array)
#1 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(167): Model_Fiscal_Fiscalmodel->addPrihodnayaNakladnaya(Array)
#2 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_inBill()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2212
2013-04-17 09:49:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: FiscalNumber ~ APPPATH/classes/Model/Fiscal/Fiscalmodel.php [ 2212 ] in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2212
2013-04-17 09:49:27 --- DEBUG: #0 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2212): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/vhosts...', 2212, Array)
#1 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(167): Model_Fiscal_Fiscalmodel->addPrihodnayaNakladnaya(Array)
#2 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_inBill()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#5 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php:2212
2013-04-17 09:49:56 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'asuzf.Article' doesn't exist [ INSERT INTO Article(
					ARTICLE_MODEL_ID
					,COMPONENTS
					,PRODUCTIONDATE
					,FISCALNUMBER
					,FACTORYNUMBER
					,ARTICLE_SOFTVERSION_ID
					,PROCREATOR_ID
			) VALUES  (
					'1',
					'1',
					'15/04/2013',
					'',
					'fff',
					'1',
					'4'
					) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-17 09:49:56 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO Art...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(177): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2214): Model_Fiscal_Fiscalmodel->InsArticle('1', 1, '15/04/2013', NULL, 'fff', '1', '4')
#3 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(167): Model_Fiscal_Fiscalmodel->addPrihodnayaNakladnaya(Array)
#4 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_inBill()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-17 09:52:55 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'asuzf.Doc_Article_Store' doesn't exist [ INSERT INTO Doc_Article_Store(
					GOD
					,DOCDATE
					,DOCNUMBER
					,DOC_TYPE
					,PRICE
					,CONSIGNMENT_RECORDSID
					,EMPLOYEE_ID
					,ARTICLE_ID
			) VALUES (
					13,
					'',
					123,
					1,
					0,
					1,
					'1',
					4
					) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-17 09:52:55 --- DEBUG: #0 /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO Doc...', false, Array)
#1 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(674): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /srv/www/vhosts/asu/application/classes/Model/Fiscal/Fiscalmodel.php(2215): Model_Fiscal_Fiscalmodel->InsDoc_Article_Store(13, '', 123, 1, 0, 1, '1', 4)
#3 /srv/www/vhosts/asu/application/classes/Controller/Fiscal/Main.php(167): Model_Fiscal_Fiscalmodel->addPrihodnayaNakladnaya(Array)
#4 /srv/www/vhosts/asu/system/classes/Kohana/Controller.php(84): Controller_Fiscal_Main->action_inBill()
#5 [internal function]: Kohana_Controller->execute()
#6 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fiscal_Main))
#7 /srv/www/vhosts/asu/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /srv/www/vhosts/asu/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /srv/www/vhosts/asu/index.php(118): Kohana_Request->execute()
#10 {main} in /srv/www/vhosts/asu/modules/database/classes/Kohana/Database/Query.php:251
2013-04-17 16:01:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientType4Select() ~ APPPATH/classes/Controller/Fiscal/Main.php [ 37 ] in :
2013-04-17 16:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:37:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientType4Select() ~ APPPATH/classes/Controller/Fiscal/Main.php [ 37 ] in :
2013-04-17 17:37:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:42:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientType4Select() ~ APPPATH/classes/Controller/Fiscal/Main.php [ 37 ] in :
2013-04-17 17:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:50:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientsByClientTypeId4Select() ~ APPPATH/classes/Controller/Ajax.php [ 47 ] in :
2013-04-17 17:50:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:50:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientsByClientTypeId4Select() ~ APPPATH/classes/Controller/Ajax.php [ 47 ] in :
2013-04-17 17:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:50:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientsByClientTypeId4Select() ~ APPPATH/classes/Controller/Ajax.php [ 47 ] in :
2013-04-17 17:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:50:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getClientsByClientTypeId4Select() ~ APPPATH/classes/Controller/Ajax.php [ 47 ] in :
2013-04-17 17:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 17:59:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Fiscal_Fiscalmodel::getArticleModel4Select() ~ APPPATH/classes/Controller/Fiscal/Main.php [ 151 ] in :
2013-04-17 17:59:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :