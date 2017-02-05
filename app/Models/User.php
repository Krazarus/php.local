<?php

namespace App\Models;


class User
{
    private $first_name;
    private $last_name;
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

//        $app['database']->insert($this->table, [
//            'name' => $this->getFirstName(),
//        ]);
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