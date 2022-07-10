<?php
class ReadView extends Read {

    public function showEmp() {
        $records = $this->readEmp();
        if (!empty($records)) {
            foreach ($records as $record) {
                if ($this->isUpdate && $record['id'] == $_POST['empID']) {
                    $rowFname = '<input type="submit" name="fNameUpd" value="' . $record['firstName'] . '" class="textField">';
                    $rowLname = '<input type="text" name="lNameUpd" value="' . $record['lastName'] . '" class="textField">';
                    $rowPnum = '<input type="text" name="pNumUpd" value="' . $record['pNum'] . '" class="textField">';
                    $rowAddr = '<input type="text" name="addrUpd" value="' . $record['address'] . '" class="textField">';
                    $rowBtns = '<input type="submit" class="btn btnCan" name="canBtn" value="Cancel">
                                <input type="submit" class="btn btnUpd" name="updBtnConfirm" value="Update">';
                } else {
                    $rowFname = $record['firstName'];
                    $rowLname = $record['lastName'];
                    $rowPnum = $record['pNum'];
                    $rowAddr = $record['address'];
                    $rowBtns = '<a href="./index.php?delID=' . $record['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                                <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
                                <input type="hidden" name="empID" value="' . $record['id'] . '">
                                <input type="hidden" name="fName" value="' . $record['firstName'] . '">
                                <input type="hidden" name="lName" value="' . $record['lastName'] . '">
                                <input type="hidden" name="pass" value="' . $record['pNum'] . '">
                                <input type="hidden" name="addr" value="' . $record['address'] . '">';
                }
                echo '<form method="POST">
                        <tr>
                            <td>' . $record['id'] . '</td>
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
