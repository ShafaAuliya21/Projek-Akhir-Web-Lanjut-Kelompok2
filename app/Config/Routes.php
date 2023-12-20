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
$routes->get('/admin/absensi/(:any)', 'AbsenController::getAbsensi/$1', ['filter' => 'login']);
// $routes->get('/admin/daftar-peserta/(:any)', 'AbsenController::showPeserta', ['filter' => 'login']);


$routes->get('/mahasiswa', 'MahasiswaController::index', ['filter' => 'role:mahasiswa']);
$routes->get('/mahasiswa/profil', 'ProfilController::index', ['filter' => 'role:mahasiswa']);
$routes->get('/mahasiswa/profil/(:any)', 'ProfilController::edit/$1', ['filter' => 'role:mahasiswa']);
$routes->post('/mahasiswa/profil/update', 'ProfilController::update', ['filter' => 'role:mahasiswa']);

$routes->get('/mahasiswa/create_berkas', 'BerkasController::berkas', ['filter' => 'login']);
$routes->post('/mahasiswa/create_berkas/store', 'BerkasController::store', ['filter' => 'login']);
$routes->get('/mahasiswa/berkas', 'BerkasController::index', ['filter' => 'login']);
$routes->get('/mahasiswa/berkas/(:any)/edit', 'BerkasController::edit/$1');
$routes->put('/mahasiswa/berkas/(:any)', 'BerkasController::update/$1');
$routes->delete('/mahasiswa/berkas/(:any)', 'BerkasController::destroy/$1');
$routes->get('/mahasiswa/profil', 'ProfilController::edit', ['filter' => 'role:mahasiswa']);
$routes->post('/mahasiswa/profil/update', 'ProfilController::update', ['filter' => 'role:mahasiswa']);

$routes->get('/mahasiswa/jadwal_seminar', 'JadwalController::index', ['filter' => 'login']);
$routes->get('/mahasiswa/bergabung_seminar/(:any)', 'JadwalController::jadwal/$1', ['filter' => 'login']);
$routes->get('/mahasiswa/gabung', 'JadwalController::jadwal', ['filter' => 'login']);

$routes->get('/mahasiswa/bergabung_seminar/(:num)', 'JadwalController::bergabungSeminar/$1', ['filter' => 'login']);
$routes->post('/mahasiswa/bergabung_seminar/store', 'JadwalController::store', ['filter' => 'login']);
$routes->post('/mahasiswa/bergabung_seminar/absen', 'AbsenController::saveAbsen/$1', ['filter' => 'login']);

$routes->post('/mahasiswa/pendaftaran', 'PendaftaranController::pendaftaran', ['filter' => 'login']);
$routes->post('/mahasiswa/pendaftaran/store', 'PendaftaranController::store', ['filter' => 'login']);
$routes->post('/mahasiswa/pendaftaran/store', 'PendaftaranController::store', ['filter' => 'login']);
$routes->get('/mahasiswa/list_pendaftaran', 'PendaftaranController::index', ['filter' => 'login']);
$routes->get('/mahasiswa/pendaftaran/(:any)/edit', 'PendaftaranController::edit/$1');
$routes->put('/mahasiswa/pendaftaran/(:any)', 'PendaftaranController::update/$1');
$routes->delete('/mahasiswa/pendaftaran/(:any)', 'PendaftaranController::destroy/$1');
$routes->get('/mahasiswa/review', 'MahasiswaController::review', ['filter' => 'role:mahasiswa']);
$routes->get('/mahasiswa/profile/(:any)/edit', 'MahasiswaController::editProfile/$1', ['filter' => 'role:mahasiswa']);
$routes->put('/mahasiswa/profile/(:any)', 'MahasiswaController::updateProfile/$1', ['filter' => 'role:mahasiswa']);

$routes->get('/admin/mahasiswa', 'Home::mahasiswa', ['filter' => 'login']);
$routes->get('/admin/dosen', 'Home::dosen', ['filter' => 'login']);
$routes->get('/admin/(:any)/editDosen', 'Home::editdosen/$1', ['filter' => 'login']);
$routes->get('/admin/(:any)/editmahasiswa', 'Home::editmahasiswa/$1', ['filter' => 'login']);
$routes->put('/admin/(:any)/updateDosen', 'Home::updateDosen/$1', ['filter' => 'login']);
$routes->put('/admin/(:any)/updateMahasiswa', 'Home::updateMahasiswa/$1', ['filter' => 'login']);
$routes->get('/admin/berkas', 'BerkasadminController::index', ['filter' => 'login']);
$routes->get('/admin/data_jadwal', 'JadwaladminController::index', ['filter' => 'login']);

$routes->get('dashboard-admin/edit_berkas/(:num)/editBerkas', 'BerkasadminController::editBerkas/$1');
$routes->put('dashboard-admin/list_berkas/(:num)', 'BerkasAdminController::updateBerkas/$1');
$routes->post('/dashboard-admin/update_berkas/(:num)', 'BerkasadminController::updateBerkas/$1');
$routes->get('dashboard-admin/list_berkas', 'BerkasadminController::index');

$routes->get('/admin/berkas', 'BerkasAdminController::index', ['filter' => 'login']);
$routes->get('/admin/profile/(:any)/edit', 'AdminController::editProfile/$1', ['filter' => 'role:admin']);
$routes->put('/admin/profile/(:any)', 'AdminController::updateProfile/$1', ['filter' => 'role:admin']);

$routes->get('/mahasiswa/profil/(:any)', 'ProfilController::edit/$1', ['filter' => 'role:mahasiswa']);
$routes->post('/mahasiswa/profil/update', 'ProfilController::update', ['filter' => 'role:mahasiswa']);

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
$routes->delete('/admin/dosen/(:any)', [Home::class, 'destroy']);

$routes->get('/dosen', 'Home::dashboardDosen', ['filter' => 'role:dosen']);

$routes->get('/dosen', 'DosenController::index', ['filter' => 'role:dosen']);
$routes->get('/dosen/berkas', 'DosenController::listBerkas', ['filter' => 'role:dosen']);
$routes->get('/dosen/list_pendaftaran', 'DosenController::listPendaftaran', ['filter' => 'role:dosen']);
$routes->get('/dosen/detail/(:any)', 'DosenController::show/$1', ['filter' => 'role:dosen']);
$routes->get('/dosen/pendaftaran/(:any)/edit', 'DosenController::edit/$1', ['filter' => 'role:dosen']);
$routes->put('/dosen/pendaftaran/(:any)', 'DosenController::update/$1', ['filter' => 'role:dosen']);
$routes->get('/dosen/review', 'DosenController::review', ['filter' => 'role:dosen']);
$routes->get('/dosen/review/(:any)', 'DosenController::setReview/$1', ['filter' => 'role:dosen']);
$routes->post('/dosen/review/store/(:any)', 'DosenController::saveReview/$1', ['filter' => 'role:dosen']);
$routes->get('/dosen/profile/(:any)/edit', 'DosenController::editProfile/$1', ['filter' => 'role:dosen']);
$routes->put('/dosen/profile/(:any)', 'DosenController::updateProfile/$1', ['filter' => 'role:dosen']);
// $routes->put('/mahasiswa/save_review/(:any)', 'DosenController::saveReview/$1', ['filter' => 'role:dosen']);
// $routes->get('/mahasiswa/pendaftaran', 'PendaftaranController::pendaftaran', ['filter' => 'role:dosen']);
// $routes->post('/mahasiswa/pendaftaran/store', 'PendaftaranController::store', ['filter' => 'role:dosen']);
// $routes->get('/mahasiswa/list_pendaftaran', 'PendaftaranController::index', ['filter' => 'role:dosen']);
// $routes->get('/mahasiswa/pendaftaran/(:any)/edit', 'PendaftaranController::edit/$1');
// $routes->put('/mahasiswa/pendaftaran/(:any)', 'PendaftaranController::update/$1');
$routes->get('/dosen/jadwal_seminar', 'DosenController::getJadwal');
$routes->get('/dosen/bergabung_seminar', 'DosenController::jadwal', ['filter' => 'login']);
$routes->get('/dosen/gabung', 'DosenController::jadwal', ['filter' => 'login']);
$routes->post('/dosen/bergabung_seminar/store', 'DosenController::store', ['filter' => 'login']);