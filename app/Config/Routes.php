<?php

use App\Controllers\User;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Login::index', ['as' => 'login']);
$routes->post('login', 'Login::LoginProses', ['as' => 'LoginProses']);
$routes->get('logout', 'Login::logout', ['as' => 'logout']);
$routes->get('home', 'Home::index', ['as' => 'home']);





