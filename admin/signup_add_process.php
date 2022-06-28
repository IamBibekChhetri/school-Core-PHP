<?php
require_once "../connection.php";
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$conformpassword = $_POST['confpassword'];
$mdpassword = md5($password);




$sql = "INSERT INTO user (fullname, email, password, confpassword) values('$fullname','$email','$mdpassword')";


if($_POST['password']!=$_POST['confpassword']){
    echo "<script>alert('Password did not match')</script>";
    header("Location: signup.php");
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