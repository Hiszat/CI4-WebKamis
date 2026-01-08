<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/detail', 'Home::detail');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');

$routes->get('/buku', 'Buku::index');
$routes->get('/buku/tambah', 'Buku::tambah');

$routes->get('/anggota', 'Anggota::index');
$routes->get('/anggota/tambah', 'Anggota::tambah');
$routes->post('/anggota/tambah', 'Anggota::tambah_angg');