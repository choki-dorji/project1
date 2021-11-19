<?php
	session_start();
	include('connection.php');
	
	if(isset($_POST['Login'])){
		$Id = $_POST['user_id'];
		$password = $_POST['password'];
		$e1;
		$p1;
		$rep;

		//echo $email;
		//echo $password;
		


		$sql = "SELECT * from login where UseId = '$Id'";
		$result = mysqli_query($conn, $sql);

		

		if(mysqli_query($conn, $sql)){
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
			  		$e1 = $row['UseId'];
			  		$p1 = $row['Password'];
				
					echo "<script>alert('Loged in');
			 			
			 		</script>";

			 		echo "$e1";

			 		echo "$p1";
			  		
		  		}



		  }
		}
	}

	
	
	else{
		echo "error".mysqli_error($conn);
	}
?>