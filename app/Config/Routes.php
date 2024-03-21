<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::main');
$routes->get('/inicio', 'Landing::main');
$routes->get('/roles', 'Roles::index');
$routes->get('/leerRoles', 'Roles::leerRolesCtlr');

$routes->get('/nosotros', 'Landing::nosotros');
$routes->get('/pedidos', 'Landing::pedidos');
$routes->get('/compras', 'Landing::compras');
$routes->get('/miperfil', 'Landing::miperfil');
$routes->get('/contacto', 'Landing::contacto');