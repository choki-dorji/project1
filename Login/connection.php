<?php

$conn = mysqli_connect('localhost', 'root', '', 'zkteco');
		if(!$conn){
			die("error". mysqli_connect_error());
		}else{
			echo "Connection is sucessfully";
			//echo "<br>";
		}
?>