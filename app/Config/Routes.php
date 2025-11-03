<?php

use App\Controllers\User;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index', ['as' => 'login']);
$routes->post('/loginproses', 'LoginController::LoginProses');
$routes->get('/logout', 'Login::logout', ['as' => 'logout']);

// ==== LANDING PAGE OPSIONAL ====
$routes->get('/landing', 'Home::landing', ['as' => 'landing']);


// ==== ADMIN (User Management) ====
// Controller: App\Controllers\User
$routes->get('/admin/user', 'Admin\User::index', ['filter' => 'auth:admin']);

// ==== MAHASISWA (Surat CRUD) ====
// Controller: App\Controllers\Surat
$routes->group('surat', ['filter' => 'auth:mahasiswa'], function($routes) {
    $routes->get('/', 'Surat::index', ['as' => 'surat.index']);
    $routes->get('create', 'Surat::create', ['as' => 'surat.create']);
    $routes->post('store', 'Surat::store', ['as' => 'surat.store']);
    $routes->get('edit/(:num)', 'Surat::edit/$1', ['as' => 'surat.edit']);
    $routes->post('update/(:num)', 'Surat::update/$1', ['as' => 'surat.update']);
    $routes->get('delete/(:num)', 'Surat::delete/$1', ['as' => 'surat.delete']);
});

$routes->get('login', 'Login::index');






