<?php
require_once('config/configurations.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="assets/favicon.ico">
    <title>Register</title>
</head>

<body style="background-color: white;">
    <form method="post" action="sign_up.php" class="needs-validation form-signup" novalidate>
        <center>
            <img class="mb-4 mt-5" src="assets/favicon.ico" alt="" height="100">

            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
        </center>

        <?php include('config/errors.php'); ?>
        <div class="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="firstName">First name</label>
                        <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $fname; ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="lastName">Last name</label>
                        <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lname; ?>" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="uname" class="text-black">Username </label>
                        <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
                        <div class="invalid-feedback">
                            Valid username is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
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
                        <label class="white">Registration No</label>
                        <input type="text" name="regnum" class="form-control" value="<?php echo $regnum; ?>" required>
                        <div class="invalid-feedback">
                            Please enter valid Registration Number.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Student No</label>
                        <input type="text" name="studentnum" class="form-control" value="<?php echo $studentnum; ?>" required>
                        <div class="invalid-feedback">
                            Please enter valid Student Number.
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="course" class="white"><b>Course</b></label>
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
                        <label for="country" class="white">Year</label>
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
                        <label for="country" class="white">Semester</label>
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
                        <label class="white">Password</label>
                        <input type="password" name="pass1" class="form-control" value="<?php echo $pass1; ?>" required>
                        <div class="invalid-feedback">
                            Please enter valid Password.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Confirm password</label>
                        <input type="password" name="pass2" class="form-control" value="<?php echo $pass2; ?>" required>
                        <div class="invalid-feedback">
                            Please enter valid Password.
                        </div>
                    </div>
                </div>

            </div><br>

            <center>
                <button class="btn btn-lg btn-warning btn-block col-md-6 rounded-pill" style="background-color: #db2723;color:white;" name="register_student" type="submit"><b>Register</b></button><br>

                <small>Already have A/C? </small> <a href="sign_in.php" class="color-link btn clr-bg rounded-pill prim font-size-20">Log In Now</a>
                <p class="mt-5 mb-3 text-muted">&copy; <script>
                        document.write(new Date().getFullYear());
                    </script>
                </p>
            </center>

        </div>
    </form>

    <script src="assets/scripts/validate.js"></script>
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
    <script src="assets/scripts/popper.min.js"></script>
</body>

</html>