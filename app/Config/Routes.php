<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Page', 'Page::index');
$routes->get('/Page/about', 'Page::about');
$routes->get('/Page/contact', 'Page::contact');
