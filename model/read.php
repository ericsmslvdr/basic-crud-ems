<?php
class Read extends DatabaseConn {
    public $isUpdate = true;
    // public $empID = 0;

    public function readEmp() {
        $sql = "SELECT * FROM empTbl";
        $results = $this->connect()->query($sql);
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $record[] = $row;
            }
        } else {
            $record = null;
        }
        return $record;
    }

    public function isUpdate($tmpBool) {
        $this->isUpdate = $tmpBool;
        // $this->empID = $empID;
    }
}
