<?php

require_once 'config/Database.php';

class Employee {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllEmployees() {
        $stmt = $this->conn->prepare("SELECT * FROM employees");
        $stmt->execute();
        $employees = [];

        while ($row = $stmt->fetch()) {
            $employees[] = $row;
        }

        $stmt->closeCursor();
        return $employees;
    }

    public function createEmployee($employeeData) {
        $stmt = $this->conn->prepare("
            INSERT INTO employees (first_name, last_name, phone_number, address) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([
            $employeeData['firstName'],
            $employeeData['lastName'],
            $employeeData['phoneNumber'],
            $employeeData['address']
        ]);
        $stmt->closeCursor();
    }

    public function removeEmployee($employeeId) {
        $stmt = $this->conn->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->execute([$employeeId]);
        $stmt->closeCursor();
    }

    public function updateEmployee($employeeData) {
        $stmt = $this->conn->prepare("
            UPDATE employees 
            SET first_name = ?, last_name = ?, phone_number = ?, address = ?
            WHERE employees.id = ?
        ");
        $stmt->execute([
            $employeeData['firstName'],
            $employeeData['lastName'],
            $employeeData['phoneNumber'],
            $employeeData['address'],
            $employeeData['employeeId']
        ]);
        $stmt->closeCursor();
    }
}
