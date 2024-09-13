<?php
namespace Frankenstein\Resource\MariaDB\Aspect\TestData;

use \Approach\Resource\MariaDB\Aspect\quality as MariaDB_quality;

class quality extends MariaDB_quality

{

// Discovered Quality
	const HOST = 0;
	const USER = 1;
	const PASS = 2;
	const DATABASE = 3;
	const PORT = 4;
	const SOCKET = 5;
	const PERSISTENT = 6;


// Discovered Quality Metadata
	const _approach_quality_profile_ = [
		MariaDB_quality::label => [
			self::HOST => 'HOST', 
			self::USER => 'USER', 
			self::PASS => 'PASS', 
			self::DATABASE => 'DATABASE', 
			self::PORT => 'PORT', 
			self::SOCKET => 'SOCKET', 
			self::PERSISTENT => 'PERSISTENT', 
		],
		MariaDB_quality::description => [
			self::HOST => NULL, 
			self::USER => NULL, 
			self::PASS => NULL, 
			self::DATABASE => NULL, 
			self::PORT => NULL, 
			self::SOCKET => NULL, 
			self::PERSISTENT => NULL, 
		],
		MariaDB_quality::keywords => [
			self::HOST => NULL, 
			self::USER => NULL, 
			self::PASS => NULL, 
			self::DATABASE => NULL, 
			self::PORT => NULL, 
			self::SOCKET => NULL, 
			self::PERSISTENT => NULL, 
		],
		MariaDB_quality::children => [
			self::HOST => NULL, 
			self::USER => NULL, 
			self::PASS => NULL, 
			self::DATABASE => NULL, 
			self::PORT => NULL, 
			self::SOCKET => NULL, 
			self::PERSISTENT => NULL, 
		],
		MariaDB_quality::related => [
			self::HOST => NULL, 
			self::USER => NULL, 
			self::PASS => NULL, 
			self::DATABASE => NULL, 
			self::PORT => NULL, 
			self::SOCKET => NULL, 
			self::PERSISTENT => NULL, 
		],
		MariaDB_quality::type => [
			self::HOST => NULL, 
			self::USER => NULL, 
			self::PASS => NULL, 
			self::DATABASE => NULL, 
			self::PORT => NULL, 
			self::SOCKET => NULL, 
			self::PERSISTENT => NULL, 
		],
		MariaDB_quality::state => [
			self::HOST => 'localhost', 
			self::USER => 'root', 
			self::PASS => 'NoobScience', 
			self::DATABASE => 'ApproachScaffold', 
			self::PORT => 3306, 
			self::SOCKET => '/var/run/mysqld/mysqld.sock', 
			self::PERSISTENT => true, 
		],
	];

}
