<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Tasks;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// Tasks
$routes->get('tasks', [Tasks::class, "index"]);
