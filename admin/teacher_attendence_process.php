<?php
require_once "../connection.php";
$teacherID = $_POST['teachername'];
$attendence = $_POST['attendence'];

$sql = "insert into tattendence (teacher_id, tstatus) values('$teacherID', '$attendence')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewteacherattendence.php");
}
else{
    echo "<script> alert('Attende can not add. Please try again!');
    window.open('taketeacherattendence.php', '_SELF');
    </script>";
}
 

?>