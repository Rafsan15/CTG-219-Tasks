<?php


class Connection
{
    private $conn;

    public function __construct()
    {
        $this->conn=new PDO("mysql:host=localhost;dbname=Ctgclass7","root","");
    }

    public function GetConnection(){return $this->conn;}
}