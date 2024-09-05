<div class="col-9">
    <table class="table table-striped" style="table-layout: fixed;">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Password</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($employees)): ?>
                <?php foreach ($employees as $employee): ?>
                    <form method="POST" action="index.php">
                        <?php if (isset($_POST['updateBtn']) && $_SESSION['selectedEmployeeId'] === (string)$employee['id']): ?>
                            <tr>
                                <td>
                                    <input type='hidden' name='employeeId' value='<?= $_SESSION['selectedEmployeeId'] ?>'>
                                    <?= $employee['id'] ?>
                                </td>
                                <td>
                                    <input type="text" name="firstName" value="<?= $employee['first_name'] ?>" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="text" name="lastName" value="<?= $employee['last_name'] ?>" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="text" name="phoneNumber" value="<?= $employee['phone_number'] ?>" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="text" name="address" value="<?= $employee['address'] ?>" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-secondary btn-sm" name="cancelBtn" value="Cancel">
                                    <input type="submit" class="btn btn-success btn-sm" name="confirmBtn" value="Confirm">
                                </td>

                            </tr>
                        <?php else: ?>
                            <tr>
                                <td>
                                    <input type='hidden' name='employeeId' value='<?= $employee['id'] ?>'>
                                    <?= $employee['id'] ?>
                                </td>
                                <td> <?= $employee['first_name'] ?></td>
                                <td> <?= $employee['last_name'] ?></td>
                                <td> <?= $employee['phone_number'] ?></td>
                                <td> <?= $employee['address'] ?></td>
                                <td>
                                    <input type="submit" class="btn btn-danger btn-sm" name="deleteBtn" value="Delete">
                                    <input type="submit" class="btn btn-info btn-sm" name="updateBtn" value="Update">
                                </td>
                            </tr>
                        <?php endif ?>
                    </form>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No Records Found!</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>