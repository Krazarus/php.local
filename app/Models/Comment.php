<?php

namespace App\Models;

use App;
class Comment
{
    public $text;
    public $user_id;
    /**
     * @var bool
     */
    public $parent_id;
    public $level;

//    private $table = 'comments';

    public function __construct($text, $user_id, $parent_id = 0, $level = 1)
    {
        $this->text = $text;
        $this->user_id = $user_id;
        $this->parent_id = $parent_id;
        $this->level = $level;
    }

    public function create()
    {
        $newCommentId = App::get('database')->insert('comments', [
            'text' => $this->text,
            'user_id' => $this->user_id,
            'parent_id' => $this->parent_id,
            'level' => $this->level
        ]);

        return  $newCommentId;
    }



    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
