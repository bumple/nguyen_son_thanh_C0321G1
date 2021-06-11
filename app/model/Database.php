<?php

namespace App\Model;
use PDO;
use PDOException;

class Database
{
    public string $dns;
    public string $user;
    public string $password;

    public function __construct()
    {
        $this->dns = "mysql:host=localhost;dbname=manage_product";
        $this->user = "root";
        $this->password = "12345678";
    }

    public function connect()
    {
        try {
            return new PDO($this->dns, $this->user, $this->password);
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            die();
        }
    }

}