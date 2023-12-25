<?php
//including the database connection file
$con = mysqli_connect('localhost', 'root', '', 'realdata');

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:adds.php");
?>

