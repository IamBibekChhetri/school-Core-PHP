<?php

require_once "../connection.php";

$classId = $_POST['selectclass'];
$sectionId = $_POST['selectsection'];


$students = $_POST['studentid'];
$roll = $_POST['rollno'];


for($i=0; $i<count($students); $i++){
$studentid = $students[$i];

 $rollId = $roll[$i];
 $attenValue = "att".$i+1;
 $attendence =  $_POST[$attenValue];



$sql = "insert into sattendence (student_id, roll_id, class_id, section_id,  sstatus) values('$studentid','$rollId','$classId', '$sectionId','$attendence')";
$query = mysqli_query($conn,$sql);
}

header("Location: viewstudentattendence.php"); 

?>