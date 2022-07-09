<?php
class ReadView extends Read {
    public function showEmp() {
        $datas = $this->readEmp();
        foreach ($datas as $data) {
            echo '<form method="POST">
                    <tr>
                        <td>' . $data['id'] . '</td>
                        <td>';
            echo $this->isUpdate ? '<input type="text" name="fName" value="' . $data["firstName"] . '">' : $data['firstName'];
            echo '</td>
                        <td>' . $data['lastName'] . '</td>
                        <td>' . $data['password'] . '</td>
                        <td>' . $data['address'] . '</td>
                        <td>
                            <a href="./index.php?delID=' . $data['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                            <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
                            <input type="hidden" name="fName" value="' . $data['firstName'] . '">
                            <input type="hidden" name="lName" value="' . $data['lastName'] . '">
                            <input type="hidden" name="pass" value="' . $data['password'] . '">
                            <input type="hidden" name="addr" value="' . $data['address'] . '">
                        </td>
                    </tr>
                </form>';
        }
        if ($datas === 0) {
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
