<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/doLogin', 'LoginController::doLogin');


$routes->get('/admin/dashboard', 'Admin\DashboardController::index');
$routes->get('/admin/brand', 'Admin\BrandController::index');
$routes->get('/admin/brand/add', 'Admin\BrandController::add');
$routes->post('/admin/brand/add', 'Admin\BrandController::add');
$routes->get('/admin/brand/edit/(:num)', 'Admin\BrandController::edit/$1');
$routes->post('/admin/brand/edit/(:num)', 'Admin\BrandController::edit/$1');
$routes->get('/admin/brand/delete/(:num)', 'Admin\BrandController::delete/$1');

$routes->get('/admin/model', 'Admin\ModelController::index');
$routes->get('/admin/model/add', 'Admin\ModelController::add');
$routes->post('/admin/model/add', 'Admin\ModelController::add');
$routes->get('/admin/model/edit/(:num)', 'Admin\ModelController::edit/$1');
$routes->post('/admin/model/edit/(:num)', 'Admin\ModelController::edit/$1');

$routes->get('/admin/typeDocument', 'Admin\TypeDocumentController::index');
$routes->get('/admin/typeDocument/add', 'Admin\TypeDocumentController::add');
$routes->post('/admin/typeDocument/add', 'Admin\TypeDocumentController::add');
$routes->get('/admin/typeDocument/edit/(:num)', 'Admin\TypeDocumentController::edit/$1');
$routes->post('/admin/typeDocument/edit/(:num)', 'Admin\TypeDocumentController::edit/$1');
$routes->get('/admin/typeDocument/delete/(:num)', 'Admin\TypeDocumentController::delete/$1');
