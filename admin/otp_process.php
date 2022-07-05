<?php
require_once "../connection.php";
session_start();

$otp = mt_rand(100000,999999); 

$sql = "UPDATE user SET  otp = '$otp' WHERE id = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
$id=$query['id'];
$_SESSION['id']= $id;



if($row){
    
    header("Location: resetpassword.php");
}
else{
    echo "<script> alert('OTP does not match!');
    window.open('forgetpassword.php', '_SELF');
    </script>";
   
}


?>