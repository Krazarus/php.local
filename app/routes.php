<?php

$router->get('', 'PagesController@home');
$router->get('login', 'PagesController@login');
$router->get('logout', 'PagesController@logout');
$router->get('login-callback', 'PagesController@loginCallback');
$router->post('comment', 'PagesController@store');

$router->get('phone', 'PagesController@phone');




