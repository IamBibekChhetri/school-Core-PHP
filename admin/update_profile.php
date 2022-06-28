<?php

require_once "../connection.php";
$updatename = $_POST['fullname'];
$updateemail = $_POST['email'];

$userid = $_POST['id'];

$updateimage = $_FILES['userimage']['name'];

if($updateimage){
   $updateimageTmp = $_FILES['userimage']['tmp_name'];
    $directory = "images/".$updateimage;
    
$sql = "UPDATE user SET  userimage = '$updateimage', fullname = '$updatename', email = '$updateemail' WHERE id = '$userid' ";
$result = mysqli_query($conn,$sql);

if($result){
    move_uploaded_file($updateimageTmp, $directory);
        header("Location: profile.php");
    }
}

else{
    $sql = "UPDATE user SET fullname = '$updatename', email = '$updateemail' WHERE id = '$userid' ";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: profile.php");
}
}

?>