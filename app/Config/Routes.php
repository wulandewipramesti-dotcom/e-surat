<?php

use App\Controllers\User;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index', ['as' => 'landing']);
$routes->get('login', 'Login::index', ['as' => 'login']);
$routes->post('login', 'Login::LoginProses', ['as' => 'LoginProses']);
$routes->get('logout', 'Login::logout', ['as' => 'logout']);
$routes->get('home', 'Home::index', ['as' => 'home']);
$routes->get('user', 'User::index', ['as' => 'user.index']);


$routes->get('surat', 'Surat::index', ['as' => 'surat.index']);
$routes->get('surat/create', 'Surat::create', ['as' => 'surat.create']);
$routes->post('surat/store', 'Surat::store', ['as' => 'surat.store']);
$routes->get('surat/edit/(:num)', 'Surat::edit/$1', ['as' => 'surat.edit']);
$routes->put('surat/update/(:num)', 'Surat::update/$1', ['as' => 'surat.update']);
$routes->get('surat/delete/(:num)', 'Surat::delete/$1');






