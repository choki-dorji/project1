<?php    



if(isset($_POST['save'])){
    $e1 = $_POST['id'];
    $e2 = $_POST['name'];
    $e3 = $_POST['email'];
    $e4 = $_POST['phone'];
   
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'zkteco');



    

$sql = "UPDATE userinfo set id = '$e1', Name = '$e2', Email = '$e3', phone = '$e4' where id = '12190002'";
$result = mysqli_query($conn, $sql);





if(mysqli_query($conn, $sql)){
   echo "success";



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
