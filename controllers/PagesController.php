<?php

Class PageController
{
    public function home()
    {
        die('home');
        $users = App::get('database')->selectAll('users');

        require 'views/index/index.view.php';
    }
}