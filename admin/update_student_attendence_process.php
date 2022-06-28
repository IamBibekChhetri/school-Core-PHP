<?php

require_once "../connection.php";
$selectstudent = $_POST['selectstudent'];
$attendence = $_POST['attendence'];


$id = $_GET['id'];
$sql = "UPDATE attendence SET  student_id = '$selectstudent', sstatus = '$attendence' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewstudentattendence.php'</script>";
}
// header("Location: viewclass.php");


?>