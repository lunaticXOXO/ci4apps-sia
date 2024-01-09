<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/register_view','AuthController::register_view');
$routes->get('/login_view','AuthController::login_view');

$routes->get('/students', 'StudentsController::view_students');

$routes->get('/addstudents_view', 'StudentsController::view_addstudents');
