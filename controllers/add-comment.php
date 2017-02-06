<?php
use App\Models\Comment;

if( !session_id() ) {
    session_start();
}

$comment = Comment::create([
    'user_id' => $_SESSION['userDetails']->userID,
    'text' => $_POST['text'],
    'parent_id' => $_POST['parent_id'],
]);

header('Location: /');