<?php
include('./scripts/database.php');
include('./scripts/create.php');
include('./scripts/read.php');
include('./scripts/update.php');
include('./scripts/delete.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Practice OOP PHP</title>
</head>

<body>
    <?php include('./components/header.php') ?>

    <div class="container">
        <?php include('./components/form.php') ?>
        <?php include('./components/table.php') ?>
    </div>

    <?php include('./components/footer.php') ?>
</body>

</html>