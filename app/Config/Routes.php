<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//home page
$routes->get('/', 'Home::index');
// product pages
$routes->get('/product_detail', 'ProductController::detail');
$routes->get('/productByBrands', 'ProductController::productByBrands');
$routes->get('/product', 'ProductController::product');
//authentication routes
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::registerAccount');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::handleLogin');
//cart routes
$routes->get('/cart', 'CartController::index');
