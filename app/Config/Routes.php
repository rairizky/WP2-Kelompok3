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

// group auth user
$routes->group('', ['filter' => 'handler_user'], function($routes) {
    // user login
    $routes->get('/login', 'AuthUserController::login', ['as' => 'user_login']);
    $routes->post('/login', 'AuthUserController::store_login', ['as' => 'user_store_login']);
    
    // user register
    $routes->get('/register', 'AuthUserController::register', ['as' => 'user_register']);
    $routes->post('/register', 'AuthUserController::store_register', ['as' => 'user_store_register']);
});
$routes->get('/logout', 'AuthUserController::logout', ['as' => 'user_logout', 'filter' => 'auth_user']);

// user ui
$routes->get('/', 'LandingController::index', ['as' => 'landing_index']);

// group auth admin
$routes->group('', ['filter' => 'handler_admin'], function($routes) {
    // admin login
    $routes->get('/admin/login', 'AuthAdminController::login', ['as' => 'admin_login']);
    $routes->post('/admin/login', 'AuthAdminController::store_login', ['as' => 'admin_store_login']);
});
$routes->get('/admin/logout', 'AuthAdminController::logout', ['as' => 'admin_logout', 'filter' => 'auth_admin']);

// admin cms
$routes->group('/admin', ['filter' => 'auth_admin'], function($routes) {
    // dashboard
    $routes->get('dashboard', 'AdminDashboardController::index', ['as' => 'admin_dashboard']);

    // rooms
    $routes->group('room', function($routes){
        // manage room
        $routes->group('manage-room', function($routes) {
            $routes->get('', 'AdminRoomController::index', ['as' => 'admin_room']);
            $routes->get('(:id)', 'AdminRoomController::detail/$1', ['as' => 'admin_room_detail']);
            $routes->get('create', 'AdminRoomController::create', ['as' => 'admin_room_create']);
            $routes->post('create', 'AdminRoomController::store', ['as' => 'admin_room_store']);
            $routes->get('edit/(:id)', 'AdminRoomController::edit/$1', ['as' => 'admin_room_edit']);
            $routes->patch('edit/(:id)', 'AdminRoomController::update/$1', ['as' => 'admin_room_update']);
            $routes->delete('(:id)', 'AdminRoomController::delete/$1', ['as' => 'admin_room_delete']);
        });

        // manage room type
        $routes->group('manage-type', function($routes) {
            $routes->get('', 'AdminRoomTypeController::index', ['as' => 'admin_room_type']);
            $routes->get('create', 'AdminRoomTypeController::create', ['as' => 'admin_room_type_create']);
            $routes->post('create', 'AdminRoomTypeController::store', ['as' => 'admin_room_type_store']);
            $routes->get('edit/(:id)', 'AdminRoomTypeController::edit/$1', ['as' => 'admin_room_type_edit']);
            $routes->patch('edit/(:id)', 'AdminRoomTypeController::update/$1', ['as' => 'admin_room_type_update']);
            $routes->delete('(:id)', 'AdminRoomTypeController::delete/$1', ['as' => 'admin_room_type_delete']);
        });
    });

    // transcation
    $routes->group('transaction', function($routes) {
        $routes->get('', 'AdminTransactionController::index', ['as' => 'admin_transaction']);
        $routes->get('(:code)', 'AdminTransactionController::detail/$1', ['as' => 'admin_transaction_detail']);
    });
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
