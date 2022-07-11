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
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Practice OOP PHP</title>
</head>

<body>
    <?php include('./components/header.php') ?>

    <div class="container">
        <div class="row align-items-center">
            <?php include('./components/form.php') ?>
            <?php include('./components/table.php') ?>
        </div>
    </div>

</body>

</html>