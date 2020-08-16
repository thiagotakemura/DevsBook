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

//Rota post
$router->post('/post/new', 'PostController@new');

//Rota Perfil
$router->get('/perfil/{id}/follow', 'ProfileController@follow');
$router->get('/perfil/{id}', 'ProfileController@index');
$router->get('/perfil', 'ProfileController@index');

//Rota Sair
$router->get('/sair', 'LoginController@logout');

//Rota Pesquisa
//$router->get('/pesquisa');
//$router->get('/sair');
//$router->get('/amigos');
//$router->get('/fotos');
//$router->get('/config');