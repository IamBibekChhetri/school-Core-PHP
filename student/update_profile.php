<?php

require_once "../connection.php";
$updatename = $_POST['studentName'];
$updateemail = $_POST['email'];

$userid = $_POST['id'];

$updateimage = $_FILES['studentpic']['name'];

if($updateimage){
   $updateimageTmp = $_FILES['studentpic']['tmp_name'];
    $directory = "images/".$updateimage;
    
$sql = "UPDATE students SET  studentpic = '$updateimage', studentName = '$updatename', email = '$updateemail' WHERE id = '$userid' ";
$result = mysqli_query($conn,$sql);

if($result){
    move_uploaded_file($updateimageTmp, $directory);
        header("Location: profile.php");
    }
}

else{
    $sql = "UPDATE students SET studentName = '$updatename', email = '$updateemail' WHERE id = '$userid' ";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: profile.php");
}
}


?>