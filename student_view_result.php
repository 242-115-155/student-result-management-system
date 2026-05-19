<?php
include("db.php");

$query = mysqli_query($conn, "
SELECT marks.*, student.name
FROM marks
JOIN student
ON marks.student_id = student.student_id
ORDER BY marks.student_id
");

$current_student = "";
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Results</title>

<link rel="stylesheet" href="style.css">

<style>

table{
    width:95%;
    margin:auto;
    border-collapse:collapse;
    background:white;
}

th{
    background:#008cff;
    color:white;
    padding:12px;
    border:1px solid #ddd;
}

td{
    padding:10px;
    border:1px solid #ddd;
    text-align:center;
}

h1{
    text-align:center;
    margin:30px;
    color:#0b1f66;
}

</style>

</head>

<body>

<h1>Student Results</h1>

<table>

<tr>

<th>Student ID</th>
<th>Name</th>
<th>Course Code</th>
<th>Marks</th>
<th>Grade</th>
<th>GPA</th>
<th>CGPA</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($query))
{

$student_id = $row['student_id'];

$count_query = mysqli_query($conn,
"SELECT COUNT(*) as total FROM marks WHERE student_id='$student_id'");

$count_data = mysqli_fetch_assoc($count_query);

$rowspan = $count_data['total'];

$cgpa_query = mysqli_query($conn,
"SELECT AVG(gpa) as cgpa FROM marks WHERE student_id='$student_id'");

$cgpa_data = mysqli_fetch_assoc($cgpa_query);

$cgpa = round($cgpa_data['cgpa'], 2);

?>

<tr>

<?php
if($current_student != $student_id)
{
?>

<td rowspan="<?php echo $rowspan; ?>">
<?php echo $row['student_id']; ?>
</td>

<td rowspan="<?php echo $rowspan; ?>">
<?php echo $row['name']; ?>
</td>

<?php
}
?>

<td><?php echo $row['course_code']; ?></td>

<td><?php echo $row['marks']; ?></td>

<td><?php echo $row['grade']; ?></td>

<td><?php echo $row['gpa']; ?></td>

<?php
if($current_student != $student_id)
{
?>

<td rowspan="<?php echo $rowspan; ?>">
<?php echo $cgpa; ?>
</td>

<?php
}
?>

</tr>

<?php

$current_student = $student_id;

}
?>

</table>

</body>
</html>