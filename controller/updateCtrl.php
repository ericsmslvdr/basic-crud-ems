<?php
$upd = new ReadView();

if (isset($_POST['updBtn'])) {
    $toUpdate = true;
    $empID = $_POST['empID'];
    $upd->isUpdate($toUpdate, $empID);

    // header('location: ./index.php');
    // exit();
}
