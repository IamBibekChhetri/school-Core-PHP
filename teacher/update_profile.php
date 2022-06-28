<?php

require_once "../connection.php";
$updatename = $_POST['teachername'];
$updateemail = $_POST['email'];

$teacherid = $_POST['id'];

$updateimage = $_FILES['teacherphoto']['name'];

if($updateimage){
   $updateimageTmp = $_FILES['teacherphoto']['tmp_name'];
    $directory = "images/".$updateimage;
    
$sql = "UPDATE teacher SET  teacherimage = '$updateimage', teachername = '$updatename', email = '$updateemail' WHERE id = '$teacherid' ";
$result = mysqli_query($conn,$sql);

if($result){
    move_uploaded_file($updateimageTmp, $directory);
        header("Location: profile.php");
    }
}

else{
    $sql = "UPDATE teacher SET teachername = '$updatename', email = '$updateemail' WHERE id = '$teacherid' ";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: profile.php");
}
}







?>