<?php
include("db.php");

if(isset($_POST['submit']))
{
    $course_code = $_POST['course_code'];
    $course_name = $_POST['course_name'];
    $credit = $_POST['credit'];

    $sql = "INSERT INTO course
    (course_code, course_name, credit)
    VALUES
    ('$course_code','$course_name','$credit')";

    mysqli_query($conn, $sql);

    echo "Course Added Successfully";
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Add Course</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Add Course</h1>

<form method="POST">

<input type="text"
name="course_code"
placeholder="Course Code"
required>

<input type="text"
name="course_name"
placeholder="Course Name"
required>

<input type="number"
step="0.5"
name="credit"
placeholder="Credit"
required>

<button type="submit" name="submit">
Add Course
</button>

</form>

</div>

</body>
</html>