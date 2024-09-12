<?php 

namespace Frankenstein\Resource\MariaDB\MenuData\menu;

use \Approach\Resource\MariaDB;
use Frankenstein\Resource\MariaDB\Aspect\MenuData\menu\items\user_trait as aspects;

class items extends MariaDB\Table{

	/** Link minted Resource to its Aspects Profile */
	use aspects;
	// GetSourceName yourself from somewhere 

	// Change the user_trait to add functionality to this generated class
	const DATABASE_CLASS = '\Frankenstein\Resource\MariaDB\MenuData\menu';
	const SERVER_CLASS = '\Frankenstein\Resource\MariaDB\MenuData';
	const CONNECTOR_CLASS = '\Approach\Service\MariaDB\Connector';
	const RESOURCE_CLASS = '\Frankenstein\Resource\MariaDB';
	const DATABASE_NAME = 'menu';
	const SERVER_NAME = 'p:MenuData';
	const RESOURCE_PROTO = 'MariaDB';
	const NAME = 'items';
	const COMMENT = '';
	const ENGINE = 'InnoDB';
	const ROW_FORMAT = 'Dynamic';
	const TABLE_COLLATION = 'utf8mb4_0900_ai_ci';
	const CREATE_OPTIONS = '';
	const TABLE_ROWS = '0';
	const AVG_ROW_LENGTH = '0';
	const DATA_LENGTH = '16384';
	const MAX_DATA_LENGTH = '0';
	const INDEX_LENGTH = '0';
	const DATA_FREE = '0';
	const AUTO_INCREMENT = '1';
	const CREATE_TIME = '2024-09-12 19:03:06';
	const UPDATE_TIME = '';
	const CHECK_TIME = '';
	const CHECKSUM = '';
	const TABLE_COMMENT = '';
}
