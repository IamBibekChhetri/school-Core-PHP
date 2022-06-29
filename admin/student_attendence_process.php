<?php
require_once "../connection.php";
$studentID = $_POST['studentname'];
$attendence = $_POST['attendence'];
$rollnumber = $_POST['roll'];

$sql = "insert into sattendence (student_id, sstatus, roll) values('$studentID', '$attendence','$rollnumber')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewstudentattendence.php");
}
else{
    echo "<script> alert('Attende can not add. Please try again!');
    window.open('takestudentattendence.php', '_SELF');
    </script>";
}
 

?>