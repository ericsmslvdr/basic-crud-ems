<?php
include('./config/conn.php');
include('./scripts/read.php');
include('./scripts/create.php');
include('./scripts/delete.php');
include('./scripts/update.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Practice OOP PHP</title>
</head>

<body>
    <div class="container">
        <div class="formCard">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <br>
                <label for="">First Name:</label>
                <br>
                <input type="text" name="fName" class="textField">
                <br>
                <label for="">Last Name:</label>
                <br>
                <input type="text" name="lName" class="textField">
                <br>
                <label for="">Password:</label>
                <br>
                <input type="text" name="pwd" class="textField">
                <br>
                <label for="">Address:</label>
                <br>
                <input type="text" name="addr" class="textField">
                <br>
                <input type="submit" name="create" value="Create" class="btn">
            </form>
        </div>

        <div class="accountCard">
            <table class="accTbl">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $acc = new Read();
                    echo $acc->read();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>