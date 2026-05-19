<?php
include("db.php");

$student_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM student"));

$course_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM course"));

$result_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM marks"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Metropolitan University Result Management System</title>
    <link rel="stylesheet"
href="style.css">
</head>
<body>

<div class="logo-section">

    <img src="logo.png.jpeg" class="logo">

    <h2>Department of Computer Science and Engineering</h2>

    <p>Semester Final Result</p>

</div>


<h3>Menu</h3>

<div class="menu">

<a href="student.php">Student Login</a>

    <a href="teacher_login.php">Teacher Login</a>

</div>

</body>
</html>