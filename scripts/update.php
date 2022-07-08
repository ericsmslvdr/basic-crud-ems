<?php
class Update extends Read {
    private $fName;
    private $lName;
    private $pwd;
    private $addr;

    public function __construct($empID) {

        $results = $this->conn->query("SELECT * FROM empTbl");
        foreach ($results as $data) {
            if ($data['id'] === $_GET['updID']) {
                $this->fName = $data['firstName'];
                $this->lName = $data['lastName'];
                $this->pwd = $data['password'];
                $this->addr = $data['address'];
            }
        }
    }

    // public function update($fName, $lName, $pwd, $addr, $empID) {
    //     $this->conn->query("UPDATE empTbl 
    //                         SET firstName = '$fName', lastName = '$lName', password = '$pwd', address = '$addr'
    //                         WHERE id = $empID");
    //     $this->conn->close();
    // }

    public function getFname() {
        return $this->fName;
    }
    public function getLname() {
        return $this->lName;
    }
    public function getPwd() {
        return $this->pwd;
    }
    public function getAddr() {
        return $this->addr;
    }
}

if (isset($_GET['updID'])) {
    // $acc = new Update();

    $empID = $_GET['updID'];
    $fName = $acc->getFname();
    $lName = $acc->getLname();
    $pwd = $acc->getPwd();
    $addr = $acc->getAddr();

    // $acc->update($fName, $lName, $pwd, $addr, $empID);

    header('location: ./index.php');
    exit();
}
