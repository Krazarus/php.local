<?php

namespace App\Models;


class Comment
{
    private $text;
    private $user_id;
    /**
     * @var bool
     */
    private $parent_id;

    private $table = 'comments';

    public function __construct($text, $user_id, $parent_id = false)
    {
        $this->text = $text;
        $this->user_id = $user_id;
        $this->parent_id = $parent_id;
    }

    public function create()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}