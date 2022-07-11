<?php

class Delete extends DatabaseConn {
    public function __construct($deleteID) {
        $sql = "DELETE FROM empTbl
                WHERE id = '$deleteID'";
        $result = $this->connect()->query($sql);
        if ($result) {
            $this->connect()->close();
        }
    }

    // public function FunctionName(Type $var = null)
    // {
    //     # code...
    // }
}


if (isset($_GET['delID'])) {
    $empID = $_GET['delID'];
    $acc = new Delete($empID);
}
