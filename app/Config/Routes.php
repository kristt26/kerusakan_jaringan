<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('beranda', 'Beranda::index');
$routes->get('map', 'Map::index');

$routes->group('beranda', static function($routes){
    $routes->get('/', 'Beranda::index');
    $routes->get('read', 'Beranda::read');
});
$routes->group('auth', static function($routes){
    $routes->get('/', 'Auth::index');
    $routes->get('register', 'Auth::register');
    $routes->post('login', 'Auth::login');
    $routes->post('post', 'Auth::post');
    $routes->get('logout', 'Auth::logout');
});

$routes->group('kerusakan', static function($routes){
    $routes->get('/', 'Kerusakan::index');
    $routes->get('read', 'Kerusakan::read');
    $routes->post('post', 'Kerusakan::post');
    $routes->put('put', 'Kerusakan::put');
    $routes->delete('delete/(:any)', 'Kerusakan::delete/$1');
    $routes->get('pengetahuan/(:any)', 'Kerusakan::pengetahuan/$1');
});

$routes->group('gejala', static function($routes){
    $routes->get('/', 'Gejala::index');
    $routes->get('read', 'Gejala::read');
    $routes->post('post', 'Gejala::post');
    $routes->put('put', 'Gejala::put');
    $routes->delete('delete/(:any)', 'Gejala::delete/$1');
});

$routes->group('pengetahuan', static function($routes){
    $routes->get('read/(:any)', 'Pengetahuan::read/$1');
    $routes->post('post', 'Pengetahuan::post');
    $routes->put('put', 'Pengetahuan::put');
    $routes->delete('delete/(:any)', 'Pengetahuan::delete/$1');
});


$routes->group('diagnosa', static function($routes){
    $routes->get('/', 'Diagnosa::index');
    $routes->get('read', 'Diagnosa::read');
    $routes->post('post', 'Diagnosa::post');
    $routes->post('save', 'Diagnosa::save');
});
