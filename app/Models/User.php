<?php

namespace App\Models;

use App;
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

//        die(var_dump(getFirstName()));
//        $user = QueryBuilder::insert($this->table, [
//            'first_name' => $this->getFirstName(),
//            'last_name' => $this->getLastName(),
//        ]);
//
//        return $user;
    }

    public function update()
    {

    }
}