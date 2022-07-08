<?php
class Read extends Connection {
    private $rowFname;
    private $rowLname;
    private $rowPass;
    private $rowAddr;
    private $rowBtns;

    public function read() {
        $results = $this->conn->query("SELECT * FROM empTbl");
        foreach ($results as $data) {
            echo '<form method="POST">
                    <tr>
                        <td>' . $data['id'] . '</td>
                        <td>' . $data['firstName'] . '</td>
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
        if ($results->num_rows === 0) {
            echo '<tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>';
        }

        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         echo '<tr>
        //                 <td>' . $row['id'] . '</td>
        //                 <td>' . $row['firstName'] . '</td>
        //                 <td>' . $row['lastName'] . '</td>
        //                 <td>' . $row['password'] . '</td>
        //                 <td>' . $row['address'] . '</td>
        //                 <td>
        //                     <a href="./index.php?delID=' . $row['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
        //                     <a href="./index.php?updID=' . $row['id'] . '"><button type="button" class="btn btnUpd">Update</button></a>

        //                 </td>
        //             </tr>';
        //     }
        // } else {
        //     echo '<tr>
        //             <td>&nbsp;</td>
        //             <td>&nbsp;</td>
        //             <td>&nbsp;</td>
        //             <td>&nbsp;</td>
        //             <td>&nbsp;</td>
        //             <td>&nbsp;</td>
        //         </tr>';
        // }
    }

    public function isUpdate($isUpdate) {
        if ($isUpdate) {
            $this->rowFname = '<td><input type="text" name="fName"></td>';
            $this->rowLname = '<td><input type="text" name="lName"></td>';
            $this->rowPass = '<td><input type="text" name="pwd"></td>';
            $this->rowAddr = '<td><input type="text" name="addr"></td>';
            $this->rowBtns = '<td>
                                <input type="submit" class="btn btnCan" name="canBtn" value="Cancel">
                                <input type="submit" class="btn btnUpd" name="updBtnConfirm" value="Update">
                            </td>';
        } else {
            $this->rowFname = '<td>' . $data['firstName'] . '</td>';
            $this->rowLname = '<td>' . $data['lastName'] . '</td>';
            $this->rowPass = '<td>' . $data['password'] . '</td>';
            $this->rowAddr = '<td>' . $data['address'] . '</td>';
            $this->rowBtns = '<td>
                                <a href="./index.php?delID=' . $data['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                                <input type="submit" class="btn btnUpd" name="updBtn" value="Update">
                                <input type="hidden" name="fName" value="' . $data['firstName'] . '">
                                <input type="hidden" name="lName" value="' . $data['lastName'] . '">
                                <input type="hidden" name="pass" value="' . $data['password'] . '">
                                <input type="hidden" name="addr" value="' . $data['address'] . '">
                            </td>';
        }
    }
}
