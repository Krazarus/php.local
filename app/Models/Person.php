<?php

namespace App\Models;

class Person
{
    public $first_name;
    public $last_name;


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
}