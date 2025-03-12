<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/libreria', 'Productos::libreria');
$routes->get('/productos/formulario', 'Productos::index');
$routes->get('/libros', 'Libros::index'); // Ruta para la vista Libros
$routes->get('/editar', 'Editar::index'); // Ruta para la vista Editar
$routes->post('crudcontrolers/registrar', 'CrudControlers::registrar');