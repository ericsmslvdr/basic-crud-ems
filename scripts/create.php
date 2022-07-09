<?php

class Create extends DatabaseConn {
    public function create($fName, $lName, $pwd, $addr) {
        $result = $this->connect()->query("INSERT INTO empTbl (firstName, lastName, password, address)
                                    VALUES ('$fName', '$lName', '$pwd', '$addr')");
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
