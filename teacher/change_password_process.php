<?php
require_once "../connection.php";
session_start();
$userid = $_SESSION['id'];
$oldpassword = $_POST['oldpassword'];
$md5oldpassword = md5($oldpassword);
$newpassword = $_POST['password'];
$confpassword = $_POST['confpassword'];

$sql = "SELECT id FROM teacher where id = '$userid' AND password = '$md5oldpassword' ";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);

if($result){
    
    
if($newpassword == $confpassword){
 header("Location: profile.php");
}
else{
    echo "<script>alert('Password Does not matched');
    window.open('changepassword.php', '_SELF');
    </script>";
   
}

}
else{
    echo "<script>alert('Old password does not matched');
    window.open('changepassword.php', '_SELF');
    </script>";
    
   
}
?>