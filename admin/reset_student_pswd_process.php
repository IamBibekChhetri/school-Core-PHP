<?php
require_once "../connection.php";
$password = $_POST['password'];
$conformpassword = $_POST['confpassword'];
$mdpassword = md5($password);

$id = $_GET['id'];
$sql = "UPDATE students SET password = '$mdpassword' where id = '$id'";


if($_POST['password']!=$_POST['confpassword']){
    echo "<script>alert('Password did not match')</script>";
    header("Location: resetstudentpswd.php?id=".$id);
} 
else{
    $query = mysqli_query($conn,$sql);
    if($query){
    echo "<script>alert('signup add successfully');
    </script>";
    header("Location: viewstudent.php");
}
else{
    echo "<script>alert('Error!')</script>";
    header("Location: resetstudentpswd.php");
}

}
?>