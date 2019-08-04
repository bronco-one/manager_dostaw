<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=eblogwro_portfolio',
	'emulatePrepare' => true,
	'username' => 'eblogwro',
	'password' => 'ping_747_pong',
	'charset' => 'utf8',

);
