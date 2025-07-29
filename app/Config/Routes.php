<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/testDB', 'Home::cekDatabase');
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/form_tambah', 'Barang::tambah');
$routes->post('/barang/simpan', 'Barang::simpan');
// :num untuk parameter ID
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/update/(:num)', 'Barang::update/$1');
$routes->get('/barang/hapus/(:num)', 'Barang::hapus/$1');