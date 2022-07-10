<?php

class Delete extends DatabaseConn {
    public function delete($deleteID) {
        $sql = "DELETE FROM empTbl
                WHERE id = '$deleteID'";
        $result = $this->connect()->query($sql);
    }
}
