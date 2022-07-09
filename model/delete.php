<?php

class Delete extends DatabaseConn {
    public function delete($deleteID) {
        $result = $this->connect()->query("DELETE FROM empTbl
                                    WHERE id = '$deleteID'");
    }
}
