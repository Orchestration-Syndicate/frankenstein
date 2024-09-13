<?php 

namespace Frankenstein\Resource\MariaDB\TestData;

use \Approach\Resource\MariaDB;
use Frankenstein\Resource\MariaDB\Aspect\TestData\test\user_trait as aspects;

class test extends MariaDB\Database{

	/** Link minted Resource to its Aspects Profile */
	use aspects;
	// GetSourceName yourself from somewhere 

	// Change the user_trait to add functionality to this generated class
	const NAME = 'test';
	const DATABASE = 'test';
	const SERVER_NAME = 'p:TestData';
	const RESOURCE_PROTO = 'MariaDB';
	const SERVER_CLASS = 'Frankenstein\Resource\MariaDB\TestData';
	const RESOURCE_CLASS = 'Frankenstein\Resource\MariaDB';
	const CONNECTOR_CLASS = '\Approach\Service\MariaDB\Connector';
}
