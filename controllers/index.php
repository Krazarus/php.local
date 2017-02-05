<?php

use App\Models\Comment;

//$users = App::get('database')->selectAll('users');

$comments = App::get('database')->selectAll('comments');
$commentsFirstLevel = App::get('database')->selectFirstLevelComments('comments');


require 'views/index/index.view.php';