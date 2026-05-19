<?php
include("db.php");
?>

<!DOCTYPE html>
<html>

<head>

<title>Search Student Result</title>

<link rel="stylesheet" href="style.css">

<style>

table{
width:90%;
margin:auto;
border-collapse:collapse;
text-align:center;
}

th{
background:#007bff;
color:white;
padding:12px;
}

td{
padding:10px;
}

input{
padding:10px;
width:250px;
}

button{
padding:10px 20px;
background:#007bff;
color:white;
border:none;
}

</style>

</head>

<body>

<h1 align="center">Search Student Result</h1>

<br>

<form method="POST" align="center">

<input type="text" name="student_id" placeholder="Enter Student ID" required>

<button type="submit" name="search">Search</button>

</form>

<br><br>

<?php

if(isset($_POST['search']))
{

$student_id = $_POST['student_id'];

$query = mysqli_query($conn,
"SELECT marks.*, student.name
FROM marks
JOIN student
ON marks.student_id = student.student_id
WHERE marks.student_id='$student_id'");

if(mysqli_num_rows($query)>0)
{

$student = mysqli_fetch_assoc($query);

?>

<h2 align="center">
Student ID : <?php echo $student['student_id']; ?>
</h2>

<h2 align="center">
Name : <?php echo $student['name']; ?>
</h2>

<br>

<table border="1">

<tr>

<th>Course Code</th>
<th>Marks</th>
<th>Grade</th>
<th>GPA</th>

</tr>

<?php

mysqli_data_seek($query,0);

$total = 0;
$count = 0;

while($row=mysqli_fetch_assoc($query))
{

$total += $row['gpa'];
$count++;

?>

<tr>

<td><?php echo $row['course_code']; ?></td>

<td><?php echo $row['marks']; ?></td>

<td><?php echo $row['grade']; ?></td>

<td><?php echo $row['gpa']; ?></td>

</tr>

<?php
}

$cgpa = round($total/$count,2);

?>

</table>

<br>

<h1 align="center">
CGPA = <?php echo $cgpa; ?>
</h1>

<?php

}
else
{
echo "<h2 align='center'>No Result Found</h2>";
}

}

?>

</body>

</html>