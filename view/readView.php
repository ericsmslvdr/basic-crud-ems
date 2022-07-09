<?php
class ReadView extends Read {
    private $isUpdate = false;

    public function showEmp() {
        $datas = $this->readEmp();
        if (!empty($datas)) {
            foreach ($datas as $data) {
                echo '<form method="POST">
                        <tr>
                            <td>' . $data['id'] . '</td>
                            <td>' . $data['firstName'] . '</td>
                            <td>' . $data['lastName'] . '</td>
                            <td>' . $data['pNum'] . '</td>
                            <td>' . $data['address'] . '</td>
                            <td>
                                <a href="./index.php?delID=' . $data['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                                <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
                                <input type="hidden" name="fName" value="' . $data['firstName'] . '">
                                <input type="hidden" name="lName" value="' . $data['lastName'] . '">
                                <input type="hidden" name="pNum" value="' . $data['pNum'] . '">
                                <input type="hidden" name="addr" value="' . $data['address'] . '">
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
