<?php

include "connection.php"; // Using database connection file here
$db = mysqli_connect("localhost","root","","testDB");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from tutor where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:tables.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>