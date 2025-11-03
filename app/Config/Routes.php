<?php

use App\Controllers\User;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->post('loginproses', 'Login::LoginProses');
$routes->get('logout', 'Login::logout');


// Landing page opsional
$routes->get('landing', 'Home::landing', ['as' => 'landing']);

// Halaman Admin (User Management)
$routes->get('user', 'User::index');

// Controller: App\Controllers\Surat
$routes->group('surat', ['filter' => 'auth:mahasiswa'], function($routes) {
    $routes->get('/', 'Surat::index', ['as' => 'surat.index']);
    $routes->get('create', 'Surat::create', ['as' => 'surat.create']);
    $routes->post('store', 'Surat::store', ['as' => 'surat.store']);
    $routes->get('edit/(:num)', 'Surat::edit/$1', ['as' => 'surat.edit']);
    $routes->post('update/(:num)', 'Surat::update/$1', ['as' => 'surat.update']);
    $routes->get('delete/(:num)', 'Surat::delete/$1', ['as' => 'surat.delete']);
});






