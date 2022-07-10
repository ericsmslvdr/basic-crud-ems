<div class="accountTbl" id="accountTbl">
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
            $acc = new Read();
            echo $acc->showEmp();
            ?>
        </tbody>
    </table>
</div>