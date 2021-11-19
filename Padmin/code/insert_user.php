<?php
include("connection.php");

	if(isset($_POST['sign_up'])){
		$ID = htmlentities(mysqli_real_escape_string($con,$_POST['id']));
		$name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
		$module = htmlentities(mysqli_real_escape_string($con,$_POST['module']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$Phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
		$status = "verified";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));

		$username = strtolower($name . "_" . $module . "_" . $newgid);
		$check_username_query = "select Name from tutor where id='$ID'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <8 ){
			echo"<script>alert('Password should be minimum 8 characters!')</script>";
			exit();
		}

		$check_email = "select * from tutor where id='$ID'";
		$run_email = mysqli_query($con,$check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('ID already exist, Please try using another ID')</script>";
			echo "<script>window.open('user.php', '_self')</script>";
			exit();
		}
		
		$insert = "insert into tutor (id,Name,module,password,Email,Gender,Phone)
		values('$ID','$name','$module','$pass','$email','$gender','$Phone')";
		
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Registered Successfully')</script>";
			echo "<script>window.open('user.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('user.php', '_self')</script>";
		}
	}
?>