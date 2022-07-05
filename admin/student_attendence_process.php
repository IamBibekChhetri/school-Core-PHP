<?php

require_once "../connection.php";
$selectclass_ID = $_POST['selectclass'];
$selectsection_ID = $_POST['selectsection'];
$studentname = $_POST['id'];
for($i=0; $i<2; $i++){
    echo $studentname[$i];
}

// $roll_ID = $_POST['roll'];
// $attendence = $_POST['attendence'];


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