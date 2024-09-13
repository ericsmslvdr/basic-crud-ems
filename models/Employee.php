<?php

require_once 'config/Database.php';

class Employee
{
    private PDO $conn;

    public function __construct(Database $database)
    {
        $database = $database;
        $this->conn = $database->getConnection();
    }

    public function getAllEmployees()
    {
        $stmt = $this->conn->prepare("SELECT * FROM employees");
        $stmt->execute();
        $employees = [];

        while ($row = $stmt->fetch()) {
            $employees[] = $row;
        }

        $stmt->closeCursor();
        return $employees;
    }

    public function createEmployee($employeeData)
    {
        $stmt = $this->conn->prepare("
            INSERT INTO employees (first_name, last_name, phone_number, address) 
            VALUES (:firstName, :lastName, :phoneNumber, :address)
        ");
        $stmt->execute([
            'firstName' => $employeeData['firstName'],
            'lastName' => $employeeData['lastName'],
            'phoneNumber' => $employeeData['phoneNumber'],
            'address' => $employeeData['address']
        ]);
        $stmt->closeCursor();
    }

    public function removeEmployee($employeeId)
    {
        $stmt = $this->conn->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->execute([$employeeId]);
        $stmt->closeCursor();
    }

    public function updateEmployee($employeeData)
    {
        $stmt = $this->conn->prepare("
            UPDATE employees 
            SET first_name = :firstName, last_name = :lastName, phone_number = :phoneNumber, address = :address
            WHERE employees.id = :employeeId
        ");
        $stmt->execute([
            'firstName' => $employeeData['firstName'],
            'lastName' => $employeeData['lastName'],
            'phoneNumber' => $employeeData['phoneNumber'],
            'address' => $employeeData['address'],
            'employeeId' => $employeeData['employeeId']
        ]);
        $stmt->closeCursor();
    }
}
