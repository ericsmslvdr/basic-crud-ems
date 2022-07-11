<?php

class Create extends DatabaseConn {

    public function __construct($fName, $lName, $pNum, $addr) {
        $sql = "INSERT INTO empTbl (firstName, lastName, pNum, address)
                VALUES ('$fName', '$lName', '$pNum', '$addr')";
        $results = $this->connect()->query($sql);
        if ($results) {
            $this->connect()->close();
        }
    }
}

if (isset($_POST['addBtn'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $pNum = $_POST['pNum'];
    $addr = $_POST['addr'];

    new Create($fName, $lName, $pNum, $addr);
    header('location: ./index.php');
    exit();
}
