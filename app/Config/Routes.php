<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/testDB', 'Home::cekDatabase');
$routes->get('/barang', 'Barang::index');
