<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'BarangController::index');
$routes->get('barang/detail/(:num)', 'BarangController::detail/$1');
$routes->get('cart', 'CartController::view');
$routes->get('cart/add/(:num)', 'CartController::add/$1');
$routes->post('cart/update', 'CartController::update');
$routes->get('cart/checkout', 'CartController::checkout');
$routes->post('cart/submit', 'CartController::submit');
