<?php

namespace App\Models;

use App;
use Connection;
use PDO;

class Comment
{
    private static $table = 'comments';

    public static function create($fields)
    {
        return App::get('database')->insert(self::$table, [
            'text' => $fields['text'],
            'user_id' => $fields['user_id'],
            'parent_id' => $fields['parent_id'],
        ]);
    }

    public static function getTree()
    {
        $pdo = Connection::make(App::get('config')['database']);
        $statement = $pdo->prepare("SELECT c.*, u.first_name, u.last_name FROM comments c, users u WHERE c.user_id=u.id ORDER BY created_at DESC");
        $statement->execute();
        return buildTree($statement->fetchAll(PDO::FETCH_CLASS));

    }
}
