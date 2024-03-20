<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::main');
$routes->get('/roles', 'Roles::index');
$routes->get('/leerRoles', 'Roles::leerRolesCtlr');

$routes->get('/somosCampeche', 'Landing::somosCampeche');
$routes->get('/pedidos', 'Landing::pedidos');