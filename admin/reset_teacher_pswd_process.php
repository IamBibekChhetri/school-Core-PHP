<?php
require_once "../connection.php";
session_start();
$password = $_POST['password'];
$conformpassword = $_POST['confpassword'];
$mdpassword = md5($password);

$email = $_SESSION['email'];
$sql = "UPDATE teacher SET password = '$mdpassword' where email = '$email'";


if($_POST['password']!=$_POST['confpassword']){
    echo "<script>alert('Password did not match')</script>";
    header("Location: resetpassword.php");
} else{
    $query = mysqli_query($conn,$sql);
    if($query){
    echo "<script>alert('signup add successfully');
    </script>";
    header("Location: login.php");
}
else{
    echo "<script>alert('Error')</script>";
}

}
?>