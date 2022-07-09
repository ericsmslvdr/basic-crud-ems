<?php
$upd = new Read();

if (isset($_POST['updBtn'])) {
    $isUpdate = true;
    $upd->isUpdate($isUpdate);


    header('location: ./index.php');
    exit();
}
