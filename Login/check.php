

<?php
	session_start();
	include('connection.php');
	if(isset($_POST['b1'])){
		$email = $_POST['e1'];

		$sql = "SELECT Email from signup";
		$result = mysqli_query($conn, $sql);
		echo $email;
			echo "jkjsk";

			if(mysqli_query($conn, $sql)){
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {

						if($email == $row['Email']){
							echo "<br>";
							echo "found";
							break;
						}
				  		
				  		}
				  		
				}
			}

	}
		


?>