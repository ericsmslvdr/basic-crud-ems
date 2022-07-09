<?php
$upd = new Read();

if (isset($_POST['updBtn'])) {
    $isUpdate = true;
    $changeRow = $upd->isUpdate($isUpdate);
    var_dump($changeRow);

    header('location: ./index.php');
    exit();
}
