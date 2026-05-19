<?php
include("db.php");

if(isset($_POST['submit']))
{
    $student_id = $_POST['student_id'];
    $course_code = $_POST['course_code'];
    $marks = $_POST['marks'];

    // Grade & GPA Calculation

    if($marks >= 80){
        $grade = "A+";
        $gpa = 4.00;
    }
    elseif($marks >= 75){
        $grade = "A";
        $gpa = 3.75;
    }
    elseif($marks >= 70){
        $grade = "A-";
        $gpa = 3.50;
    }
    elseif($marks >= 65){
        $grade = "B+";
        $gpa = 3.25;
    }
    elseif($marks >= 60){
        $grade = "B";
        $gpa = 3.00;
    }
    elseif($marks >= 55){
        $grade = "B-";
        $gpa = 2.75;
    }
    elseif($marks >= 50){
        $grade = "C+";
        $gpa = 2.50;
    }
    elseif($marks >= 45){
        $grade = "C";
        $gpa = 2.25;
    }
    elseif($marks >= 40){
        $grade = "D";
        $gpa = 2.00;
    }
    else{
        $grade = "F";
        $gpa = 0.00;
    }

    $sql = "INSERT INTO marks
    (student_id, course_code, marks, grade, gpa)
    VALUES
    ('$student_id','$course_code','$marks','$grade','$gpa')";

    mysqli_query($conn, $sql);

    echo "Marks Added Successfully";
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Add Marks</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Add Marks</h1>

<form method="POST">

<input type="text"
name="student_id"
placeholder="Student ID"
required>

<input type="text"
name="course_code"
placeholder="Course Code"
required>

<input type="number"
name="marks"
placeholder="Marks"
required>

<button type="submit" name="submit">
Add Marks
</button>

</form>

</div>

</body>
</html>