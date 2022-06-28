<?php

require_once "../connection.php";
$selectfaculty = $_POST['selectfaculty'];
$selectclass = $_POST['selectclass'];
$selectsubject = $_POST['selectsubject'];
$selectauthorname = $_POST['authorname'];
$selectpublishdate = $_POST['publishdate'];
$selectpdf = $_POST['pdf'];
$status = $_POST['status'];

$sql = "insert into books (facultyname, classname, subjectname,	authorname,	publish_date, pdf, status) values('$selectfaculty','$selectclass','$selectsubject','$selectauthorname','$selectpublishdate','$selectpdf','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('books add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewbooks.php");



?>

