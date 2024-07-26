<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Inicio::index');
$routes->get('ejemplo', 'Ejemplo::index');
$routes->get('ejemplo/square', 'Ejemplo::square');
$routes->get('ejemplo/video', 'Ejemplo::video');
$routes->get('ejemplo/gradiente', 'Ejemplo::gradiente');
$routes->group('dashboard', function ($routes) {
    $routes->add('', 'Dashboard\Dashboard::index');
    $routes->add('ver', 'Dashboard\Dashboard::ver');
});
service('auth')->routes($routes);
