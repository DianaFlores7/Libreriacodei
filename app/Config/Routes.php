<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/libreria', 'Productos::libreria');

$routes->get('/productos/formulario', 'Productos::index');