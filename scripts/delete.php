<?php

class Delete extends DatabaseConn {
    public function delete($deleteID) {
        $result = $this->connect()->query("DELETE FROM empTbl
                                    WHERE id = '$deleteID'");
    }
}

$acc = new Delete();

if (isset($_GET['delID'])) {
    $empID = $_GET['delID'];

    $acc->delete($empID);
}
