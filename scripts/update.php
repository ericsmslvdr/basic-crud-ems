<?php
class Update extends Read {
    private $fName;
    private $lName;
    private $pNum;
    private $addr;
    private $empID;

    public function __construct($empID) {
        $records = $this->readEmp();
        foreach ($records as $record) {
            if ($record['id'] === $empID) {
                $this->empID = $empID;
            }
        }
        $this->connect()->query("UPDATE empTbl 
                            SET firstName = '$this->fName', lastName = '$this->lName', pNum = '$this->pNum', address = '$this->addr'
                            WHERE id = $this->empID");
    }

    public function getFname() {
        return $this->fName;
    }
    public function getLname() {
        return $this->lName;
    }
    public function getPnum() {
        return $this->pNum;
    }
    public function getAddr() {
        return $this->addr;
    }
}

