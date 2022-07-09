<?php
$acc = new Delete();

if (isset($_GET['delID'])) {
    $empID = $_GET['delID'];

    $acc->delete($empID);
}
