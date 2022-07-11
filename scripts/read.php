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

    public function showEmp() {
        $records = $this->readEmp();
        $empID = $this->getEmpID();
        if (!empty($records)) {
            foreach ($records as $record) {
                if ($empID === $record['id']) {
                    $rowFname = '<input type="text" name="fNameUpd" value="' . $record['firstName'] . '" class="textField tfTbl">';
                    $rowLname = '<input type="text" name="lNameUpd" value="' . $record['lastName'] . '" class="textField tfTbl">';
                    $rowPnum = '<input type="text" name="pNumUpd" value="' . $record['pNum'] . '" class="textField tfTbl">';
                    $rowAddr = '<input type="text" name="addrUpd" value="' . $record['address'] . '" class="textField tfTbl">';
                    $rowBtns = '<input type="submit" class="btn btnCan" name="cancelUpd" value="Cancel">
                                <input type="submit" class="btn btnUpd" name="confirmBtn" value="Confirm">';
                } else {
                    $rowFname = $record['firstName'];
                    $rowLname = $record['lastName'];
                    $rowPnum = $record['pNum'];
                    $rowAddr = $record['address'];
                    $rowBtns = '<a href="./index.php?delID=' . $record['id'] . '#accountTbl"><button type="button" class="btn btnDel">Delete</button></a>
                                <input type="submit" class="btn btnUpd" name="updBtn" value="Update">';
                }
                echo '<form method="POST" action="./index.php#accountTBl">
                        <tr>
                            <td><input type="hidden" name="empID" value="' . $record['id'] . '">' .  $record['id'] . '</td>
                            <td>' . $rowFname . '</td>
                            <td>' . $rowLname . '</td>
                            <td>' . $rowPnum . '</td>
                            <td>' . $rowAddr . '</td>
                            <td>' . $rowBtns . '</td>
                        </tr>
                    </form>';
            }
        } else {
            echo '<tr>
                    <td colspan="6">No Records Found!</td>
                </tr>';
        }
    }

    public function getEmpID() {
        if (isset($_POST['updBtn'])) {
            $empID = $_POST['empID'];
        } else if (isset($_POST['cancelUpd'])) {
            $empID = 0;
        } else {
            $empID = 0;
        }
        return $empID;
    }
}
