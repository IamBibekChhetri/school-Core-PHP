<?php
require_once "../connection.php";
$studentID = $_POST['studentname'];
$attendence = $_POST['attendence'];

$sql = "insert into attendence (student_id, sstatus) values('$studentID', '$attendence')";
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