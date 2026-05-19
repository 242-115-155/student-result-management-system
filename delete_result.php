<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM marks WHERE id=$id";

mysqli_query($conn, $sql);

header("Location:view_result.php");

?>