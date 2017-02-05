<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('login', 'controllers/Auth/login.php');
$router->get('login-callback', 'controllers/Auth/login-callback.php');
$router->get('logout', 'controllers/Auth/logout.php');
$router->post('names', 'controllers/add-name.php');
$router->post('comment', 'controllers/add-comment.php');


