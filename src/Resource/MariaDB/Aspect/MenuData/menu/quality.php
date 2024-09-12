<?php
namespace Frankenstein\Resource\MariaDB\Aspect\MenuData\menu;

use \Approach\Resource\MariaDB\Aspect\quality as MariaDB_quality;

class quality extends MariaDB_quality

{

// Discovered Quality
	const NAME = 0;
	const DATABASE = 1;
	const SERVER_NAME = 2;
	const RESOURCE_PROTO = 3;
	const SERVER_CLASS = 4;
	const RESOURCE_CLASS = 5;
	const CONNECTOR_CLASS = 6;


// Discovered Quality Metadata
	const _approach_quality_profile_ = [
		MariaDB_quality::label => [
			self::NAME => 'NAME', 
			self::DATABASE => 'DATABASE', 
			self::SERVER_NAME => 'SERVER_NAME', 
			self::RESOURCE_PROTO => 'RESOURCE_PROTO', 
			self::SERVER_CLASS => 'SERVER_CLASS', 
			self::RESOURCE_CLASS => 'RESOURCE_CLASS', 
			self::CONNECTOR_CLASS => 'CONNECTOR_CLASS', 
		],
		MariaDB_quality::description => [
			self::NAME => NULL, 
			self::DATABASE => NULL, 
			self::SERVER_NAME => NULL, 
			self::RESOURCE_PROTO => NULL, 
			self::SERVER_CLASS => NULL, 
			self::RESOURCE_CLASS => NULL, 
			self::CONNECTOR_CLASS => NULL, 
		],
		MariaDB_quality::keywords => [
			self::NAME => NULL, 
			self::DATABASE => NULL, 
			self::SERVER_NAME => NULL, 
			self::RESOURCE_PROTO => NULL, 
			self::SERVER_CLASS => NULL, 
			self::RESOURCE_CLASS => NULL, 
			self::CONNECTOR_CLASS => NULL, 
		],
		MariaDB_quality::children => [
			self::NAME => NULL, 
			self::DATABASE => NULL, 
			self::SERVER_NAME => NULL, 
			self::RESOURCE_PROTO => NULL, 
			self::SERVER_CLASS => NULL, 
			self::RESOURCE_CLASS => NULL, 
			self::CONNECTOR_CLASS => NULL, 
		],
		MariaDB_quality::related => [
			self::NAME => NULL, 
			self::DATABASE => NULL, 
			self::SERVER_NAME => NULL, 
			self::RESOURCE_PROTO => NULL, 
			self::SERVER_CLASS => NULL, 
			self::RESOURCE_CLASS => NULL, 
			self::CONNECTOR_CLASS => NULL, 
		],
		MariaDB_quality::type => [
			self::NAME => NULL, 
			self::DATABASE => NULL, 
			self::SERVER_NAME => NULL, 
			self::RESOURCE_PROTO => NULL, 
			self::SERVER_CLASS => NULL, 
			self::RESOURCE_CLASS => NULL, 
			self::CONNECTOR_CLASS => NULL, 
		],
		MariaDB_quality::state => [
			self::NAME => 'menu', 
			self::DATABASE => 'menu', 
			self::SERVER_NAME => 'p:MenuData', 
			self::RESOURCE_PROTO => 'MariaDB', 
			self::SERVER_CLASS => 'Frankenstein\\Resource\\MariaDB\\MenuData', 
			self::RESOURCE_CLASS => 'Frankenstein\\Resource\\MariaDB', 
			self::CONNECTOR_CLASS => '\\Approach\\Service\\MariaDB\\Connector', 
		],
	];

}
