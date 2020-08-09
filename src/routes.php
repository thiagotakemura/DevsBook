<?php
use core\Router;

$router = new Router();

//Rota home
$router->get('/', 'HomeController@index');

//Rota Login
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

//Rota Cadastro de Login
$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');