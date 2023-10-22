<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'authFilter']);
$routes->get('/termsandconditions', 'Home::termsandconditions');
$routes->get('/login', 'Home::login', ['filter' => 'guestFilter']);
$routes->get('/carlist', 'Home::carlist');
$routes->get('/myorder', 'Home::myorder');
$routes->get('/carview', 'Home::carview');

// booking Route 
$routes->post('/booking_insert_data', 'BookingController::booking_insert_data');
$routes->post('/book_car', 'BookingController::book_car');
$routes->post('/booking_data_insert', 'BookingController::booking_data_insert');
$routes->post('/view_car_data', 'BookingController::view_car_data');
$routes->post('/car_list', 'BookingController::car_list');
$routes->get('/thankyoupage', 'Home::thankyoupage');


// login route 

$routes->setDefaultController('Register');
$routes->get('/', 'Home::register', ['filter' => 'guestFilter']);
$routes->get('/register', 'Home::register', ['filter' => 'guestFilter']);
$routes->post('/register', 'RegisterController::register', ['filter' => 'guestFilter']);
 
// $routes->get('/login', 'LoginController::Home', ['filter' => 'guestFilter']);
$routes->post('/login', 'LoginController::authenticate', ['filter' => 'guestFilter']);
 
$routes->get('/logout', 'LoginController::logout', ['filter' => 'authFilter']);
// $routes->get('/', 'Dashboard::Home', ['filter' => 'authFilter']);

// admin route 
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/login', 'AdminController::login');
$routes->get('/admin/register', 'AdminController::register');
$routes->get('/admin/car_list_data', 'AdminController::car_list_data');
$routes->get('/admin/add_car', 'AdminController::add_car');
// $routes->post('/admin/add_car', 'AdminController::add_car');



// car insert 
$routes->post('/admin/car_details_insert', 'BookingController::car_details_insert');
$routes->post('admin/car_show_list_data', 'BookingController::admin_car_show_list_data');
$routes->post('admin/car_view', 'BookingController::view_data');
$routes->post('/admin/car_edit', 'BookingController::edit_data');
