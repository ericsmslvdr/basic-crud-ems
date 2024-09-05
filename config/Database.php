<?php

class Database {
    private $connection;

    public function __construct() {
        $config = [
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'basic_crud_ems',
            'charset' => 'utf8mb4'
        ];

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function getConnection() {
        return $this->connection;
    }
}
