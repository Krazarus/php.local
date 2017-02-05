<?php
/**
 * Created by PhpStorm.
 * User: Krazarus
 * Date: 2/5/2017
 * Time: 1:39 PM
 */

$users = App::get('database')->selectAll('users');

require 'views/index/index.view.php';