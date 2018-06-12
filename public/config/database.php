<?php
##########################################
# application database configuration file.
##########################################

return [
	'mysql' => [
		'provider' => Kit\Glider\Platform\Mysqli\MysqliProvider::class,
		'host' => '',
		'alias' => 'mysqli',
		'username' => '',
		'password' => '',
		'database' => '',
		'charset' => 'utf8',
		'collation' => '',
		'domain' => [''],
		'auto_commit' => false,
		'prefix' => '',
		'alt' => null
	],
	'default' => [
		'provider' => Kit\Glider\Platform\Pdo\PdoProvider::class,
		'host' => '',
		'alias' => 'pdo',
		'username' => '',
		'password' => '',
		'database' => '',
		'charset' => 'utf8',
		'collation' => '',
		'domain' => [''],
		'prefix' => '',
		'auto_commit' => true,
		'alt' => null,
		'persistent' => true,
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_CASE => PDO::CASE_NATURAL,
			PDO::ATTR_PERSISTENT => true
		]
	]
];