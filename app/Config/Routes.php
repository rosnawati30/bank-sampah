<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//CRUD Nasabah 
$routes->get('nasabah_add', 'Nasabah::create');
$routes->get('nasabah_detail', 'Nasabah::view');
$routes->get('nasabah_update', 'Nasabah::update');

$routes->setAutoRoute(true);