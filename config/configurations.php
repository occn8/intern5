<?php
session_start();

$username = "";
$email    = "";
$fname    = "";
$lname    = "";
$pass1    = "";
$pass2    = "";
$regnum    = "";
$studentnum    = "";
$phone    = "";
$tutornum    = "";
$errors = array();

$connect = mysqli_connect('localhost', 'root', '');

$createDB = "CREATE DATABASE IF NOT EXISTS timetable";
mysqli_query($connect, $createDB);

$useDB = "USE timetable";
mysqli_query($connect, $useDB);

$admins = "CREATE TABLE IF NOT EXISTS admins (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    regdate datetime NOT NULL,
	modified datetime NOT NULL,
    password VARCHAR(50)
		)";
mysqli_query($connect, $admins);

$students = "CREATE TABLE IF NOT EXISTS students (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
	regnum VARCHAR(30),
    studentnum VARCHAR(30),
	year VARCHAR(30) NOT NULL,
	course VARCHAR(50) NOT NULL,
	semester VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    regdate datetime NOT NULL,
	modified datetime NOT NULL,
    password VARCHAR(50)
		)";
mysqli_query($connect, $students);

$tutors = "CREATE TABLE IF NOT EXISTS tutors (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
	phone VARCHAR(20),
	course VARCHAR(60) NOT NULL,
    tutornum VARCHAR(20),
    email VARCHAR(50),
    regdate datetime NOT NULL,
	modified datetime NOT NULL,
    password VARCHAR(50)
		)";
mysqli_query($connect, $tutors);

$units = "CREATE TABLE IF NOT EXISTS units (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
	code VARCHAR(30) NOT NULL,
	course VARCHAR(60) NOT NULL,
	yearofstudy VARCHAR(30) NOT NULL,
	semester VARCHAR(30) NOT NULL,
	modified datetime NOT NULL
		)";
mysqli_query($connect, $units);

$venue = "CREATE TABLE IF NOT EXISTS venue (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
	code VARCHAR(30) NOT NULL,
	course VARCHAR(60) NOT NULL,
	modified datetime NOT NULL
		)";
mysqli_query($connect, $venue);

$course = "CREATE TABLE IF NOT EXISTS course (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
	faculty VARCHAR(30) NOT NULL,
	modified datetime NOT NULL
		)";
mysqli_query($connect, $course);

$timetable = "CREATE TABLE IF NOT EXISTS timetable (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unit VARCHAR(30) NOT NULL,
	venue VARCHAR(30) NOT NULL,
	yearofstudy VARCHAR(30) NOT NULL,
	semester VARCHAR(30) NOT NULL,
	course VARCHAR(30) NOT NULL,
	day VARCHAR(30) NOT NULL,
    starttime time NOT NULL,
    endtime time NOT NULL,
    tutor VARCHAR(20),
	modified datetime NOT NULL
		)";
mysqli_query($connect, $timetable);

$msgs = "CREATE TABLE IF NOT EXISTS comments (
	msg_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	usr_name VARCHAR (25) NOT NULL,
	usr_email VARCHAR (25) NOT NULL,
	usr_msg VARCHAR (255) NOT NULL,
	modified datetime NOT NULL
	)";
mysqli_query($connect, $msgs);

$admincreate = "INSERT INTO admins (id,fname, lname, username, email, regdate,modified, password) 
VALUES(1,'group','five', 'admin', 'admin@a.a', NOW(),NOW(), '21232f297a57a5a743894a0e4a801fc3')";
mysqli_query($connect, $admincreate);

if (isset($_POST['register_student'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$regnum = mysqli_real_escape_string($connect, $_POST['regnum']);
	$studentnum = mysqli_real_escape_string($connect, $_POST['studentnum']);
	$year = mysqli_real_escape_string($connect, $_POST['year']);
	$course = mysqli_real_escape_string($connect, $_POST['course']);
	$semester = mysqli_real_escape_string($connect, $_POST['semester']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
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
	if (empty($username)) {
		array_push($errors, "Username is required!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already taken!");
	}
	if (mysqli_num_rows($if_email_result) > 0) {
		array_push($errors, "Sorry.. Email is already in Use!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is required!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords do not match!");
	}

	if (count($errors) == 0) {
		$sid = "stud";
		$password = md5($pass1);
		$query = "INSERT INTO students (fname, lname, username, regnum, studentnum, year, course, semester, email, regdate, modified, password) 
					  VALUES('$fname','$lname', '$username', '$regnum', '$studentnum', '$year', '$course', '$semester', '$email', NOW(), NOW(), '$password')";
		mysqli_query($connect, $query);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $sid;
		setcookie('user', $username, time() + (86400 * 2), "/");
		if ($_SESSION['currentpg'] == "index") {
			header('location: index.php');
		} else {
			header('location: index.php');
		}
	}
}

if (isset($_POST['add_student'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$regnum = mysqli_real_escape_string($connect, $_POST['regnum']);
	$studentnum = mysqli_real_escape_string($connect, $_POST['studentnum']);
	$year = mysqli_real_escape_string($connect, $_POST['year']);
	$course = mysqli_real_escape_string($connect, $_POST['course']);
	$semester = mysqli_real_escape_string($connect, $_POST['semester']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
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
	if (empty($username)) {
		array_push($errors, "Username is required!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already taken!");
	}
	if (mysqli_num_rows($if_email_result) > 0) {
		array_push($errors, "Sorry.. Email is already in Use!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is required!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords do not match!");
	}

	if (count($errors) == 0) {
		$sid = "stud";
		$password = md5($pass1);
		$query = "INSERT INTO students (fname, lname, username, regnum, studentnum, year, course, semester, email, regdate, modified, password) 
					  VALUES('$fname','$lname', '$username', '$regnum', '$studentnum', '$year', '$course', '$semester', '$email', NOW(), NOW(), '$password')";
		mysqli_query($connect, $query);

		header('location: index.php#students');
	}
}

if (isset($_POST['register_tutor'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$phone = mysqli_real_escape_string($connect, $_POST['phone']);
	$course = mysqli_real_escape_string($connect, $_POST['course']);
	$tutornum = mysqli_real_escape_string($connect, $_POST['tutornum']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
	$if_user_exist = "SELECT * FROM tutors WHERE username='$username'";
	$if_exist_result = mysqli_query($connect, $if_user_exist);
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
	if (empty($username)) {
		array_push($errors, "Username is required!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already taken!");
	}
	if (mysqli_num_rows($if_email_result) > 0) {
		array_push($errors, "Sorry.. Email is already in Use!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is required!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords do not match!");
	}

	if (count($errors) == 0) {
		$sid = "tutor";
		$password = md5($pass1);
		$query = "INSERT INTO tutors (fname, lname, username, phone, course, tutornum, email, regdate,modified, password) 
					  VALUES('$fname','$lname', '$username', '$phone', '$course', '$tutornum', '$email', NOW(),NOW(), '$password')";
		mysqli_query($connect, $query);

		header('location: index.php#tutors');
	}
}

if (isset($_POST['register_admin'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
	$if_user_exist = "SELECT * FROM admins WHERE username='$username'";
	$if_exist_result = mysqli_query($connect, $if_user_exist);
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
	if (empty($username)) {
		array_push($errors, "Username is required!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already taken!");
	}
	if (mysqli_num_rows($if_email_result) > 0) {
		array_push($errors, "Sorry.. Email is already in Use!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is required!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords do not match!");
	}

	if (count($errors) == 0) {
		$sid = "admin";
		$password = md5($pass1);
		$query = "INSERT INTO admins (fname, lname, username, email, regdate,modified, password) 
					  VALUES('$fname','$lname', '$username', '$email', NOW(),NOW(), '$password')";
		mysqli_query($connect, $query);

		header('location: index.php#admins');
	}
}

if (isset($_POST['signin_user'])) {
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	if (empty($email)) {
		array_push($errors, "Email Required");
	}
	if (empty($password)) {
		array_push($errors, "Password Required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query1 = "SELECT * FROM students WHERE email='$email' AND password='$password'";
		$results1 = mysqli_query($connect, $query1);
		$query2 = "SELECT * FROM tutors WHERE email='$email' AND password='$password'";
		$results2 = mysqli_query($connect, $query2);
		$query3 = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
		$results3 = mysqli_query($connect, $query3);

		if (mysqli_num_rows($results1) == 1) {
			$row = mysqli_fetch_assoc($results1);
			$username = $row['username'];
			$course = $row['course'];
			$yearofstudy = $row['year'];
			$semester = $row['semester'];
			$sid = "stud";
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $sid;
			$_SESSION['currentcourse'] = $course;
			$_SESSION['yearofstudy'] = $yearofstudy;
			$_SESSION['semester'] = $semester;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: index.php');
		}
		if (mysqli_num_rows($results2) == 1) {
			$row = mysqli_fetch_assoc($results2);
			$username = $row['username'];
			$sid = "tutor";
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $sid;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: index.php');
		}
		if (mysqli_num_rows($results3) == 1) {
			$row = mysqli_fetch_assoc($results3);
			$username = $row['username'];
			$sid = "admin";
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $sid;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: index.php');
		} else {
			array_push($errors, "Incorrect combination");
		}
	}
}

if (isset($_POST['update_tutor'])) {
	$phone = mysqli_real_escape_string($connect, $_POST['phone']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);

	if (empty($phone)) {
		array_push($errors, "Last name is required!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is required!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords do not match!");
	}
	$uid = $_SESSION['id'];
	if (count($errors) == 0) {
		$password = md5($pass1);
		$query = "UPDATE tutors SET phone='$phone', email='$email',modified=NOW(),password='$password' WHERE id='$uid'";

		mysqli_query($connect, $query);

		header('location: account.php');
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	header("location: index.php");
}

if (isset($_POST['make_comment'])) {
	$usr_name = mysqli_real_escape_string($connect, $_POST['usr_name']);
	$usr_email = mysqli_real_escape_string($connect, $_POST['usr_email']);
	$usr_msg = mysqli_real_escape_string($connect, $_POST['usr_msg']);
	if (empty($usr_name)) {
		array_push($errors, "Username Required");
	}
	if (empty($usr_email)) {
		array_push($errors, "Email Required");
	}
	if (empty($usr_msg)) {
		array_push($errors, "Message Required");
	}

	if (count($errors) == 0) {
		$uid = $_SESSION['id'];
		$query = "INSERT INTO comments (usr_name, usr_email, usr_msg, modified) 
					  VALUES('$usr_name', '$usr_email', '$usr_msg', NOW())";
		mysqli_query($connect, $query);

		header('location: contacts.php');
	}
}

$querryadmins = "SELECT * FROM admins";
$adminsresult = $connect->query($querryadmins);
if ($result->num_rows > 0) {
} else {
}

$querrytutors = "SELECT * FROM tutors";
$tutorsresult = $connect->query($querrytutors);
if ($result->num_rows > 0) {
} else {
}

$querrystudents = "SELECT * FROM students";
$studentsresult = $connect->query($querrystudents);
if ($result->num_rows > 0) {
} else {
}

$querrycomments = "SELECT * FROM comments";
$commentsresult = $connect->query($querrycomments);
if ($result->num_rows > 0) {
} else {
}


$querryunits = "SELECT * FROM units";
$unitsresult = $connect->query($querryunits);
if ($result->num_rows > 0) {
} else {
}
// $_SESSION['currentcourse'] = 'computer science';
$currentcourse = $_SESSION['currentcourse'];
$querrycourseunits = "SELECT * FROM units WHERE course='$currentcourse'";
$courseunitsresult = $connect->query($querrycourseunits);
if ($result->num_rows > 0) {
} else {
}
$querrycoursetutors = "SELECT * FROM tutors WHERE course='$currentcourse'";
$coursetutorsresult = $connect->query($querrycoursetutors);
if ($result->num_rows > 0) {
} else {
}

$querrycoursevenue = "SELECT * FROM venue WHERE course='$currentcourse'";
$coursevenueresult = $connect->query($querrycoursevenue);
if ($result->num_rows > 0) {
} else {
}

$querryvenue = "SELECT * FROM venue";
$venueresult = $connect->query($querryvenue);
if ($result->num_rows > 0) {
} else {
}

$querrytimetable = "SELECT * FROM timetable";
$timetableresult = $connect->query($querrytimetable);
if ($result->num_rows > 0) {
} else {
}

$querrycourse = "SELECT * FROM course";
$courseresult = $connect->query($querrycourse);
if ($result->num_rows > 0) {
} else {
}


if (isset($_POST['delete_student'])) {
	$studentnum = mysqli_real_escape_string($connect, $_POST['studentnum']);
	if (empty($studentnum)) {
		array_push($errors, "Student number required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM students WHERE studentnum='$studentnum'";
		mysqli_query($connect, $query);
		header('location: index.php#students');
	}
}

if (isset($_POST['delete_tutor'])) {
	$tutornum = mysqli_real_escape_string($connect, $_POST['tutornum']);
	if (empty($tutornum)) {
		array_push($errors, "Tutor number required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM tutors WHERE tutornum='$tutornum'";
		mysqli_query($connect, $query);
		header('location: index.php#tutors');
	}
}

if (isset($_POST['delete_admin'])) {
	$name = mysqli_real_escape_string($connect, $_POST['username']);
	if (empty($name)) {
		array_push($errors, "Admin name required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM admins WHERE username='$name'";
		mysqli_query($connect, $query);
		header('location: index.php#admins');
	}
}

if (isset($_POST['add_course'])) {
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$faculty = mysqli_real_escape_string($connect, $_POST['faculty']);
	if (empty($name)) {
		array_push($errors, "Name required");
	}
	if (empty($faculty)) {
		array_push($errors, "Faculty Required");
	}

	if (count($errors) == 0) {
		$query = "INSERT INTO course (name, faculty, modified) 
					  VALUES('$name', '$faculty',NOW())";
		mysqli_query($connect, $query);
		header('location: index.php#courses');
	}
}
if (isset($_POST['delete_course'])) {
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	if (empty($name)) {
		array_push($errors, "Course name required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM course WHERE name='$name'";
		mysqli_query($connect, $query);
		header('location: index.php#courses');
	}
}

if (isset($_POST['add_unit'])) {
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$code = mysqli_real_escape_string($connect, $_POST['code']);
	$course = mysqli_real_escape_string($connect, $_POST['course']);
	$yearofstudy = mysqli_real_escape_string($connect, $_POST['yearofstudy']);
	$semester = mysqli_real_escape_string($connect, $_POST['semester']);

	if (empty($name)) {
		array_push($errors, "Name required");
	}
	if (empty($code)) {
		array_push($errors, "Code Required");
	}

	if (count($errors) == 0) {
		$query = "INSERT INTO units (name, code, course, yearofstudy, semester, modified) 
					  VALUES('$name', '$code', '$course', '$yearofstudy', '$semester', NOW())";
		mysqli_query($connect, $query);
		header('location: index.php#units');
	}
}
if (isset($_POST['delete_unit'])) {
	$code = mysqli_real_escape_string($connect, $_POST['code']);
	if (empty($code)) {
		array_push($errors, "Unit Code required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM units WHERE code='$code'";
		mysqli_query($connect, $query);
		header('location: index.php#units');
	}
}

if (isset($_POST['add_venue'])) {
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$code = mysqli_real_escape_string($connect, $_POST['code']);
	$course = mysqli_real_escape_string($connect, $_POST['course']);

	if (empty($name)) {
		array_push($errors, "Name required");
	}
	if (empty($code)) {
		array_push($errors, "Code Required");
	}

	if (count($errors) == 0) {
		$query = "INSERT INTO venue (name, code, course, modified) 
					  VALUES('$name', '$code', '$course', NOW())";
		mysqli_query($connect, $query);
		header('location: index.php#venues');
	}
}
if (isset($_POST['delete_venue'])) {
	$code = mysqli_real_escape_string($connect, $_POST['code']);
	if (empty($code)) {
		array_push($errors, "Venue Code required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM venue WHERE code='$code'";
		mysqli_query($connect, $query);
		header('location: index.php#venues');
	}
}

// [Lectures]......
if (isset($_POST['add_lecture'])) {
	$unit = mysqli_real_escape_string($connect, $_POST['unit']);
	$venue = mysqli_real_escape_string($connect, $_POST['venue']);
	$yearofstudy = $_SESSION['yearofstudy'];
	$semester = $_SESSION['semester'];
	$course = $_SESSION['currentcourse'];
	$day = mysqli_real_escape_string($connect, $_POST['day']);
	$starttime = mysqli_real_escape_string($connect, $_POST['starttime']);
	$endtime = mysqli_real_escape_string($connect, $_POST['endtime']);
	$tutor = mysqli_real_escape_string($connect, $_POST['tutor']);
	$if_exist = "SELECT * FROM timetable WHERE day='$day' AND starttime='$starttime'";
	$if_result = mysqli_query($connect, $if_exist);
	$if_exist2 = "SELECT * FROM timetable WHERE day='$day' or starttime='$starttime'";
	$if_result2 = mysqli_query($connect, $if_exist2);
	// foreach ($timetableresult as $lect) {
	// 	if ($lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == $day) {
	// 		array_push($errors, "Time slot already taken");
	// 	}
	// }
	if (empty($yearofstudy || $currentcourse || $semester)) {
		array_push($errors, "Fields required");
	}
	if (mysqli_num_rows($if_result2) > 0) {
		echo "<script>alert('Product is already added in the cart..!')</script>";
		echo "<script>window.location = 'index.php'</script>";
		// $row = mysqli_fetch_assoc($aresults);
		// $course = $row['course'];
		// $yearofstudy = $row['yearofstudy'];
		// $semester = $row['semester'];
		// $starttimes = $row['starttime'];
		// $days = $row['day'];
		// if ($days==$day) {
		array_push($errors, "Time slot already taken");
		// }
	}

	if (count($errors) == 0) {
		$query = "INSERT INTO timetable (unit, venue, yearofstudy, semester, course, day, starttime, endtime, tutor, modified) 
					  VALUES('$unit', '$venue', '$yearofstudy', '$semester', '$course', '$day', '$starttime','$endtime','$tutor',NOW())";
		mysqli_query($connect, $query);
		header('location: index.php#timetable');
	}
	header('location: index.php#timetable');
}

if (isset($_POST['update_lecture'])) {
	$lid = mysqli_real_escape_string($connect, $_POST['lid']);
	$unit = mysqli_real_escape_string($connect, $_POST['unit']);
	$venue = mysqli_real_escape_string($connect, $_POST['venue']);
	$yearofstudy = mysqli_real_escape_string($connect, $_POST['yearofstudy']);
	$semester = mysqli_real_escape_string($connect, $_POST['semester']);
	$course = mysqli_real_escape_string($connect, $_POST['course']);
	$day = mysqli_real_escape_string($connect, $_POST['day']);
	$starttime = mysqli_real_escape_string($connect, $_POST['starttime']);
	$endtime = mysqli_real_escape_string($connect, $_POST['endtime']);
	$tutor = mysqli_real_escape_string($connect, $_POST['tutor']);
	if (empty($unit)) {
		array_push($errors, "Title required");
	}

	if (count($errors) == 0) {
		$query = "UPDATE lectures SET unit='$unit', venue='$venue',yearofstudy='$yearofstudy', semester='$semester', course='$course', day='$day', starttime='$starttime', endtime='$endtime', tutor='$tutor', modified=NOW() WHERE id='$lid'";
		mysqli_query($connect, $query);

		header('location: index.php#timetable');
	}
}

if (isset($_POST['delete_lecture'])) {
	$id = mysqli_real_escape_string($connect, $_POST['id']);
	if (empty($id)) {
		array_push($errors, "Lecture id required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM timetable WHERE id='$id'";
		mysqli_query($connect, $query);
		header('location: index.php#timetable');
	}
}

if (isset($_POST['select_course'])) {
	$course = mysqli_real_escape_string($connect, $_POST['course']);
	$yearofstudy = mysqli_real_escape_string($connect, $_POST['yearofstudy']);
	$semester = mysqli_real_escape_string($connect, $_POST['semester']);
	$_SESSION['currentcourse'] = $course;
	$_SESSION['yearofstudy'] = $yearofstudy;
	$_SESSION['semester'] = $semester;
	header('location: index.php#timetable');
}

// $_SESSION['currentcourse'] = 'computer science';
// $_SESSION['yearofstudy'] = 'One';
// $_SESSION['semester'] = 'One';
