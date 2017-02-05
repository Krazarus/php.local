<?php
if( !session_id() ) {
    session_start();
}
App::get('database')->insert('comments', [
    'user_id' => $_SESSION['userDetails']->userID,
    'text' => $_POST['text'],
    'parent_id' => $_POST['parent_id'],
    'level' => $_POST['level']
]);
