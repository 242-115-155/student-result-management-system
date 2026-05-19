<?php

include 'db.php';

if(isset($_POST['submit'])){

    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    $sql = "INSERT INTO student
    (student_id, name, department, semester)

    VALUES

    ('$student_id','$name','$department','$semester')";

    mysqli_query($conn, $sql);

    echo "Student Added Successfully";

}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Add Student</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Add Student</h1>

<form method="POST">

    <input type="text"
    name="student_id"
    placeholder="Student ID"
    required>

    <br><br>

    <input type="text"
    name="name"
    placeholder="Student Name"
    required>

    <br><br>

    <input type="text"
    name="department"
    placeholder="Department"
    required>

    <br><br>

    <input type="text"
    name="semester"
    placeholder="Semester"
    required>

    <br><br>

    <input type="submit"
    name="submit"
    value="Add Student">

</form>

</body>
</html>