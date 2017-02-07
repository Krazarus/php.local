<?php

namespace App\Models;

use App;
use Connection;
use PDO;

class User
{
    public $first_name;
    public $last_name;
    private $table = 'users';

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;


    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    public function create()
    {
        $newUserID = App::get('database')->insert('users', [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name
        ]);

        return $newUserID;

    }
}