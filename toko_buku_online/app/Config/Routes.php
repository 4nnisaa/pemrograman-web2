<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Public
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segmen)', 'Home::images/$1');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => ['group:admin']], function($routes){
    $routes->get('dashboard', 'AdminControler::dashboard');
    $routes->get('daftar-buku', 'AdminControler::daftarBuku');
    $routes->post('daftar-buku', 'AdminControler::createBuku');
    $routes->get('transaksi', 'AdminControler::transaksi');
    $routes->get('pelanggan', 'AdminControler::pelanggan');
});