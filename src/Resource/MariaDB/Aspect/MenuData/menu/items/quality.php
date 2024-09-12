<?php
namespace Frankenstein\Resource\MariaDB\Aspect\MenuData\menu\items;

use \Approach\Resource\MariaDB\Aspect\quality as MariaDB_quality;

class quality extends MariaDB_quality

{

// Discovered Quality
	const DATABASE_CLASS = 0;
	const SERVER_CLASS = 1;
	const CONNECTOR_CLASS = 2;
	const RESOURCE_CLASS = 3;
	const DATABASE_NAME = 4;
	const SERVER_NAME = 5;
	const RESOURCE_PROTO = 6;
	const NAME = 7;
	const COMMENT = 8;
	const ENGINE = 9;
	const ROW_FORMAT = 10;
	const TABLE_COLLATION = 11;
	const CREATE_OPTIONS = 12;
	const TABLE_ROWS = 13;
	const AVG_ROW_LENGTH = 14;
	const DATA_LENGTH = 15;
	const MAX_DATA_LENGTH = 16;
	const INDEX_LENGTH = 17;
	const DATA_FREE = 18;
	const AUTO_INCREMENT = 19;
	const CREATE_TIME = 20;
	const UPDATE_TIME = 21;
	const CHECK_TIME = 22;
	const CHECKSUM = 23;
	const TABLE_COMMENT = 24;


// Discovered Quality Metadata
	const _approach_quality_profile_ = [
		MariaDB_quality::label => [
		],
		MariaDB_quality::description => [
		],
		MariaDB_quality::keywords => [
		],
		MariaDB_quality::children => [
		],
		MariaDB_quality::related => [
		],
		MariaDB_quality::type => [
		],
		MariaDB_quality::state => [
		],
	];

}
