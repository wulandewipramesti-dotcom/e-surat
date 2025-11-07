<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman login utama
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');

// Landing page opsional
$routes->get('landing', 'Home::landing', ['as' => 'landing']);

// ============================
// ADMIN
// ============================
$routes->get('admin', 'User::index');
 // Halaman user management admin

// ============================
// MAHASISWA
// ============================
$routes->get('mahasiswa/index', 'Surat::index'); // Halaman surat mahasiswa

// CRUD Surat (tanpa filter Auth)
$routes->group('surat', function($routes) {
    $routes->get('/', 'Surat::index', ['as' => 'surat.index']);
    $routes->get('create', 'Surat::create', ['as' => 'surat.create']);
    $routes->post('store', 'Surat::store', ['as' => 'surat.store']);
    $routes->get('edit/(:num)', 'Surat::edit/$1', ['as' => 'surat.edit']);
    $routes->post('update/(:num)', 'Surat::update/$1', ['as' => 'surat.update']);
    $routes->get('delete/(:num)', 'Surat::delete/$1', ['as' => 'surat.delete']);
});

