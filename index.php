<?php
require_once 'controllers/EmployeeController.php';

$employeeController = new EmployeeController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addBtn'])) {
        $employeeController->createEmployee();
    } elseif (isset($_POST['deleteBtn'])) {
        $employeeController->removeEmployee();
    } elseif (isset($_POST['confirmBtn'])) {
        $employeeController->updateEmployee();
    } elseif (isset($_POST['updateBtn'])) {
        $employeeController->selectEmployee();
    }
}

$employeeController->index();
