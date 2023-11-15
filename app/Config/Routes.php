<?php

use CodeIgniter\Router\RouteCollection;
use Config\Auth;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sign_up', 'Home::signup');
$routes->get('/sign_in', 'Home::signin');
$routes->get('/dashboard', 'Home::dashboard', ['filter' => 'login']);
$routes->get('/admin/mahasiswa', 'Home::mahasiswa', ['filter' => 'login']);
$routes->get('/admin/dosen', 'Home::dosen', ['filter' => 'login']);
$routes->get('/admin/(:any)/editDosen', 'Home::editdosen/$1', ['filter' => 'login']);
$routes->get('/admin/(:any)/editmahasiswa', 'Home::editmahasiswa/$1', ['filter' => 'login']);
$routes->put('/admin/(:any)/updateDosen', 'Home::updateDosen/$1', ['filter' => 'login']);
$routes->put('/admin/(:any)/updateMahasiswa', 'Home::updateMahasiswa/$1', ['filter' => 'login']);

$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});