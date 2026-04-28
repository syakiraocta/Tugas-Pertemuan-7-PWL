<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Auth::login');
$routes->post('auth', 'Auth::auth');
$routes->get('logout', 'Auth::logout');

// Halaman Dashboard, Produk, Keranjang dikunci pakai filter 'auth'
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('produk', 'Home::produk');
    $routes->get('keranjang', 'Home::keranjang');
    $routes->get('error404', 'Home::error404');
});