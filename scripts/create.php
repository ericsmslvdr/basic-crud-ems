<?php

class Create extends Connection {
    public function create($fName, $lName, $pwd, $addr) {
        $result = $this->conn->query("INSERT INTO empTbl (firstName, lastName, password, address)
                                    VALUES ('$fName', '$lName', '$pwd', '$addr')");

        $this->conn->close();
    }
}

$acc = new Create();

if (isset($_POST['create'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $pwd = $_POST['pwd'];
    $addr = $_POST['addr'];

    $acc->create($fName, $lName, $pwd, $addr);
    header('location: ./index.php');
    exit();
}
