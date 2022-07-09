<?php

class Create extends DatabaseConn {

    public function create($fName, $lName, $pNum, $addr) {
        $sql = "INSERT INTO empTbl (firstName, lastName, pNum, address)
                VALUES ('$fName', '$lName', '$pNum', '$addr')";
        $results = $this->connect()->query($sql);
    }
}

