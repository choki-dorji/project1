<?php
    
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'zkteco');
 

   

    
    if(isset($_POST['Login'])){
        $Id = $_POST['user_id'];
        $p1 = $_POST['password'];
        

        //  $_SESSION['enroll'];
        //  $_SESSION['Name'];
        //  $_SESSION['password'];
        //  $_SESSION['gender'];
        // $_SESSION['module'];
        //  $_SESSION['programme'];
        //  $_SESSION['email'];
        //  $_SESSION['phone'];

        


        //echo $email;
        //echo $password;
   

        $sql = "SELECT * from tutor where id = '$Id'";
        // $sql = "SELECT * from userinfo";
        $result = mysqli_query($conn, $sql);
        
        echo "jasdca";
        if(mysqli_query($conn, $sql)){
            echo "jasdca";
            if (mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {


                    $_SESSION['enroll'] = $row['id'];
                    $_SESSION['Name'] = $row['Name'];
                    $_SESSION['password'] = $row['password'];

                    // echo $_SESSION['password'];


                    $_SESSION['gender'] = $row['Gender'];
                    $_SESSION['module'] = $row['module'];
                    $_SESSION['email'] = $row['Email'];
                    $_SESSION['phone'] = $row['Phone'];

                    //echo $_SESSION['img'];


                    }
                    echo "jasdca";
                    $descryp = password_verify($p1, $_SESSION['password']);
                    
                    if($descryp == 1){
                        echo "<script>alert('Loged in Successfully');
                        location.href='/software_engineering/software_project/software_project/tutor/project/name/profile.php';
                        </script>";
                       
                        
                    }
                    else if($_SESSION['password'] == $p1){
                        echo "<script>alert('Loged in Successfully');
                        location.href='/software_engineering/software_project/software_project/tutor/project/name/profile.php';
                        </script>";
                    }
                    else{
                        echo "<script>alert('Incorrect creditionals please try again');
                        location.href='/software_engineering/software_project/software_project/Login/tutorlogin.php';
                        </script>";
                        
                    }

                }else{
                    echo "<script>alert('Incorrect creditionals please try again');
                    location.href='/software_engineering/software_project/software_project/Login/tutorlogin.php';
                    </script>";
                }
               
            }
         }   
?> 