<?php
require_once "../connection.php";
$facultyID = $_POST['selectfaculty'];
$levelname = $_POST['level'];
$status = $_POST['status'];

$sql = "insert into level (faculty_id, level, status) values('$facultyID', '$levelname','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('Level add Successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewlevel.php");
?>