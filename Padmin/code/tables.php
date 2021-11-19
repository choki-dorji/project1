<!DOCTYPE html>
<html lang="en">

<head>
 
 
</head>

<body class="">
  <?php include 'sidebar.php';?> 
  <br><br><br><br>
  <h3>User List </h3>
  <br><br>
		
		
		
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "zkteco");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM tutor order by ID";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1 cellpadding= 10 cellspacing=10 width=90% >";
            echo "<tr>";
                echo "<th>  ID  </th>";
                echo "<th>  Name  </th>";
                echo "<th>  Email  </th>";
				echo "<th> Module</th>";
				echo "<th> Phone</th>";
               
	
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "<td>" . $row['module'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
				
			
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>		
		
		
		<br><br>
      <?php include 'footer.php';?> 
	  
</body>

</html>