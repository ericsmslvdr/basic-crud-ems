<div class="card p-3 col-3">
    <form action="index.php" method="POST">
        <h4 class="card-title">Add Employee</h4>
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" name="firstName" id="firstName" class="form-control mb-3" placeholder="Enter First Name" required>
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" name="lastName" id="lastName" class="form-control mb-3" placeholder="Enter Last Name" required>
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control mb-3" placeholder="Enter Phone Number" required>
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control mb-3" placeholder="Enter Address" required>
        <input type="submit" name="addBtn" value="Add Now" class="btn btn-primary">
    </form>
</div>