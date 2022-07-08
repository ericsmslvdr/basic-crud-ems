<?php
class Read extends Connection {
    public function read() {
        $results = $this->conn->query("SELECT * FROM empTbl");
        foreach ($results as $data) {
            echo '<tr>
                    <td>' . $data['id'] . '</td>
                    <td>' . $data['firstName'] . '</td>
                    <td>' . $data['lastName'] . '</td>
                    <td>' . $data['password'] . '</td>
                    <td>' . $data['address'] . '</td>
                    <td>
                        <a href="./index.php?delID=' . $data['id'] . '"><button type="button" class="btn btnDel">Delete</button></a>
                        <a href="./index.php?updID=' . $data['id'] . '"><button type="button" class="btn btnUpd">Update</button></a>
                    </td>
                </tr>';
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
}
