<?php

include "connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string
$db = mysqli_connect("localhost","root","","user");

$qry = mysqli_query($db,"select * from tutor where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['Name'];
    $email = $_POST['Email'];
	
    $edit = mysqli_query($db,"update tutor set Name='$fullname', Email='$email' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:tables.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="Name" value="<?php echo $data['Name'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="Email" value="<?php echo $data['Email'] ?>" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update">
</form>