<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Inicio::index');
$routes->group('dashboard', function ($routes) {
    $routes->add('', 'Dashboard\Dashboard::index');
});
service('auth')->routes($routes);
