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
$conn = mysqli_connect('localhost', 'root', '', 'zkteco');

$sql1 = "SELECT COUNT(*) as tot FROM inoutdata WHERE COL3 = '12000'";
        $result = mysqli_query($conn, $sql1);
        
        
        
        
        
        if(mysqli_query($conn, $sql1)){
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    // $e1 = $row['COL1'];
                    // $e2 = $row['COL2'];
                    // $e3 = $row['COL3'];
                    // $e4 = $row['COL4'];
                    $e4 = $row['tot'];
                   
                   // echo $e1;
                   // echo "$e4 tutor";
                    
                    // echo $e4;
                         
                        }
        
        
                  }
                }
        
    
$link = mysqli_connect("localhost", "root", "", "user");

// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT *, COUNT(COL2) as TOT from inoutdata group by COL2 having COL1 = 'OUR COMPANY'";
//$sql = "SELECT *  from inoutdata group by COL2 having COL1 = 'OUR COMPANY'";
if($result = mysqli_query($link, $sql)){
   if(mysqli_num_rows($result) > 0){ 

  echo "Student Attendance:";
       echo "<table border=1 cellpadding= 10 cellspacing=10 width=90% >";
           echo "<tr>";
               echo "<th>  Name  </th>";
               echo "<th>  Student No  </th>";
               echo "<th>  Class Attended  </th>";
               echo "<th>  Class Delivered </th>";
               echo "<th>  Percentage </th>";
               
   
           echo "</tr>";
       while($row = mysqli_fetch_array($result)){
            $_SESSION['percent'] = ($row['TOT']/$e4)*100;
            
            

           echo "<tr>";
               echo "<td>" . $row['COL2'] . "</td>";
               echo "<td>" . $row['COL3'] . "</td>";
               echo "<td>" . $row['TOT'] . "</td>";
               echo "<td>" . $e4 . "</td>";
               echo "<td>" . $_SESSION['percent'] . "</td>";
           
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