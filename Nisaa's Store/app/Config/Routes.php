<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)', 'Home::image/$1');

$routes->group('admin', ['filter' => ['group:admin']], function ($routes) {
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    // Daftar Produk Routes
    $routes->get('daftar-produk', 'AdminController::daftarProduk');
    $routes->get('daftar-produk/tambah', 'AdminController::daftarProdukTambah');
    $routes->post('daftar-produk/create', 'AdminController::createProduk');
    
    // Edit Produk Routes
    $routes->get('daftar-produk/edit/(:num)', 'AdminController::daftarProdukEdit/$1');
    $routes->post('daftar-produk/change/(:num)', 'AdminController::changeProduk/$1');

    // Hapus Produk Routes
    $routes->get('daftar-produk/hapus/(:num)', 'AdminController::hapusProduk/$1');
    $routes->post('daftar-produk/hapus/(:num)', 'AdminController::hapusProduk/$1');

    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);
