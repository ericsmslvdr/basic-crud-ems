<?php

class DatabaseConn {

    public function connect() {
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'pracoop';

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        return $conn;
    }
}
