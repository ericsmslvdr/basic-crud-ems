<?php

class Create extends DatabaseConn {

    public function create($fName, $lName, $pNum, $addr) {
        $sql = "INSERT INTO empTbl (firstName, lastName, pNum, address)
                VALUES ('$fName', '$lName', '$pNum', '$addr')";
        $results = $this->connect()->query($sql);
        if ($results) {
            $this->connect()->close();
        }
    }
}

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
