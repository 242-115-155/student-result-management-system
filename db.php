<?php

// Localhost
/*
$conn = mysqli_connect(
    "localhost",
    "root",
    "yourpassword",
    "university_result_management"
);
*/

// Live Server
$conn = mysqli_connect(
    "sql203.infinityfree.com",
    "if0_41965318",
    "YOUR_DB_PASSWORD",
    "if0_41965318_university_result_management"
);

if(!$conn){
    die("Connection Failed");
}

?>
