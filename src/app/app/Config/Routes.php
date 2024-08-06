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
$routes->get('ejemplo/tema1', 'Ejemplo::tema1');
$routes->group('dashboard', function ($routes) {
    $routes->add('', 'Dashboard\Dashboard::index');
    $routes->add('appearance', 'Dashboard\Dashboard::appearance');
    $routes->add('shop', 'Dashboard\Dashboard::shop');
    // $routes->add('links', 'Dashboard\Dashboard::links');
    $routes->add('new_link', 'Dashboard\Dashboard::new_link');
    $routes->add('erase_link/(:num)', 'Dashboard\Dashboard::erase_link/$1');
    $routes->add('ver', 'Dashboard\Dashboard::ver');
});
service('auth')->routes($routes);
