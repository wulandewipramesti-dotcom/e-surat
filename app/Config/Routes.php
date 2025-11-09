<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
// Halaman login utama
$routes->get('/', 'Landing::index'); // Landing page
$routes->get('login', 'Login::index'); // Halaman login
$routes->post('login/auth', 'Login::loginProses');
$routes->get('logout', 'Login::logout');



// ============================
// ADMIN
// ============================
$routes->get('admin', 'User::index');
 // Halaman user management admin

// ============================
// MAHASISWA
// Dashboard admin/mahasiswa
$routes->get('admin', 'Home::index');      // Home/dashboard
$routes->get('mahasiswa/index', 'Surat::index'); // Halaman surat mahasiswa

// CRUD Surat (tanpa filter Auth)
$routes->group('surat', function($routes) {
    $routes->get('/', 'Surat::index', ['as' => 'surat.index']);
    $routes->get('create', 'Surat::create', ['as' => 'surat.create']);
    $routes->post('store', 'Surat::store', ['as' => 'surat.store']);
    $routes->get('edit/(:num)', 'Surat::edit/$1', ['as' => 'surat.edit']);
    $routes->put('update/(:num)', 'Surat::update/$1', ['as' => 'surat.update']);
    $routes->get('delete/(:num)', 'Surat::delete/$1', ['as' => 'surat.delete']);
});

