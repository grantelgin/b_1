<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=127.0.0.1;dbname=grantelg_bureaucracy',
			'username'   => 'root',
			'password'   => 'root',
		),
	),
	'profiling'  => true,
);
