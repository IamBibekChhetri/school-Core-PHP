<?php
require_once "../connection.php";
$facultyname = $_POST['selectfaculty'];
$classname = $_POST['selectclass'];
$subjectname = $_POST['addsubject'];
$status = $_POST['status'];

$sql = "insert into subject (faculty_id, class_id, subjectName, status) values('$facultyname', '$classname', '$subjectname','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('faculty add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewsubject.php");
?>