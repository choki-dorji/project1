<?php    


if(isset($_POST['save'])){
    $e1 = $_POST['id'];
    $e2 = $_POST['name'];
    $e3 = $_POST['email'];
    $e4 = $_POST['phone'];
   
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'zkteco');



    

$sql1 = "UPDATE userinfo set id = '$e1', Name = '$e2', Email = '$e3', phone = '$e4' where id = '1219000'";
$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql1)){
    echo "<script>alert('Updated Successfully ');
    location.href='/software_engineering/software_project/software_project/Login/index/profile.php';
    </script>";

}

$sql2 = "UPDATE userinfo set id = '$e1', Name = '$e2', Email = '$e3', phone = '$e4' where id = '12190016'";
$result = mysqli_query($conn, $sql2);

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated Successfully ');
    location.href='/software_engineering/software_project/software_project/Login/index/profile.php';
    </script>";

}

$sql3 = "UPDATE userinfo set id = '$e1', Name = '$e2', Email = '$e3', phone = '$e4' where id = '12190008'";
$result = mysqli_query($conn, $sql3);

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated Successfully ');
    location.href='/software_engineering/software_project/software_project/Login/index/profile.php';
    </script>";

}
$sql4 = "UPDATE userinfo set id = '$e1', Name = '$e2', Email = '$e3', phone = '$e4' where id = '12190026'";
$result = mysqli_query($conn, $sql4);

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated Successfully ');
    location.href='/software_engineering/software_project/software_project/Login/index/profile.php';
    </script>";

}


// $percentage = ($e5/$e4)*100;
// if($percentage < 80){

//         require 'C:/wamp64/www/vendor/autoload.php';

//         $MessageBird = new \MessageBird\Client('yHbhTjJtpSHIrFwO1QhjnJW9K');
//           $Message = new \MessageBird\Objects\Message();
//           $Message->originator = 'Choki';
//           $Message->recipients = [ '+97517901127' ];
//           $Message->body = 'Hello students, it seems that your attendance was less than 80%, so if youo want to sit for exam be present...thank you By college attendance system';

//           print_r(json_encode($MessageBird->messages->create($Message)));
//           // print_r(json_encode($Messagebird->messages->create($message)));
// }

}

?>
