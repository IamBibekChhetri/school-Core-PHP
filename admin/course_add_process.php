<?php
require_once "../connection.php";
$classID = $_POST['selectclass'];
$coursename = $_POST['coursename'];
$status = $_POST['status'];

$sql = "insert into course (class_id, coursename, status) values('$classID', '$coursename','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('Course add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewcourse.php");
?>
