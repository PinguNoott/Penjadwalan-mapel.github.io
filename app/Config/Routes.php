<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home/dashboard', 'Home::dashboard');

$routes->get('/home/register', 'Home::register');

$routes->get('/home/jadwalvii', 'Home::jadwalvii');
$routes->get('/home/jadwalviii', 'Home::jadwalviii');
$routes->get('/home/jadwalix', 'Home::jadwalix');
$routes->get('/home/jadwalx', 'Home::jadwalx');
$routes->get('/home/jadwalxi', 'Home::jadwalxi');
$routes->get('/home/jadwalxii', 'Home::jadwalxii');


$routes->add('/home/aksi_t_jadwalvii', 'Home::aksi_t_jadwalvii');
$routes->add('/home/aksi_e_jadwalvii', 'Home::aksi_e_jadwalvii');

$routes->add('/home/aksi_t_jadwalviii', 'Home::aksi_t_jadwalviii');
$routes->add('/home/aksi_e_jadwalviii', 'Home::aksi_e_jadwalviii');

$routes->add('/home/aksi_t_jadwalix', 'Home::aksi_t_jadwalix');
$routes->add('/home/aksi_e_jadwalix', 'Home::aksi_e_jadwalix');

$routes->add('/home/aksi_t_jadwalx', 'Home::aksi_t_jadwalx');
$routes->add('/home/aksi_e_jadwalx', 'Home::aksi_e_jadwalx');

$routes->add('/home/aksi_t_jadwalxi', 'Home::aksi_t_jadwalxi');
$routes->add('/home/aksi_e_jadwalxi', 'Home::aksi_e_jadwalxi');

$routes->add('/home/aksi_t_jadwalxii', 'Home::aksi_t_jadwalxii');
$routes->add('/home/aksi_e_jadwalxii', 'Home::aksi_e_jadwalxii');

$routes->get('/home/tambahjadwalvii', 'Home::tambahjadwalvii');
$routes->get('/home/tambahjadwalviii', 'Home::tambahjadwalviii');
$routes->get('/home/tambahjadwalix', 'Home::tambahjadwalix');
$routes->get('/home/tambahjadwalx', 'Home::tambahjadwalx');
$routes->get('/home/tambahjadwalxi', 'Home::tambahjadwalxi');
$routes->get('/home/tambahjadwalxii', 'Home::tambahjadwalxii');

$routes->add('/home/edit_jadwalvii/(:num)', 'Home::edit_jadwalvii/$1');
$routes->add('/home/edit_jadwalviii/(:num)', 'Home::edit_jadwalviii/$1');
$routes->add('/home/edit_jadwalix/(:num)', 'Home::edit_jadwalix/$1');
$routes->add('/home/edit_jadwalx/(:num)', 'Home::edit_jadwalx/$1');
$routes->add('/home/edit_jadwalxi/(:num)', 'Home::edit_jadwalxi/$1');
$routes->add('/home/edit_jadwalxii/(:num)', 'Home::edit_jadwalxii/$1');

$routes->add('/home/hapus_jadwalvii/(:num)', 'Home::hapus_jadwalvii/$1');
$routes->add('/home/hapus_jadwalviii/(:num)', 'Home::hapus_jadwalviii/$1');
$routes->add('/home/hapus_jadwalix/(:num)', 'Home::hapus_jadwalix/$1');
$routes->add('/home/hapus_jadwalx/(:num)', 'Home::hapus_jadwalx/$1');
$routes->add('/home/hapus_jadwalxi/(:num)', 'Home::hapus_jadwalxi/$1');
$routes->add('/home/hapus_jadwalxii/(:num)', 'Home::hapus_jadwalxii/$1');