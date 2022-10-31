<?php

namespace App\Model;

use App\Database\Database;

class User extends Database
{
    const USER = 'users';
    public $name, $password, $active, $code, $timestamp, $database;


    public function __construct(Database $_database)
    {

        return $this->database = $_database;
    }

    public function getDatabase()
    {
        // return $this->database;
    }

    public function getUser($id)
    {
        $query = "SELECT * FROM users WHERE id = $id";
        $elements = $this->database->query($query);
        return $elements;
    }

    public function save()
    {
        #
    }
}
