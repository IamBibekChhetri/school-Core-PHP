<?php
require_once "../connection.php";
$semestername = $_POST['semester'];
$status = $_POST['status'];

$sql = "insert into semester (semestername,status) values('$semestername','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewsemester.php");
}
else{
    echo "<script>alert('Error')</script>";
}


?>
