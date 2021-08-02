<div class="container" id="admins">
    <div class="heading mb-4 border-bottom">
        <h2>All Administrators</h2>
    </div>

    <div class="container py-4" id="">
        <table id="t98" class="table table-striped ">
            <tr>
                <th class="had">
                    <h5>Admin_Id</h5>
                </th>
                <th class="had">
                    <h5>FirstName</h5>
                </th>
                <th class="had">
                    <h5>LastName</h5>
                </th>
                <th class="had">
                    <h5>UserName</h5>
                </th>
                <th class="had">
                    <h5>Email</h5>
                </th>
                <th class="had">
                    <h5>Reg-Date</h5>
                </th>
                <th class="had">
                    <h5>Modified</h5>
                </th>
            </tr>
            <?php foreach ($adminsresult as $admin) : ?>
                <tr>
                    <td class="had"><?php echo $admin['id']; ?></td>
                    <td class="had"><?php echo $admin['fname']; ?></td>
                    <td class="had"><?php echo $admin['lname']; ?></td>
                    <td class="had"><?php echo $admin['username']; ?></td>
                    <td class="had"><?php echo $admin['email']; ?></td>
                    <td class="had"><?php echo $admin['regdate']; ?></td>
                    <td class="had"><?php echo $admin['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>

</div>

<section id="insert_admin" class="py-5">
    <div class="heading mb-4 border-bottom">
        <h2>Add Admin</h2>
    </div>
    <div class="mb-3 text-center">

        <form method="post" action="index.php" class="needs-validation" novalidate>
            <?php //include('config/errors.php'); ?>
            <div class="container">

                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-black" for="firstName">First name</label>
                                <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $fname; ?>" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-black" for="lastName">Last name</label>
                                <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lname; ?>" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="uname" class="text-black">Username </label>
                                <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
                                <div class="invalid-feedback">
                                    Valid username is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="email" class="text-black">Email </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
                                <div class="invalid-feedback">
                                    Valid last Email is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-black">Password</label>
                                <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                                <div class="invalid-feedback">
                                    Please enter valid Password.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-black">Confirm password</label>
                                <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                                <div class="invalid-feedback">
                                    Please enter valid Password.
                                </div>
                            </div>
                        </div>

                    </div><br>
                    <br>
                    <button type="submit" class="btn btn-warning col-md-4 rounded-pill" style="background-color: #db2723;color:white;" name="register_admin"><b>Add Admin</b></button>

                </div>
        </form>
    </div>
</section>

<section id="delete_admin">
    <div class="container py-4 ">
        <div class="heading mb-4 border-bottom">
            <h2>Remove Admin</h2>
        </div>
        <div class="mb-3 text-center">
            <div class="dg">
                <h5 class="text-danger"><b>Danger zone</b></h5>
                <p class="text-danger">Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            </div>
            <br>
            <form action="index.php" method="post" class="needs-validation" novalidate>
                <div class="form-group ">
                    <label for="" class="white"><b>Enter Admin Username:</b></label>
                    <input type="text" name="username" class="form-control mb-3" required>
                    <div class="invalid-feedback">
                    Please Enter Valid Admin Username.
                    </div>
                </div>
                <button type="submit" class="btn btn-danger col-md-4 rounded-pill" style="background-color: #db2723;color:white;" name="delete_admin">Delete Admin</button>
            </form>
        </div>
    </div>
</section>