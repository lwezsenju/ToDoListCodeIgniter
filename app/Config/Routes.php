<?php

use App\Controllers\TaskController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get("/","TaskController::index");
$routes->post("/","TaskController::create");
$routes->post("/updateTaskStatus/(:num)","TaskController::updateTaskStatus/$1");
$routes->post("/deleteTask/(:num)","TaskController::deleteTask/$1");
