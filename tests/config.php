<?php
// When using system phpunit, autoload must be included manually.
require_once __DIR__ . '/../vendor/autoload.php';

$db_connections = array(
	'default_connection' => array(
		'driver'   => 'mysql',
		'host'     => 'localhost',
		'dbname'   => 'dabl_test',
		'user'     => 'travis',
		'password' => ''
	),
	'default_pgsql' => array(
		'driver'   => 'pgsql',
		'host'     => 'localhost',
		'dbname'   => 'dabl_test',
		'user'     => 'postgres',
		'password' => '',
	)
);

// connect to database(s)
foreach ($db_connections as $connection_name => $db_params) {
	DBManager::addConnection($connection_name, $db_params);
}
