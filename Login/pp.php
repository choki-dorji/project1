<?php
	session_start();
	include('connection.php');
	
	if(isset($_POST['register'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repeat = $_POST['repeat'];	
		$e1;
		$p1;
		$rep;

		echo $email;
		//echo $password;
		


		$sql = "SELECT * from signup where Email = '$email'";
		$result = mysqli_query($conn, $sql);

		

		if(mysqli_query($conn, $sql)){
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
			  		$e1 = $row['Email'];
			  		$p1 = $row['password'];
			  		$type = $row['type'];

			  		

			  		}

			  		$rep = password_verify($password, $p1);
			  		if($rep == 1 && $type == 1){
			  			echo "<script>alert('Loged in');
			 			location.href='/Bumthapproject/admin_page/index.html';
			 			</script>";

			  		}else if($rep == 1 && $type == 0){
			  			if($email == "yeshi@gmail.com"){
			  				echo "<script>alert('Loged in');
			 				location.href='/Bumthapproject/user1/index.html'
			 				</script>";
			  			}else if($email == "choki@gmail.com"){
			  				echo "<script>alert('Loged in');
			 				location.href='/Bumthapproject/user/index.html'
			 				</script>";
			  			}else{
			  				echo "<script>alert('You are unauthorised user although you have account');
			 				location.href='/Bumthapproject/ Register_adminuser/Login_adminuser/index.html'
			 				</script>";
			  			}
			  			
			  		

			  		}else if($rep != 1){
			  			echo "<script>alert('Password Miss match');
			 			location.href='index.html';
			 			</script>";
			  		}
			  		else{
			  			echo "<script>alert('could not Loged in');
			 			location.href='index.html';
			 			</script>";
			  		}
		  		}



		  }

	
	}
	else{
		echo "error".mysqli_error($conn);
	}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Oopss, you are trying with invalid email.</h1>
		
	</body>
	</html>

