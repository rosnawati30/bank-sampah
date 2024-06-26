<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('nasabah', 'Nasabah::index');

//CRUD Nasabah 
$routes->get('nasabah/add', 'Nasabah::create');
$routes->post('nasabah/save', 'Nasabah::save');
$routes->get('nasabah/edit/(:num)', 'Nasabah::edit/$1');
$routes->post('nasabah/update/(:num)', 'Nasabah::update/$1');
$routes->get('nasabah/delete/(:num)', 'Nasabah::delete/$1');

$routes->get('/nasabah/detail/(:num)', 'Transaksi::view/$1');
$routes->get('/transaksi/create/(:num)', 'Transaksi::create/$1');
$routes->get('/transaksi/add/(:num)', 'Transaksi::add/$1');
$routes->get('/transaksi/save/', 'Transaksi::save');
$routes->get('/transaksi/save/', 'Transaksi::save');
$routes->delete('/transaksi/delete/(:num)', 'Transaksi::delete/$1');

$routes->setAutoRoute(true);