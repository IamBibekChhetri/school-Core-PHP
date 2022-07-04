<?php
require_once "../connection.php";
$selectclass_ID = $_POST['selectclass'];
$selectsection_ID = $_POST['selectsection'];
$studentname_ID = $_POST['studentname'];
$roll_ID = $_POST['roll'];
$attendence = $_POST['attendence'];

echo $studentname_ID;
echo $roll_ID;
echo $selectclass_ID; 
echo $selectsection_ID;
echo $attendence;
// $sql = "insert into sattendence (student_id, roll_id, class_id, section_id,  sstatus) values('$studentname_ID','$roll_ID','$selectclass_ID', '$selectsection_ID','$attendence')";
// $query = mysqli_query($conn,$sql);

// if($query){
//     header("Location: viewstudentattendence.php");
// }
// else{
//     echo "<script> alert('Attende can not add. Please try again!');
//     window.open('takestudentattendence.php', '_SELF');
//     </script>";
// }
 

?>