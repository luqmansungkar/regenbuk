<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	//'connectionString' => 'mysql:host=localhost;dbname=k2218170_regenbuk',
	'connectionString' => 'mysql:host=localhost;dbname=regenbuk',
	'emulatePrepare' => true,
	'username' => 'root',
	//'username' => 'k2218170_website',
	'password' => '',
	//'password' => 'U2@kEDZTNGI_',
	'charset' => 'utf8',
	
);