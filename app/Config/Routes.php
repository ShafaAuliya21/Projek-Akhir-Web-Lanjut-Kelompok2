<?php

use App\Controllers\AuthController;
use App\Controllers\Home;
use App\Controllers\MahasiswaController;
use CodeIgniter\Router\RouteCollection;
use Config\Auth;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sign_up', 'Home::signup');
$routes->get('/sign_in', 'Home::signin');

$routes->post('/sign_in', 'AuthController::attemptLogin', ['as' => 'login-attempt']);
$routes->get('/admin', 'Home::dashboard', ['filter' => 'role:admin']);
$routes->get('/admin/pendaftar', 'AdminController::index', ['filter' => 'login']);


$routes->get('/mahasiswa', 'MahasiswaController::index', ['filter' => 'role:mahasiswa']);
$routes->get('/mahasiswa/create_berkas', 'BerkasController::berkas', ['filter' => 'login']);
$routes->post('/mahasiswa/create_berkas/store', 'BerkasController::store', ['filter' => 'login']);
$routes->get('/mahasiswa/berkas', 'BerkasController::index', ['filter' => 'login']);
$routes->get('/mahasiswa/berkas/(:any)/edit', 'BerkasController::edit/$1');
$routes->put('/mahasiswa/berkas/(:any)', 'BerkasController::update/$1');
$routes->delete('/mahasiswa/berkas/(:any)', 'BerkasController::destroy/$1');

$routes->get('/mahasiswa/jadwal_seminar', 'JadwalController::index', ['filter' => 'login']);
$routes->get('/mahasiswa/bergabung_seminar', 'JadwalController::jadwal', ['filter' => 'login']);
$routes->get('/mahasiswa/gabung', 'JadwalController::jadwal', ['filter' => 'login']);
$routes->post('/mahasiswa/bergabung_seminar/store', 'JadwalController::store', ['filter' => 'login']);

$routes->get('/mahasiswa/pendaftaran', 'PendaftaranController::pendaftaran', ['filter' => 'login']);
$routes->post('/mahasiswa/pendaftaran/store', 'PendaftaranController::store', ['filter' => 'login']);
$routes->get('/mahasiswa/list_pendaftaran', 'PendaftaranController::index', ['filter' => 'login']);
$routes->get('/mahasiswa/pendaftaran/(:any)/edit', 'PendaftaranController::edit/$1');
$routes->put('/mahasiswa/pendaftaran/(:any)', 'PendaftaranController::update/$1');
$routes->delete('/mahasiswa/pendaftaran/(:any)', 'PendaftaranController::destroy/$1');

$routes->get('/admin/mahasiswa', 'Home::mahasiswa', ['filter' => 'login']);
$routes->get('/admin/dosen', 'Home::dosen', ['filter' => 'login']);
$routes->get('/admin/(:any)/editDosen', 'Home::editdosen/$1', ['filter' => 'login']);
$routes->get('/admin/(:any)/editmahasiswa', 'Home::editmahasiswa/$1', ['filter' => 'login']);
$routes->put('/admin/(:any)/updateDosen', 'Home::updateDosen/$1', ['filter' => 'login']);
$routes->put('/admin/(:any)/updateMahasiswa', 'Home::updateMahasiswa/$1', ['filter' => 'login']);
$routes->get('/admin/berkas', 'BerkasadminController::index', ['filter' => 'login']);

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
$routes->get('/admin/detail/(:any)', 'AdminController::show/$1');
$routes->get('/mahasiswa/pendaftaran/(:any)', 'PendaftaranController::show/$1');


$routes->get('/admin/tambah-dosen', 'Home::tambahDosen');
$routes->post('/admin/store', 'Home::store');
$routes->delete('/admin/dosen/(:any)', [Home::class,'destroy']);

$routes->get('/dosen', 'Home::dashboardDosen', ['filter' => 'role:dosen']);