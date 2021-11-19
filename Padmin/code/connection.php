<?php

$conn = "";
try {
	$servername = "localhost";
	$dbname = "zkteco";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=zkteco",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
