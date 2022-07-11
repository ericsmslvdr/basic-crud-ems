<?php
class Update extends DatabaseConn {

    public function __construct($empID, $fName, $lName, $pNum, $addr) {
        $sql = "UPDATE empTbl 
                SET firstName = '$fName', lastName = '$lName', pNum = '$pNum', address = '$addr'
                WHERE id = $empID";
        $result = $this->connect()->query($sql);
        if ($result) {
            $this->connect()->close();
        }
    }
}


if (isset($_POST['confirmBtn'])) {
    $empID = $_POST['empID'];
    $fName = $_POST['fNameUpd'];
    $lName = $_POST['lNameUpd'];
    $pNum = $_POST['pNumUpd'];
    $addr = $_POST['addrUpd'];

    new Update($empID, $fName, $lName, $pNum, $addr);
}
