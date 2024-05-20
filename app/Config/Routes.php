<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/error', 'Home::error');

// user role
$routes->group('user', ['filter' => ['auth','authorized:manage_user']], function($routes) {
   $routes->get('dashboard', 'Home::user');

});

//  AuthController
$routes->get('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::verifyRegister');
$routes->post('/login', 'AuthController::verifyLogin');

$routes->group('admin', ['filter' => ['auth','authorized:manage_admin']], function($routes) {
   $routes->get('dashboard', 'Home::admin');

   // admin armada
   $routes->get('armada', 'ArmadaController::index');
   $routes->get('add-armada', 'ArmadaController::create');
   $routes->post('add-armada', 'ArmadaController::store');
   $routes->get('edit-armada/(:num)', 'ArmadaController::edit/$1');
   $routes->post('edit-armada/(:num)', 'ArmadaController::update/$1');
   $routes->post('delete', 'ArmadaController::delete');
   $routes->get('armada/detail/(:num)', 'ArmadaController::detail/$1');
   
   // admin pelanggan
   $routes->get('/admin/pelanggan', 'Pelanggan::index');
   $routes->get('/admin/add-pelanggan', 'Pelanggan::create');
   $routes->post('/admin/add-pelanggan', 'Pelanggan::store');
   $routes->get('/admin/edit-pelanggan/(:num)', 'Pelanggan::edit/$1');
   $routes->post('/admin/edit-pelanggan/(:num)', 'Pelanggan::update/$1');
   $routes->post('/pelanggan/delete', 'Pelanggan::delete');
   $routes->get('/pelanggan/detail/(:num)', 'Pelanggan::detail/$1');

});


// user

$routes->get('/car-list', 'Armada::showCarList');