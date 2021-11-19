<?php
    
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'user');
        
echo "set if loop";  
    
    if(isset($_POST['Login'])){
        $Id = $_POST['user_id'];
        $password = $_POST['password'];
        echo "   user id = $Id";
        echo "   password was $password";
        $e1;
        $p1;
        


        //echo $email;
        //echo $password;
        


        $sql = "SELECT * from userinfo";
        // $sql = "SELECT * from userinfo";
        $result = mysqli_query($conn, $sql);
        echo "jcbsjadbc";
       
        if(mysqli_query($conn, $sql)){
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $e1 = $row['Id'];
                    $p1 = $row['password'];
                   
                    echo $e1;
                    echo $p1;

                    

                    }
                }else{
                    echo "error 1";
                }


            }else{
                echo 'errorefe';
            }


        

        
    }

    
    
    else{
        echo "error".mysqli_error($conn);
    }
?> 
