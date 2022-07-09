<?php
class ReadView extends Read {
    private $isUpdate = false;

    public function showEmp() {
        $records = $this->readEmp();
        if (!empty($records)) {
            foreach ($records as $record) {
                if ($this->isUpdate && $record['id'] === $_POST['empID']) {
                    $rowFname = '<td><input type="text" name="fName"></td>';
                    $this->rowLname = '<td><input type="text" name="lName"></td>';
                    $this->rowPass = '<td><input type="text" name="pwd"></td>';
                    $this->rowAddr = '<td><input type="text" name="addr"></td>';
                    $this->rowBtns = '<td>
                                        <input type="submit" class="btn btnCan" name="canBtn" value="Cancel">
                                        <input type="submit" class="btn btnUpd" name="updBtnConfirm" value="Update">
                                    </td>';
                }
                echo '<form method="POST">
                        <tr>
                            <td>' . $record['id'] . '</td>
                            <td>' . $record['firstName'] . '</td>
                            <td>' . $record['lastName'] . '</td>
                            <td>' . $record['pNum'] . '</td>
                            <td>' . $record['address'] . '</td>
                            <td>
                                <a href="./index.php?delID=' . $record['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                                <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
                                <input type="hidden" name="empID" value="' . $record['id'] . '">
                                <input type="hidden" name="fName" value="' . $record['firstName'] . '">
                                <input type="hidden" name="lName" value="' . $record['lastName'] . '">
                                <input type="hidden" name="pNum" value="' . $record['pNum'] . '">
                                <input type="hidden" name="addr" value="' . $record['address'] . '">
                            </td>
                        </tr>
                    </form>';
            }
        } else {
            echo '<tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>';
        }
    }
}
