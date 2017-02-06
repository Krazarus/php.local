<?php

use App\Models\Comment;

$comments = Comment::getTree();
//
//echo '<pre>';
//print_r($comments);
//echo '</pre>';
//die();



//$users = App::get('database')->selectAll('users');
//
//$comments = App::get('database')->selectAll('comments');
//$commentsFirstLevel = App::get('database')->selectFirstLevelComments('comments');
//$commentsSecondLevel = App::get('database')->selectSecondLevelComments('comments');
//

require 'views/index/index.view.php';