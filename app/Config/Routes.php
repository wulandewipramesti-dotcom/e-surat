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
// ADMIN - SURAT MAHASISWA
// ============================

$routes->group('admin/surat', function($routes) {
    $routes->get('/', 'Admin\Surat::index');
    $routes->get('approve/(:num)', 'Admin\Surat::approve/$1');
    $routes->get('reject/(:num)', 'Admin\Surat::reject/$1');
    $routes->get('detail/(:num)', 'Admin\Surat::detail/$1'); 
    $routes->post('upload/(:num)', 'Admin\Surat::upload/$1');
    
});

$routes->get('admin/suratKeluar', 'Admin\SuratKeluar::index', ['as' => 'admin.suratKeluar']);


$routes->group('admin/users', function ($routes) {
    $routes->get('/', 'User::index');
    $routes->get('create', 'User::create');
    $routes->post('store', 'User::store');
    $routes->get('edit/(:num)', 'User::edit/$1');
    $routes->post('update/(:num)', 'User::update/$1');
    $routes->get('delete/(:num)', 'User::delete/$1');
});



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
$folders = ['skak', 'sik', 'simr', 'sism', 'spm'];

foreach ($folders as $folder) {
    $ucFolder = ucfirst($folder); // Controller harus huruf besar

    $routes->group("mahasiswa/$folder", function($routes) use ($ucFolder, $folder) {
        $routes->get('/', "Mahasiswa\\$ucFolder::index", ['as' => "$folder.index"]);
        $routes->get('create', "Mahasiswa\\$ucFolder::create", ['as' => "$folder.create"]);
        $routes->post('store', "Mahasiswa\\$ucFolder::store", ['as' => "$folder.store"]);
        $routes->get('edit/(:num)', "Mahasiswa\\$ucFolder::edit/$1", ['as' => "$folder.edit"]);
        $routes->post('update/(:num)', "Mahasiswa\\$ucFolder::update/$1", ['as' => "$folder.update"]); // POST + _method=PUT
        $routes->get('delete/(:num)', "Mahasiswa\\$ucFolder::delete/$1", ['as' => "$folder.delete"]);

        $routes->get('detail/(:num)', "Mahasiswa\\$ucFolder::detail/$1", ['as' => "$folder.detail"]);
        
    $routes->group('mahasiswa', ['filter' => 'auth'], function ($routes) {
        $routes->get('simr', 'Mahasiswa\Simr::index');
        $routes->get('simr/create', 'Mahasiswa\Simr::create');
        $routes->post('simr/store', 'Mahasiswa\Simr::store');
        $routes->get('simr/cetak/(:num)', 'Mahasiswa\Simr::cetak/$1');
});

    });
}
