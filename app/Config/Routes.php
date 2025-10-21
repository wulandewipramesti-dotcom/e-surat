<?php

use App\Controllers\User;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index', ['as' => 'home']);
$routes->get('/', 'Landing::index', ['as' => 'landing']); // default halaman utama
$routes->get('login', 'Login::index', ['as' => 'login']);
$routes->get('user', 'User::index', ['as' => 'index']);
$routes->post('login', 'Login::LoginProses', ['as' => 'LoginProses']);


