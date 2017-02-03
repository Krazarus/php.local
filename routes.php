<?php

$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php',
    'login' => 'controllers/Auth/login.php',
    'login-callback' => 'controllers/Auth/login-callback.php'
]);