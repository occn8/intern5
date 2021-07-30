<?php
require_once('config/configurations.php');
?>

<?php
include('widgets/header.php');
require_once('config/user_detail.php');

?>
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Edit Profile</b></h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pt-5"></div>
                <?php if ($_SESSION['id'] == "admin") : ?>
                    <div class="container">
                        <form method="post" action="index.php" class="needs-validation" novalidate>
                            <?php include('config/errors.php'); ?>
                            <div class="container">

                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold " for="firstName">First name</label>
                                                <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $firstname; ?>" required>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold " for="lastName">Last name</label>
                                                <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lastname; ?>" required>
                                                <div class="invalid-feedback">
                                                    Valid last name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="uname" class="text-black font-weight-bold ">Username </label>
                                                <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" disabled required>
                                                <div class="invalid-feedback">
                                                    Valid username is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="email" class="text-black font-weight-bold ">Email </label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" disabled required>
                                                <div class="invalid-feedback">
                                                    Valid last Email is required.
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="col-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold ">Old Password</label>
                                                <input type="password" name="pass" class="form-control" value="<?php echo $pass; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Password.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold "> New Password</label>
                                                <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Password.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold ">Confirm password</label>
                                                <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Password.
                                                </div>
                                            </div>
                                        </div>

                                    </div><br>
                                    <br>
                                    <center>
                                        <button class="btn btn-warning rounded-pill btn-block font-size-20 col-md-6" type="submit" name="save_profile"><b> Save Changes</b></button>
                                    </center>
                                </div>
                        </form>
                    </div>

                <?php elseif ($_SESSION['id'] == "tutor") : ?>
                    <div class="container">
                        <form method="post" action="index.php" class="needs-validation" novalidate>
                            <?php include('config/errors.php'); ?>
                            <div class="container">

                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold " for="firstName">First name</label>
                                                <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $firstname; ?>" required>
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold " for="lastName">Last name</label>
                                                <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lastname; ?>" required>
                                                <div class="invalid-feedback">
                                                    Valid last name is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="uname" class="text-black font-weight-bold">Username </label>
                                                <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" disabled required>
                                                <div class="invalid-feedback">
                                                    Valid username is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="email" class="text-black font-weight-bold">Email </label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" disabled required>
                                                <div class="invalid-feedback">
                                                    Valid last Email is required.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="course" class="text-black font-weight-bold">Course</label>
                                                <input type="text" class="form-control" id="course" name="course" placeholder="Course" value="<?php echo $course; ?>" disabled required>

                                                <div class="invalid-feedback">
                                                    Valid course required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold">Phone</label>
                                                <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid phone Number.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold">Tutor No</label>
                                                <input type="text" name="tutornum" class="form-control" value="<?php echo $tutornum; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Tutor Number.
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold">Password</label>
                                                <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Password.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-black font-weight-bold">Confirm password</label>
                                                <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Password.
                                                </div>
                                            </div>
                                        </div>

                                    </div><br>
                                    <br>
                                    <center>
                                        <button class="btn btn-warning rounded-pill btn-block font-size-20 col-md-6" type="submit" name="save_profile"><b> Save Changes</b></button>
                                    </center>
                                </div>
                        </form>
                    </div>

                <?php else : ?>
                    <div class="container py-4">
                        <form class="needs-validation" method="post" action="index.php" novalidate>
                            <?php include('config/errors.php'); ?>
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black font-weight-bold" for="firstName">First name</label>
                                            <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $firstname; ?>" required>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black font-weight-bold" for="lastName">Last name</label>
                                            <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lastname; ?>" required>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="uname" class="text-black font-weight-bold">Username </label>
                                            <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" disabled>
                                            <div class="invalid-feedback">
                                                Valid username is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="email" class="text-black font-weight-bold">Email </label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" disabled>
                                            <div class="invalid-feedback">
                                                Valid last Email is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="text-black font-weight-bold">Registration No</label>
                                            <input type="text" name="regnum" class="form-control" value="<?php echo $regnum; ?>" disabled>
                                            <div class="invalid-feedback">
                                                Please enter valid Registration Number.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="text-black font-weight-bold">Student No</label>
                                            <input type="text" name="studentnum" class="form-control" value="<?php echo $studentnum; ?>" disabled>
                                            <div class="invalid-feedback">
                                                Please enter valid Student Number.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="course" class="text-black font-weight-bold"><b>Course</b></label>
                                            <b>:<?php echo $cors ?></b>
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
                                            <label for="country" class="text-black font-weight-bold">Year</label>
                                            <b>:<?php echo $year ?></b>
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
                                            <label for="country" class="text-black font-weight-bold">Semester</label>
                                            <b>:<?php echo $sem ?></b>
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
                                            <label class="text-black font-weight-bold">Password</label>
                                            <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                                            <div class="invalid-feedback">
                                                Please enter valid Password.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black font-weight-bold">Confirm password</label>
                                            <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                                            <div class="invalid-feedback">
                                                Please enter valid Password.
                                            </div>
                                        </div>
                                    </div>

                                </div><br>
                            </div><br>
                            <center>
                                <button class="btn btn-warning rounded-pill btn-block font-size-20 col-md-6" type="submit" name="save_profile"><b> Save Changes</b></button>
                            </center>
                        </form>
                    </div>

                <?php endif ?>


            </div>
        </div>
    </div>
</div>