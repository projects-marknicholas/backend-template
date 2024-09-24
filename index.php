<?php

require 'config.php';
require 'router.php';

// Controllers
require 'controllers/auth.php';
require 'controllers/data.php';

// Initialize Router
$router = new Router();

// Post Requests
$router->post('/api/auth/register', 'AuthController@register');
$router->post('/api/auth/login', 'AuthController@login');
$router->post('/api/auth/forgot-password', 'AuthController@forgot_password');
$router->post('/api/auth/reset-password', 'AuthController@reset_password');

$router->post('/api/v1/data', 'DataController@add_data');

// Get Requests
$router->get('/api/v1/data', 'DataController@get_data');

// Put Requests
$router->put('/api/v1/data', 'DataController@edit_data');

// Delete Requests
$router->delete('/api/v1/data', 'DataController@delete_data');

// Dispatch the request
$router->dispatch();

?>