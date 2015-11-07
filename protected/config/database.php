<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=regenbuk',
	//'connectionString' => 'mysql:host=localhost;dbname=regenbuk',
	'emulatePrepare' => true,
	//'username' => 'root',
	'username' => 'root',
	//'password' => '',
	'password' => 'kodokbangkok',
	'charset' => 'utf8',
	
);