<?php

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['Name'];
    
    $password = $_POST['password'];
    // $gender = $_POST['gender'];

    // $semister = $_POST['semister'];
    // $programme  = $_POST['programme'];

    // $email = $_POST['email'];

    $conn = mysqli_connect('localhost', 'root', '', 'user');
    

    $ps1 = password_hash($password, PASSWORD_DEFAULT);
   
    
    //$descry = password_verify($password, $ps1);
    //echo $descry;

    //$rep = password_verify($password, $ps1);
    //echo $rep;

    

        $sql = "INSERT INTO tutor(id, Name, password) values ('$id','$name', '$ps1')";
        

        if(mysqli_query($conn,$sql)){
            echo "<script>alert('successfully Registered')</script>";
            
        }else{
            echo "error". mysqli_error($conn);
        }
            
    }else{
        echo "<script>alert('Could not regiter');
         

        </script>";
            //header('location:r1.html');
    }
        
        

    



    /**/
        
            
                
            
        
        



?>