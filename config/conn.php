<?php

class Connection {
    private $dbHost = 'localhost';
    private $dbUser = 'root';
    private $dbPass = '';
    private $dbName = 'pracoop';
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

        if ($this->conn->connect_error) {
            die('Connection failed:' . $this->conn->connect_error);
        }
    }
}

