<?php
namespace App\Model;

class Model
{
    protected mixed $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }
}