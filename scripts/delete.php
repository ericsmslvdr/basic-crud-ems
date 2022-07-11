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
}

if (isset($_POST['delBtn'])) {
    $empID = $_POST['empID'];
    new Delete($empID);
}
