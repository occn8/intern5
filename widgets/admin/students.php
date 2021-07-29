<div class="container" id="students">

    <div class="heading mb-4 border-bottom">
        <h2>All Students</h2>
    </div>

    <div class="container py-4 overfl" id="">
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
                    <h5>Reg Number</h5>
                </th>
                <th class="had">
                    <h5>Student No</h5>
                </th>
                <th class="had">
                    <h5>Year</h5>
                </th>
                <th class="had">
                    <h5>Course</h5>
                </th>
                <th class="had">
                    <h5>Semester</h5>
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
            <?php foreach ($studentsresult as $student) : ?>
                <tr>
                    <td class="had"><?php echo $student['id']; ?></td>
                    <td class="had"><?php echo $student['fname']; ?></td>
                    <td class="had"><?php echo $student['lname']; ?></td>
                    <td class="had"><?php echo $student['username']; ?></td>
                    <td class="had"><?php echo $student['regnum']; ?></td>
                    <td class="had"><?php echo $student['studentnum']; ?></td>
                    <td class="had"><?php echo $student['year']; ?></td>
                    <td class="had"><?php echo $student['course']; ?></td>
                    <td class="had"><?php echo $student['semester']; ?></td>
                    <td class="had"><?php echo $student['email']; ?></td>
                    <td class="had"><?php echo $student['regdate']; ?></td>
                    <td class="had"><?php echo $student['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>
</div>

<section id="insert_student" class="py-5">
    <div class="heading mb-4 border-bottom">
        <h2>Add Student</h2>
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
                                <label class="text-black">Registration No</label>
                                <input type="text" name="regnum" class="form-control" value="<?php echo $regnum; ?>" required>
                                <div class="invalid-feedback">
                                    Please enter valid Registration Number.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-black">Student No</label>
                                <input type="text" name="studentnum" class="form-control" value="<?php echo $studentnum; ?>" required>
                                <div class="invalid-feedback">
                                    Please enter valid Student Number.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="course" class="text-black"><b>Course</b></label>
                                <select class="custom-select d-block w-100" name="course" id="course" required>
                                    <?php foreach ($courseresult as $course) : ?>
                                        <option><?php echo $course['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Valid course required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country" class="text-black">Year</label>
                                <select class="custom-select d-block w-100" name="year" id="year" required>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Year.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country" class="text-black">Semester</label>
                                <select class="custom-select d-block w-100" name="semester" id="semester" required>
                                    <option>One</option>
                                    <option>Two</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Semester.
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
                    <button type="submit" class="btn btn-warning col-md-4 rounded-pill" name="add_student"><b>Add Student</b></button>

                </div>
            </div>
        </form>
    </div>
</section>

<section id="delete_student">
    <div class="container py-4 ">
        <div class="heading mb-4 border-bottom">
            <h2>Remove student</h2>
        </div>
        <div class="mb-3 text-center">
            <div class="dg">
                <h5 class="text-danger"><b>Danger zone</b></h5>
                <p class="text-danger">Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            </div>
            <br>
            <form action="index.php" method="post" class="needs-validation" novalidate>
                <div class="form-group ">
                    <label for="" class="white"><b>Enter Student Number:</b></label>
                    <input type="text" name="studentnum" class="form-control mb-3" required>
                    <div class="invalid-feedback">
                        Please Enter Valid Student Number.
                    </div>
                </div>
                <button type="submit" class="btn btn-danger col-md-4 rounded-pill" name="delete_student">Delete Student</button>
            </form>
        </div>
    </div>
</section>