<?php

require_once 'models/Employee.php';

class EmployeeController
{
    private $employeeModel;

    public function __construct(Employee $employee)
    {
        $this->employeeModel = $employee;
    }

    public function index()
    {
        $employees = $this->employeeModel->getAllEmployees();

        include 'views/index.view.php';
    }

    public function createEmployee()
    {
        $employeeData = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'phoneNumber' => $_POST['phoneNumber'],
            'address' => $_POST['address']
        ];

        $this->employeeModel->createEmployee($employeeData);

        header('Location: index.php');
        exit();
    }

    public function removeEmployee()
    {
        $this->employeeModel->removeEmployee($_POST['employeeId']);

        header('Location: index.php');
        exit();
    }

    public function updateEmployee()
    {
        $employeeData = [
            'employeeId' => $_POST['employeeId'],
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'phoneNumber' => $_POST['phoneNumber'],
            'address' => $_POST['address']
        ];

        $this->employeeModel->updateEmployee($employeeData);

        unset($_SESSION['selectedEmployeeId']);

        header('Location: index.php');
        exit();
    }

    public function selectEmployee()
    {
        $selectedEmployeeId = $_POST['employeeId'];

        $_SESSION['selectedEmployeeId'] = $selectedEmployeeId;
    }
}
