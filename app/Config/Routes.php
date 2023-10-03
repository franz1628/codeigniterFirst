<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/doLogin', 'LoginController::doLogin');


$routes->get('/admin/dashboard', 'Admin\DashboardController::index');
