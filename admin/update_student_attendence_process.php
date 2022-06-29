<?php

require_once "../connection.php";
$selectstudent = $_POST['selectstudent'];
$attendence = $_POST['attendence'];
$rollnumber = $_POST['rollno'];


$id = $_GET['id'];
$sql = "UPDATE sattendence SET  student_id = '$selectstudent', sstatus = '$attendence', roll = '$rollnumber' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewstudentattendence.php'</script>";
}
// header("Location: viewclass.php");


?>