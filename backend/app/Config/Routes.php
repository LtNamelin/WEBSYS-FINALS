<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/moodBoard', 'Users::moodBoard');
$routes->get('/roadMap', 'Users::roadMap');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/accountsPage', 'Admin::accountsPage');
$routes->get('/userProfile', 'Users::userProfile');
$routes->get('/admin/orderPage', 'Admin::orderPage');

$routes->get('/admin/menuPage', 'Admin::showMenuPage');
$routes->post('/admin/menuPage', 'Admin::menuPage');

$routes->get('/loginPage', 'Auth::showLoginPage');
$routes->post('/loginPage', 'Auth::loginPage');

$routes->get('/logout', 'Auth::logout');

$routes->get('/signupPage', 'Auth::showSignupPage');
$routes->post('/signupPage', 'Auth::signupPage');



$routes->get('/menuPage', 'MenuController::index');
$routes->get('/order', 'MenuController::order');
