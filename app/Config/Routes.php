<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/testDB', 'Home::cekDatabase');
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/form_tambah', 'Barang::tambah');
$routes->post('/simpan', 'Barang::simpan');
