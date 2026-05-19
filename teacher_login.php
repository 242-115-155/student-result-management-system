<?php
session_start();
include("db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM teacher 
              WHERE email='$email' 
              AND password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['teacher'] = $email;

        header("Location: teacher_dashboard.php");
    }
    else
    {
        echo "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Teacher Login</title>

<link rel="stylesheet" href="style.css">

<style>

.container{
width:400px;
margin:100px auto;
text-align:center;
}

input{
width:100%;
padding:12px;
margin:10px 0;
}

button{
padding:10px 20px;
background:#007bff;
color:white;
border:none;
cursor:pointer;
}

button:hover{
background:#0056b3;
}

</style>

</head>

<body>

<div class="container">

<h1>Teacher Login</h1>

<form method="POST">

<input type="email" 
name="email" 
placeholder="Enter Email" 
required>

<input type="password" 
name="password" 
placeholder="Enter Password" 
required>

<button type="submit" name="login">
Login
</button>

</form>

</div>

</body>

</html>