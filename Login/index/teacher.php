<?php
session_start();
$_SESSION['user'] = 0;

echo "dsfghj";
if(isset($_POST['ss'])){
        $_SESSION['user'] = $_SESSION['user'] + 1;
;
        echo $_SESSION['user'];
        


}



?>
  