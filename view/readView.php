<?php
class ReadView extends Read {
    private $isUpdate = false;

    public function showEmp() {
        $records = $this->readEmp();
        if (!empty($records)) {
            foreach ($records as $record) {
                if ($this->isUpdate && $record['id'] === $_POST['empID']) {
                    $rowFname = '<td><input type="text" name="fName"></td>';
                    $rowLname = '<td><input type="text" name="lName"></td>';
                    $rowPnum = '<td><input type="text" name="pNum"></td>';
                    $owAddr = '<td><input type="text" name="addr"></td>';
                    $rowBtns = '<td>
                                    <input type="submit" class="btn btnCan" name="canBtn" value="Cancel">
                                    <input type="submit" class="btn btnUpd" name="updBtnConfirm" value="Update">
                                </td>';
                } else {
                    $rowFname = '<td>' . $record['firstName'] . '</td>';
                    $rowLname = '<td>' . $record['lastName'] . '</td>';
                    $rowPnum = '<td>' . $record['pNum'] . '</td>';
                    $rowAddr = '<td>' . $record['address'] . '</td>';
                    $rowBtns = '<td>
                                    <a href="./index.php?delID=' . $record['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                                    <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
                                    <input type="hidden" name="empID" value="' . $record['id'] . '">
                                    <input type="hidden" name="fName" value="' . $record['firstName'] . '">
                                    <input type="hidden" name="lName" value="' . $record['lastName'] . '">
                                    <input type="hidden" name="pass" value="' . $record['pNum'] . '">
                                    <input type="hidden" name="addr" value="' . $record['address'] . '">
                                </td>';
                }
                echo '<form method="POST">
                        <tr>
                            <td>' . $record['id'] . '</td>
                            ' . $rowFname . '
                            ' . $rowLname . '
                            ' . $rowPnum . '
                            ' . $rowAddr . '
                            ' . $rowBtns . '
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
