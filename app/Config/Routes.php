<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::main');
$routes->get('/roles', 'Roles::index');
$routes->get('/roles', 'Roles::leerRolesCtlr');