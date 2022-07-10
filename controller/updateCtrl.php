<?php
$upd = new ReadView();

if (isset($_POST['updBtn'])) {
    $toUpdate = true;
    $upd->isUpdate($toUpdate);

    // header('location: ./index.php');
    // exit();
}
