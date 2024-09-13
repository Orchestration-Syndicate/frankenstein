<?php

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\deploy;
use Approach\path;
use Approach\Resource\MariaDB\Server;
use Approach\Scope;

$path_to_project = __DIR__ . '/src';
$path_to_approach = __DIR__ . '/support/lib/approach';
$path_to_support = __DIR__ . '/support';

$scope = new Scope(
    project: 'Frankenstein',
    path: [
        path::project->value => $path_to_project,
        path::installed->value => $path_to_approach,
        path::support->value => $path_to_support,
    ],
    deployment: [
        deploy::base->value => 'localhost',
        deploy::ensemble->value => 'localhost',
        deploy::resource->value => 'localhost',
        deploy::resource_user->value => 'root',
    ]
);

$server = new Server(
    host: 'localhost',  // Scope::GetDeploy( deploy::resource ),
    user: 'root',  // Scope::GetDeploy( deploy::resource_user ),
    port: 3306,
    pass: 'NoobScience',
    database: 'ApproachScaffold',
    label: 'TestData',
    // skip_connection: true
);

$server->discover();
