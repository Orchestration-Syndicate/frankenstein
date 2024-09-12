<?php 

namespace Frankenstein\Resource\MariaDB\MenuData;

use \Approach\Resource\MariaDB;
use Frankenstein\Resource\MariaDB\Aspect\MenuData\menu\user_trait as aspects;

class menu extends MariaDB\Database{

	/** Link minted Resource to its Aspects Profile */
	use aspects;
	// GetSourceName yourself from somewhere 

	// Change the user_trait to add functionality to this generated class
	const NAME = 'menu';
	const DATABASE = 'menu';
	const SERVER_NAME = 'p:MenuData';
	const RESOURCE_PROTO = 'MariaDB';
	const SERVER_CLASS = 'Frankenstein\Resource\MariaDB\MenuData';
	const RESOURCE_CLASS = 'Frankenstein\Resource\MariaDB';
	const CONNECTOR_CLASS = '\Approach\Service\MariaDB\Connector';
}
