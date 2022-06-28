<?php
require_once "../connection.php";

$teachername = $_POST['teachername'];
$teacheraddress = $_POST['address'];
$teacherphoto = $_FILES['teacherphoto']['name'];
$teacherphotoTmp = $_FILES['teacherphoto']['tmp_name'];
$directory = "images/".$teacherphoto;
$email = $_POST['email'];
$teacherphone = $_POST['teacherphone'];
$id = $_GET['id'];

$sql = "UPDATE teacher SET teachername = '$teachername', teacheraddress = '$teacheraddress', teacherphoto = '$teacherphoto', email ='$email', teacherphone = '$teacherphone' where id= '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    move_uploaded_file($studentphotoTmp, $directory);
    header("Location: teacherview.php");
}
else{
    echo "<script>alert('Error!')</script>";
}

?>