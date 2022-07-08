<?php

class Delete extends Connection {
    public function delete($deleteID) {
        $result = $this->conn->query("DELETE FROM empTbl
                                    WHERE id = '$deleteID'");
                                
        $this->conn->close();
    }
}

$acc = new Delete();

if (isset($_GET['delID'])) {
    $empID = $_GET['delID'];

    $acc->delete($empID);
}
