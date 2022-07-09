<?php

class DatabaseConn {
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    public function connect() {
        $this->dbHost = 'localhost';
        $this->dbUser = 'root';
        $this->dbPass = '';
        $this->dbName = 'pracoop';

        $conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

        return $conn;
    }
}
