<?php
include('./controller/indexCtrl.php')
?>

<?php include('./view/header.php') ?>
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
        <table>
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
                $acc = new ReadView();
                echo $acc->showEmp();
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>