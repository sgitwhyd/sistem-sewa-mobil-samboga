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
   $routes->get('car-list', 'ArmadaController::showCarList');
   // user profile
   $routes->get('profile', 'ProfileController::index');
   $routes->post('profile', 'UserController::update');
   
   // transaksi
   $routes->get('transaksi', 'TransactionController::index');
   $routes->get('transaksi/add-transaksi/(:num)', 'TransactionController::create/$1');
   $routes->post('transaksi/add-transaksi', 'TransactionController::store');
   $routes->get('transaksi/detail/(:num)', 'TransactionController::detail/$1');
   
});

//  AuthController
$routes->get('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::verifyRegister');
$routes->post('/login', 'AuthController::verifyLogin');

$routes->group('admin', ['filter' => ['auth','authorized:manage_admin']], function($routes) {
   $routes->get('dashboard', 'Home::admin');

   // admin profile
   $routes->get('profile', 'ProfileController::index');
   $routes->post('profile', 'ProfileController::update');

   // admin armada
   $routes->get('armada', 'ArmadaController::index');
   $routes->get('armada/add-armada', 'ArmadaController::create');
   $routes->post('armada/add-armada', 'ArmadaController::store');
   $routes->get('armada/edit-armada/(:num)', 'ArmadaController::edit/$1');
   $routes->post('armada/edit-armada/(:num)', 'ArmadaController::update/$1');
   $routes->post('armada/delete', 'ArmadaController::delete');
   $routes->get('armada/detail/(:num)', 'ArmadaController::detail/$1');
   
   // admin bank account
   $routes->get('bank', 'BankController::index');
   $routes->get('bank/add-bank', 'BankController::create');
   $routes->post('bank/add-bank', 'BankController::store');
   $routes->get('bank/edit-bank/(:num)', 'BankController::edit/$1');
   $routes->post('bank/edit-bank/(:num)', 'BankController::update/$1');
   $routes->post('bank/delete', 'BankController::delete');
   $routes->get('bank/detail/(:num)', 'BankController::detail/$1');
   
   // admin user
   $routes->get('user', 'UserController::index');
   $routes->get('user/add-user', 'UserController::create');
   $routes->post('user/add-user', 'UserController::store');
   $routes->get('user/edit-user/(:num)', 'UserController::edit/$1');
   $routes->post('user/edit-user/(:num)', 'UserController::update/$1');
   $routes->post('user/delete', 'UserController::delete');
   $routes->get('user/detail/(:num)', 'UserController::detail/$1');

   // admin transaction
   $routes->get('transaksi', 'TransactionController::index');
   $routes->get('transaksi/add-transaksi', 'TransactionController::create');
   $routes->post('transaksi/add-transaksi', 'TransactionController::store');
   $routes->get('transaksi/edit-transaksi/(:num)', 'TransactionController::edit/$1');
   $routes->post('transaksi/edit-transaksi/(:num)', 'TransactionController::update/$1');
   $routes->post('transaksi/delete', 'TransactionController::destroy');
   $routes->get('transaksi/detail/(:num)', 'TransactionController::detail/$1');
   // export transaction
   $routes->post('transaksi/exportPDF', 'PdfController::generatePdf');

});
