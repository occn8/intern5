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
    } else {
    }
}

if (isset($_POST['save_profile'])) {
    $fname = mysqli_real_escape_string($connect, $_POST['fname']);
    $lname = mysqli_real_escape_string($connect, $_POST['lname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $country = mysqli_real_escape_string($connect, $_POST['country']);
    $district = mysqli_real_escape_string($connect, $_POST['district']);
    $zip = mysqli_real_escape_string($connect, $_POST['zip']);

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
    if (empty($email)) {
        array_push($errors, "Email is required!");
    }
    if (!preg_match("/[0-9]{4,5}$/", $zip)) {
        array_push($errors, "Invalid Zip code!");
    }
    $uid = $_SESSION['id'];
    if (count($errors) == 0) {
        $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',modified=NOW(),address='$address',country='$country',district='$district',zip='$zip' WHERE id='$uid'";

        mysqli_query($connect, $query);

        header('location: profile.php');
    }
}
