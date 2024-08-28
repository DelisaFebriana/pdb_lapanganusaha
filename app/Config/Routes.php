<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pdb/downloadExcel', 'pdb::downloadExcel');
$routes->get('pdb2/downloadExcel', 'Pdb2::downloadExcel');
$routes->get('pdb3/downloadExcel', 'Pdb3::downloadExcel');
$routes->resource('pdb');
$routes->resource('pdb2');
$routes->resource('pdb3');
$routes->resource('register');
$routes->resource('login');
$routes->resource('logout');
$routes->post('adminpdb/(:num)', 'adminpdb::update/$1');
$routes->post('adminpdb2/(:num)', 'adminpdb2::update/$1');
$routes->post('adminpdb3/(:num)', 'adminpdb3::update/$1');
$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('admin');
    $routes->resource('adminpdb');
    $routes->resource('adminpdb2');
    $routes->resource('adminpdb3');
});


