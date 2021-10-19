<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LandingController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// user login
$routes->get('/login', 'AuthUserController::login', ['as' => 'user_login']);
$routes->post('/login', 'AuthUserController::store_login', ['as' => 'user_store_login']);

// user register
$routes->get('/register', 'AuthUserController::register', ['as' => 'user_register']);
$routes->post('/register', 'AuthUserController::store_register', ['as' => 'user_store_register']);

// user ui
$routes->get('/', 'LandingController::index', ['as' => 'landing_index']);

// admin login
$routes->get('/admin/login', 'AuthAdminController::login', ['as' => 'admin_login']);
$routes->post('/admin/login', 'AuthAdminController::store_login', ['as' => 'admin_store_login']);

// admin cms
$routes->group('/admin', ['filter' => 'auth_admin'], function($routes) {
    $routes->get('dashboard', 'AdminDashboardController::index', ['as' => 'admin_dashboard']);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
