<?php
include("db.php");

$query = "
SELECT 
marks.id,
marks.student_id,
student.name,
marks.course_code,
marks.marks,
marks.grade,
marks.gpa
FROM marks
JOIN student
ON marks.student_id = student.student_id
ORDER BY marks.student_id
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>

<title>View Results</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
}

h1{
text-align:center;
margin-top:30px;
color:#003366;
}

table{
width:90%;
margin:auto;
border-collapse:collapse;
background:white;
}

th{
background:#007bff;
color:white;
padding:12px;
}

td{
padding:10px;
text-align:center;
}

tr:nth-child(even){
background:#f2f2f2;
}

.btn-delete{
background:red;
color:white;
padding:6px 12px;
text-decoration:none;
border-radius:5px;
}

.btn-edit{
background:green;
color:white;
padding:6px 12px;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<h1>Student Results</h1>

<table border="1">

<tr>

<th>Student ID</th>
<th>Name</th>
<th>Course Code</th>
<th>Marks</th>
<th>Grade</th>
<th>GPA</th>
<th>CGPA</th>
<th>Action</th>

</tr>

<?php

$current_student = "";
$total_gpa = 0;
$total_subject = 0;

mysqli_data_seek($result,0);

while($row = mysqli_fetch_assoc($result))
{

if($current_student != $row['student_id'])
{

$current_student = $row['student_id'];

$cgpa_query = "
SELECT AVG(gpa) as cgpa
FROM marks
WHERE student_id = '$current_student'
";

$cgpa_result = mysqli_query($conn,$cgpa_query);

$cgpa_row = mysqli_fetch_assoc($cgpa_result);

$cgpa = round($cgpa_row['cgpa'],2);

$count_query = "
SELECT COUNT(*) as total
FROM marks
WHERE student_id = '$current_student'
";

$count_result = mysqli_query($conn,$count_query);

$count_row = mysqli_fetch_assoc($count_result);

$rowspan = $count_row['total'];

$first = true;

}

?>

<tr>

<?php if($first){ ?>

<td rowspan="<?php echo $rowspan; ?>">
<?php echo $row['student_id']; ?>
</td>

<td rowspan="<?php echo $rowspan; ?>">
<?php echo $row['name']; ?>
</td>

<?php } ?>

<td><?php echo $row['course_code']; ?></td>

<td><?php echo $row['marks']; ?></td>

<td><?php echo $row['grade']; ?></td>

<td><?php echo $row['gpa']; ?></td>

<?php if($first){ ?>

<td rowspan="<?php echo $rowspan; ?>">
<?php echo $cgpa; ?>
</td>

<td rowspan="<?php echo $rowspan; ?>">

<a class="btn-delete"
href="delete_result.php?id=<?php echo $row['id']; ?>">
Delete
</a>

<br><br>

<a class="btn-edit"
href="edit_result.php?id=<?php echo $row['id']; ?>">
Edit
</a>

</td>

<?php } ?>

</tr>

<?php

$first = false;

}

?>

</table>

</body>

</html>