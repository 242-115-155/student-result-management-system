<!DOCTYPE html>
<html>

<head>

<title>Teacher Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
text-align:center;
}

h1{
margin-top:50px;
color:#003366;
}

.box{
width:300px;
margin:auto;
margin-top:40px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0px 0px 10px gray;
}

a{
display:block;
text-decoration:none;
background:#007bff;
color:white;
padding:12px;
margin:15px 0;
border-radius:5px;
font-size:18px;
}

a:hover{
background:#0056b3;
}

.logout{
background:red;
}

.logout:hover{
background:darkred;
}

</style>

</head>

<body>

<h1>Teacher Dashboard</h1>

<div class="box">

<a href="add_student.php">Add Student</a>

<a href="add_course.php">Add Course</a>

<a href="add_marks.php">Add Marks</a>

<a href="teacher_view_result.php">View Results</a>

<a href="search_result.php">Search Results</a>

<a class="logout" href="index.php">Logout</a>

</div>

</body>

</html>