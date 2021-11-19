<!DOCTYPE html>
<html lang="en">

<head>
 
 
</head>

<body>
  <?php include 'sidebar.php';?> 
		
		<br><br><br><br>
  <h3>Active Tutor </h3>
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
$sql = "SELECT count(*)  as total FROM tutor order by id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) >= 0){
        echo "<table border=1 cellpadding= 10 cellspacing=10 width=40% >";
            echo "<tr>";
                echo "<th>  Total Number of Tutor </th>";
              
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['total'] . "</td>";
             
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

$sql2 = "SELECT count(*) as male FROM tutor where Gender='Male' order by id";
if($result = mysqli_query($link, $sql2)){
    if(mysqli_num_rows($result) >= 0){
        echo "<table border=1 cellpadding= 10 cellspacing=10 width=40% >";
            echo "<tr>";
					
                echo "<br><br> <th>  Male Tutor </th>";
              
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['male'] . "</td>";
             
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

$sql3 = "SELECT count(*) as female FROM tutor where Gender='Female' order by id";
if($result = mysqli_query($link, $sql3)){
    if(mysqli_num_rows($result) >= 0){
        echo "<table border=1 cellpadding= 10 cellspacing=10 width=40% >";
            echo "<tr>";
					
                echo "<br><br> <th>  Female Tutor </th>";
              
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['female'] . "</td>";
             
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql.3 " . mysqli_error($link);
}

$sql4 = "SELECT count(*) as other FROM tutor where Gender='Other' order by id";
if($result = mysqli_query($link, $sql4)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1 cellpadding= 10 cellspacing=10 width=40% >";
            echo "<tr>";
					
                echo "<br><br> <th>  Others Tutor </th>";
              
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['other'] . "</td>";
             
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>		
		
		<br><br>
      <?php include 'footer.php';?> 
	  
</body>

</html>