<?php
require_once "../connection.php";
session_start();
$otp = mt_rand(100000,999999); 
$email = $_POST['email'];


$sql = " SELECT * FROM user where email='$email' ";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$id=$result['id'];
$_SESSION['id']= $id;

if($result){
 
    $sql = "UPDATE user SET otp = '$otp' where id = $id";
    $query = mysqli_query($conn,$sql);
   if($query){

    header("Location: otp.php");

   }
   else{
    echo "<script> alert('Otp Error!')</script>";
   }
}
else{
    echo "<script> alert('Invalid Email');
    window.open('forgetpassword.php', '_SELF');
    </script>";
   
}


?>