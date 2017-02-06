<?php

namespace App\Controllers;

use App\Models\Comment;

Class PagesController
{
    public function home()
    {

        $comments = Comment::getTree();
        return view('index', [
            'comments' => $comments
        ]);
    }

    public function store()
    {
        if (!session_id()) {
            session_start();
        }

        $comment = Comment::create([
            'user_id' => $_SESSION['userDetails']->userID,
            'text' => $_POST['text'],
            'parent_id' => $_POST['parent_id'],
        ]);

        header('Location: /');
    }

    public function login()
    {
        require 'app/Controllers/Auth/login.php';
    }

    public function loginCallback()
    {
        require 'app/Controllers/Auth/login-callback.php';
    }
}