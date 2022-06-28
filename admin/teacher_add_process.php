<?php
require_once "../connection.php";
$teachername = $_POST['teachername'];
$teacheraddress = $_POST['address'];
$teacherphoto = $_FILES['teacherphoto']['name'];
$teacherphotoTmp = $_FILES['teacherphoto']['tmp_name'];
$directory = "images/".$teacherphoto;
$email = $_POST['email'];
$password = $_POST['password'];
$mdpassword = md5($password);
$teacherphone = $_POST['teacherphone'];
$status = $_POST['status'];

$sql = "insert into teacher (teachername, teacheraddress,teacherphoto, email, password, teacherphone, status) values('$teachername','$teacheraddress','$teacherphoto','$email','$mdpassword','$teacherphone', '$status')";
$query = mysqli_query($conn,$sql);

if($query){
    move_uploaded_file($teacherphotoTmp, $directory);
    header("Location: teacherview.php");
}
else{
    echo "<script>alert('Error')</script>";
}


?>
