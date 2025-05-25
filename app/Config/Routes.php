<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');           // Truy cập / sẽ hiển thị home
$routes->get('main', 'Main::index');        // Truy cập /main

