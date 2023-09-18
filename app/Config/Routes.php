<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin',['namespace'=>'App\Controllers\Admin'],function($routes){
    $routes->get('registro', 'Registro::index');
});

$routes->get('/nuevo/dos', 'Home::nuevo');
