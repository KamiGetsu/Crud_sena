<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group("userStatus", function($routes){
    $routes->get("/", "UserStatus::index");
    $routes->get("show", "UserStatus::index");
    $routes->get("edit/(:num)", "UserStatus::singleUserStatus/$1");
    $routes->get("delete/(:num)", "UserStatus::delete/$1");
    $routes->post("add", "UserStatus::create");
    $routes->post("update", "UserStatus::update");
});