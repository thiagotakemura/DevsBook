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

//Rota Pesquisa
//$router->get('/pesquisa');
//$router->get('/perfil');
//$router->get('/sair');
//$router->get('/amigos');
//$router->get('/fotos');
//$router->get('/config');