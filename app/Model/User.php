<?php

namespace App\Model;

use App\Database\Database;

class User extends Database
{
    protected $email, $password, $active, $code, $timestamp;


    public function __construct()
    {
        parent::__construct();
        return $this->connection;
    }

    public function getUser($id)
    {
        $query = "SELECT * FROM users WHERE id = $id";
        $elements = $this->query($query);
        return $elements;
    }

    public function save()
    {
        #
    }
}
