<?php

class Delete extends DatabaseConn {
    public function delete($deleteID) {
        $sql = "DELETE FROM empTbl
                WHERE id = '$deleteID'";
        $result = $this->connect()->query($sql);
    }

    // public function FunctionName(Type $var = null)
    // {
    //     # code...
    // }
}

$acc = new Delete();

if (isset($_GET['delID'])) {
    $empID = $_GET['delID'];

    $acc->delete($empID);
}
