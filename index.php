<?php
include('./scripts/database.php');
include('./scripts/create.php');
include('./scripts/read.php');
include('./scripts/delete.php');
?>

<?php include('./includes/header.php') ?>
<div class="container">

    <div class="formCard">
        <form action="" method="POST">
            <h1>Add Employee</h1>
            <br>
            <label for="">First Name:</label>
            <br>
            <input type="text" name="fName" class="textField">
            <br>
            <label for="">Last Name:</label>
            <br>
            <input type="text" name="lName" class="textField">
            <br>
            <label for="">Phone Number:</label>
            <br>
            <input type="text" name="pNum" class="textField">
            <br>
            <label for="">Address:</label>
            <br>
            <input type="text" name="addr" class="textField">
            <br>
            <input type="submit" name="add" value="Add" class="btn">
        </form>
    </div>

    <div class="accountCard">
        <table width="100%">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="15%">First Name</th>
                    <th width="15%">Last Name</th>
                    <th width="15%">Password</th>
                    <th width="15%">Address</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $acc = new ReadView();
                echo $acc->showEmp();
                ?>
            </tbody>
        </table>
    </div>

</div>
</body>

</html>