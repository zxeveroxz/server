<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['as'=>'inicio']);
$routes->get('/buscar', 'Home::buscar',['as'=>'buscar_ruc']);

$routes->group('/([0-9]+)/',['namespace'=>'App\Controllers\Carrito'],function($routes){
    $routes->get('/', 'Carrito::index',['as'=>'carrito']);
    $routes->get('demo', 'Carrito::demo');
    //$routes->get('registro', 'Registro::index');
});


$routes->group('/([0-9]+)/admin',['namespace'=>'App\Controllers\Admin'],function($routes){
    $routes->get('/', 'Login::index',['as'=>'login']);
    $routes->get('registro', 'Registro::index');
    
});

$routes->get('/nuevo/dos', 'Home::nuevo');
