<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//  auth
$routes->get('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::verifyRegister');
$routes->post('/login', 'Auth::verifyLogin');

// admin armada
$routes->get('/admin/armada', 'Armada::index');
$routes->get('/admin/add-armada', 'Armada::create');
$routes->post('/admin/add-armada', 'Armada::store');
$routes->get('/admin/edit-armada/(:num)', 'Armada::edit/$1');
$routes->post('/admin/edit-armada/(:num)', 'Armada::update/$1');
$routes->post('/armada/delete', 'Armada::delete');
$routes->get('/armada/detail/(:num)', 'Armada::detail/$1');

// admin pelanggan
$routes->get('/admin/pelanggan', 'Pelanggan::index');
$routes->get('/admin/add-pelanggan', 'Pelanggan::create');
$routes->post('/admin/add-pelanggan', 'Pelanggan::store');
$routes->get('/admin/edit-pelanggan/(:num)', 'Pelanggan::edit/$1');
$routes->post('/admin/edit-pelanggan/(:num)', 'Pelanggan::update/$1');
$routes->post('/pelanggan/delete', 'Pelanggan::delete');
$routes->get('/pelanggan/detail/(:num)', 'Pelanggan::detail/$1');

// user