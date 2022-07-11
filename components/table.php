<div class="col-9" id="accountTbl">
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
            <?php
            $acc = new Read();
            echo $acc->showEmp();
            ?>
        </tbody>
    </table>
</div>
