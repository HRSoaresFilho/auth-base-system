<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Auth;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('auth', [Auth::class, 'index']);
$routes->get('(:segment)', [Auth::class, 'view']);