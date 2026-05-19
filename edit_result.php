<?php

include("db.php");

$id = $_GET['id'];

$query = "SELECT * FROM marks WHERE id=$id";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $marks = $_POST['marks'];

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

    $update = "UPDATE marks
               SET marks='$marks',
               grade='$grade',
               gpa='$gpa'
               WHERE id=$id";

    mysqli_query($conn, $update);

    header("Location:view_result.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Result</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Edit Result</h1>

<form method="POST">

<input type="text"
value="<?php echo $row['student_id']; ?>"
readonly>

<br><br>

<input type="text"
value="<?php echo $row['course_code']; ?>"
readonly>

<br><br>

<input type="number"
name="marks"
value="<?php echo $row['marks']; ?>"
required>

<br><br>

<input type="submit"
name="update"
value="Update">

</form>

</div>

</body>
</html>