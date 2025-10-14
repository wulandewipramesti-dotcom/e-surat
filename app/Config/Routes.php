<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index', ['as' => 'home']);
$routes->get('/', 'Landing::index', ['as' => 'landing']); // default halaman utama
$routes->get('login', 'Login::index', ['as' => 'login']);


