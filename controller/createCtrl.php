<?php

$acc = new Create();

if (isset($_POST['add'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $pNum = $_POST['pNum'];
    $addr = $_POST['addr'];

    $acc->create($fName, $lName, $pNum, $addr);

    header('location: ./index.php');
    exit();
}
