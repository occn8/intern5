<?php
$uid = $_SESSION['username'];
$sid = $_SESSION['id'];

$querrystudent = "SELECT * FROM students WHERE username='$uid'";
$sresults = mysqli_query($connect, $querrystudent);
$querrytutor = "SELECT * FROM tutors WHERE username='$uid'";
$tresults = mysqli_query($connect, $querrytutor);
$querryadmin = "SELECT * FROM admins WHERE username='$uid'";
$aresults = mysqli_query($connect, $querryadmin);

if ($_SESSION['id'] == "admin") {
    if ($aresults->num_rows > 0) {
        $row = mysqli_fetch_assoc($aresults);
        $firstname = $row['fname'];
        $lastname = $row['lname'];
        $username = $row['username'];
        $email = $row['email'];
    } else {
    }
} elseif ($_SESSION['id'] == "tutor") {
    if ($tresults->num_rows > 0) {
        $row = mysqli_fetch_assoc($tresults);
        $firstname = $row['fname'];
        $lastname = $row['lname'];
        $username = $row['username'];
        $phone = $row['phone'];
        $course = $row['course'];
        $tutornum = $row['tutornum'];
        $email = $row['email'];
    } else {
    }
} else {

    if ($sresults->num_rows > 0) {
        $row = mysqli_fetch_assoc($sresults);
        $firstname = $row['fname'];
        $lastname = $row['lname'];
        $username = $row['username'];
        $regnum = $row['regnum'];
        $studentnum = $row['studentnum'];
        $email = $row['email'];
        $year = $row['year'];
        $sem = $row['semester'];
        $cors = $row['course'];
    } else {
    }
}

if (isset($_POST['save_profile'])) {
    if ($_SESSION['id'] == "admin") {
        $fname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lname = mysqli_real_escape_string($connect, $_POST['lname']);
        // $username = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
        $pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
        // $if_user_exist = "SELECT * FROM admins WHERE username='$username'";
        // $if_exist_result = mysqli_query($connect, $if_user_exist);
        $if_email_exist = "SELECT * FROM admins WHERE email='$email'";
        $if_email_result = mysqli_query($connect, $if_email_exist);

        if (empty($fname)) {
            array_push($errors, "First name is required!");
        } else {
            if (!preg_match("/[a-zA-Z]{3,30}$/", $fname)) {
                array_push($errors, "Invalid First name!");
            }
        }
        if (empty($lname)) {
            array_push($errors, "Last name is required!");
        }
        if (empty($pass1)) {
            array_push($errors, "Password is required!");
        }
        if ($pass1 != $pass2) {
            array_push($errors, "Passwords do not match!");
        }

        if (count($errors) == 0) {
            $username = $_SESSION['username'];
            $password = md5($pass1);
            $query = "UPDATE admins SET fname='$fname',lname='$lname',email='$email',modified=NOW(),password='$password' WHERE username='$username'";
            mysqli_query($connect, $query);

            header('location: index.php');
        }
    } elseif ($_SESSION['id'] == "tutor") {
        $fname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lname = mysqli_real_escape_string($connect, $_POST['lname']);
        // $username = mysqli_real_escape_string($connect, $_POST['username']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $course = mysqli_real_escape_string($connect, $_POST['course']);
        $tutornum = mysqli_real_escape_string($connect, $_POST['tutornum']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
        $pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
        // $if_user_exist = "SELECT * FROM tutors WHERE username='$username'";
        // $if_exist_result = mysqli_query($connect, $if_user_exist);
        $if_email_exist = "SELECT * FROM tutors WHERE email='$email'";
        $if_email_result = mysqli_query($connect, $if_email_exist);

        if (empty($fname)) {
            array_push($errors, "First name is required!");
        } else {
            if (!preg_match("/[a-zA-Z]{3,30}$/", $fname)) {
                array_push($errors, "Invalid First name!");
            }
        }
        if (empty($lname)) {
            array_push($errors, "Last name is required!");
        }

        if (empty($pass1)) {
            array_push($errors, "Password is required!");
        }
        if ($pass1 != $pass2) {
            array_push($errors, "Passwords do not match!");
        }

        if (count($errors) == 0) {
            $username = $_SESSION['username'];
            $password = md5($pass1);
            $query = "UPDATE tutors SET fname='$fname',lname='$lname',phone='$phone',tutornum='$tutornum',course='$course',modified=NOW(),password='$password' WHERE username='$username'";
            mysqli_query($connect, $query);

            header('location: index.php');
        }
    } else {
        $fname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lname = mysqli_real_escape_string($connect, $_POST['lname']);
        // $username = mysqli_real_escape_string($connect, $_POST['username']);
        $regnum = mysqli_real_escape_string($connect, $_POST['regnum']);
        $studentnum = mysqli_real_escape_string($connect, $_POST['studentnum']);
        $year = mysqli_real_escape_string($connect, $_POST['year']);
        $course = mysqli_real_escape_string($connect, $_POST['course']);
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        // $email = mysqli_real_escape_string($connect, $_POST['email']);
        $pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
        $pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
        $if_user_exist = "SELECT * FROM students WHERE username='$username'";
        $if_exist_result = mysqli_query($connect, $if_user_exist);
        $if_email_exist = "SELECT * FROM students WHERE email='$email'";
        $if_email_result = mysqli_query($connect, $if_email_exist);

        if (empty($fname)) {
            array_push($errors, "First name is required!");
        } else {
            if (!preg_match("/[a-zA-Z]{3,30}$/", $fname)) {
                array_push($errors, "Invalid First name!");
            }
        }
        if (empty($lname)) {
            array_push($errors, "Last name is required!");
        }

        // if (mysqli_num_rows($if_exist_result) > 0) {
        //     array_push($errors, "Sorry.. Username already taken!");
        // }
        // if (mysqli_num_rows($if_email_result) > 0) {
        //     array_push($errors, "Sorry.. Email is already in Use!");
        // }
        // if (empty($email)) {
        //     array_push($errors, "Email is required!");
        // }
        if (empty($pass1)) {
            array_push($errors, "Password is required!");
        }
        if ($pass1 != $pass2) {
            array_push($errors, "Passwords do not match!");
        }

        if (count($errors) == 0) {
            $username = $_SESSION['username'];
            $password = md5($pass1);
            $_SESSION['currentcourse'] = $course;
			$_SESSION['yearofstudy'] = $year;
			$_SESSION['semester'] = $semester;
            $query = "UPDATE students SET fname='$fname',lname='$lname',regnum='$regnum',studentnum='$studentnum',year='$year',course='$course',semester='$semester',modified=NOW(),password='$password' WHERE username='$username'";
            mysqli_query($connect, $query);

            header('location: index.php');
        }
    }
}
