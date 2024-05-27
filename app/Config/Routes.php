<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nasabah', 'Nasabah::index');

//CRUD Nasabah 
// $routes->get('nasabah_add', 'Nasabah::create');
// $routes->get('nasabah_detail', 'Nasabah::view');
// $routes->get('nasabah_update', 'Nasabah::update');

$routes->get('/nasabah/detail/(:num)', 'Transaksi::view/$1');
$routes->get('/transaksi/create/(:num)', 'Transaksi::create/$1');
$routes->get('/transaksi/add/(:num)', 'Transaksi::add/$1');
$routes->get('/transaksi/save/', 'Transaksi::save');
$routes->get('/transaksi/save/', 'Transaksi::save');
$routes->delete('/transaksi/delete/(:num)', 'Transaksi::delete/$1');

$routes->setAutoRoute(true);