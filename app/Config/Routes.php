<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::home', ['namespace' => 'App\Controllers\Home']);
$routes->get('/about-us', 'Home::aboutus', ['namespace' => 'App\Controllers\Home']);
$routes->get('/portfolio', 'Home::portfolio', ['namespace' => 'App\Controllers\Home']);
$routes->get('/portfolio-detail', 'Home::portfolioDetail', ['namespace' => 'App\Controllers\Home']);
$routes->get('/contact', 'Home::contact', ['namespace' => 'App\Controllers\Home']);
$routes->get('/our-services', 'Home::ourservices', ['namespace' => 'App\Controllers\Home']);
$routes->get('/service', 'Home::serviceDetail', ['namespace' => 'App\Controllers\Home']);

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}