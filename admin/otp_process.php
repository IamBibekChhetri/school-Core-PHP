<?php
require_once "../connection.php";
session_start();

$otp = mt_rand(100000,999999); 

$sql = "UPDATE user SET  otp = '$otp'";
$query = mysqli_query($conn, $sql);



if($query){
    
    header("Location: resetpassword.php");
}
else{
    echo "<script> alert('OTP does not match!');
    window.open('forgetpassword.php', '_SELF');
    </script>";
   
}


?>