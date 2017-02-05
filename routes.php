<?php

//$router->define([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'contact' => 'controllers/contact.php',
//    'login' => 'controllers/Auth/login.php',
//    'login-callback' => 'controllers/Auth/login-callback.php',
//    'names' => 'controllers/add-name.php'
//]);


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('login', 'controllers/Auth/login.php');
$router->get('login-callback', 'controllers/Auth/login-callback.php');
$router->post('names', 'controllers/add-name.php');


//var_dump($router->routes);