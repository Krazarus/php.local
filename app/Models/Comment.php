<?php

namespace App\Models;

use App;

class Comment
{
    private static $table = 'comments';
    public $text;
    public $user_id;
    /**
     * @var bool
     */
    public $parent_id;
    public $level;

    public function __construct($text, $user_id, $parent_id = 0, $level = 1)
    {
        $this->text = $text;
        $this->user_id = $user_id;
        $this->parent_id = $parent_id;
        $this->level = $level;
    }

    public static function create($fields)
    {
//        $newCommentId = App::get('database')->insert('comments', [
//            'text' => $this->text,
//            'user_id' => $this->user_id,
//            'parent_id' => $this->parent_id,
//            'level' => $this->level
//        ]);

        return App::get('database')->insert(self::$table, [
            'text' => $fields['text'],
            'user_id' => $fields['user_id'],
            'parent_id' => $fields['parent_id'],
//            'level' => $fields['level']
        ]);
//
//        return  $newCommentId;
    }

    public static function getTree()
    {
        $comments = App::get('database')->selectAll(self::$table);

        return self::buildTree($comments);
    }

    private static function buildTree($items)
    {
        $childs = [];
        foreach ($items as $item) {
            $childs[$item->parent_id][$item->id] = $item;
        }
        foreach ($items as $item) {
            if (isset($childs[$item->id])) {
                $item->childs = $childs[$item->id];
            }
        }
        return $childs[0];
    }


    public function update()
    {

    }

    public function delete()
    {

    }
}
