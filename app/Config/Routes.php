<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman login utama
$routes->get('/', 'Landing::index'); // Landing page
$routes->get('login', 'Login::index'); 
$routes->post('login/auth', 'Login::loginProses');
$routes->get('logout', 'Login::logout');

// ============================
// ADMIN
// ============================
$routes->get('admin', 'Home::index');  
$routes->get('data-user', 'User::index'); // Halaman user management admin

// ============================
// MAHASISWA
// ============================

// Dashboard mahasiswa
$routes->get('dashboard_mhs', 'Mahasiswa::dashboard'); 

// ============================
// CRUD Surat Mahasiswa
// ============================

// Semua folder mahasiswa: skak, sic, sik, simr, sism, spm
$folders = ['skak', 'sic', 'sik', 'simr', 'sism', 'spm'];

foreach ($folders as $folder) {
    $ucFolder = ucfirst($folder); // Controller harus huruf besar

    $routes->group("mahasiswa/$folder", function($routes) use ($ucFolder, $folder) {
        $routes->get('/', "Mahasiswa\\$ucFolder::index", ['as' => "$folder.index"]);
        $routes->get('create', "Mahasiswa\\$ucFolder::create", ['as' => "$folder.create"]);
        $routes->post('store', "Mahasiswa\\$ucFolder::store", ['as' => "$folder.store"]);
        $routes->get('edit/(:num)', "Mahasiswa\\$ucFolder::edit/$1", ['as' => "$folder.edit"]);
        $routes->post('update/(:num)', "Mahasiswa\\$ucFolder::update/$1", ['as' => "$folder.update"]); // POST + _method=PUT
        $routes->get('delete/(:num)', "Mahasiswa\\$ucFolder::delete/$1", ['as' => "$folder.delete"]);
    });
}
