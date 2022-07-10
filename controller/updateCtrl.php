<?php
$upd = new Read();

if (isset($_POST['updBtn'])) {
    $toUpdate = true;
    $empID = $_POST['empID'];
    $upd->setValues($toUpdate, $empID);

    // header('location: ./index.php');
    // exit();
}
