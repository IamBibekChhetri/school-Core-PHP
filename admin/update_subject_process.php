<?php

require_once "../connection.php";
$updatefaculty = $_POST['selectfaculty'];
$updateclass = $_POST['selectclass'];
$updatesubject = $_POST['addsubject'];

$id = $_GET['id'];
$sql = "UPDATE subject SET facultyname = '$updatefaculty', classname = '$updateclass', subjectName = '$updatesubject' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewsubject.php'</script>";
}
// header("Location: viewsubject.php");


?>