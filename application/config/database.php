<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array(
			'type'       => 'MySQL',
			'connection' => array(
					/**
					 * The following options are available for MySQL:
			*
			* string   hostname     server hostname, or socket
			* string   database     database name
			* string   username     database username
			* string   password     database password
			* boolean  persistent   use persistent connections?
			*
			* Ports and sockets may be appended to the hostname.
			*/
					'hostname'   => 'localhost',
					'database'   => 'asu',
					'username'   => 'asu',
					'password'   => 'asu',
					'persistent' => FALSE,
			),
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
			'profiling'    => TRUE,
		),
		
		'asuzf' => array(
				'type'       => 'MySQL',
				'connection' => array(
		/**
		* The following options are available for MySQL:
		*
		* string   hostname     server hostname, or socket
		* string   database     database name
		* string   username     database username
		* string   password     database password
		* boolean  persistent   use persistent connections?
		*
		* Ports and sockets may be appended to the hostname.
		*/
						'hostname'   => 'localhost',
						'database'   => 'asuzf',
						'username'   => 'asuzf',
						'password'   => 'asuzf',
						'persistent' => FALSE,
				),
				'table_prefix' => '',
				'charset'      => 'utf8',
				'caching'      => FALSE,
				'profiling'    => TRUE,
		)
);