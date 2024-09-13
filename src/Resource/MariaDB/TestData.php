<?php 

namespace Frankenstein\Resource\MariaDB;

use \Approach\Resource\MariaDB;
use Frankenstein\Resource\MariaDB\Aspect\TestData\user_trait as aspects;

class TestData extends MariaDB\Server{

	/** Link minted Resource to its Aspects Profile */
	use aspects;
	// GetSourceName yourself from somewhere 

	// Change the user_trait to add functionality to this generated class
	const HOST = 'localhost';
	const USER = 'root';
	const PASS = 'NoobScience';
	const DATABASE = 'ApproachScaffold';
	const PORT = '3306';
	const SOCKET = '/var/run/mysqld/mysqld.sock';
	const PERSISTENT = '1';
	const CONNECTOR_CLASS = '\Approach\Service\MariaDB\Connector';
}
