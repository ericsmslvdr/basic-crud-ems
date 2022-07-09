<?php
class Read extends DatabaseConn {
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

    public function isUpdate($isUpdate) {
        $this->isUpdate = $isUpdate;
        // if ($isUpdate) {
        //     $this->rowFname = '<td><input type="text" name="fName"></td>';
        //     $this->rowLname = '<td><input type="text" name="lName"></td>';
        //     $this->rowPass = '<td><input type="text" name="pwd"></td>';
        //     $this->rowAddr = '<td><input type="text" name="addr"></td>';
        //     $this->rowBtns = '<td>
        //                         <input type="submit" class="btn btnCan" name="canBtn" value="Cancel">
        //                         <input type="submit" class="btn btnUpd" name="updBtnConfirm" value="Update">
        //                     </td>';
        // } else {
        //     $this->rowFname = '<td>' . $data['firstName'] . '</td>';
        //     $this->rowLname = '<td>' . $data['lastName'] . '</td>';
        //     $this->rowPass = '<td>' . $data['password'] . '</td>';
        //     $this->rowAddr = '<td>' . $data['address'] . '</td>';
        //     $this->rowBtns = '<td>
        //                         <a href="./index.php?delID=' . $data['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
        //                         <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
        //                         <input type="hidden" name="fName" value="' . $data['firstName'] . '">
        //                         <input type="hidden" name="lName" value="' . $data['lastName'] . '">
        //                         <input type="hidden" name="pass" value="' . $data['password'] . '">
        //                         <input type="hidden" name="addr" value="' . $data['address'] . '">
        //                     </td>';
        // }
    }
}
