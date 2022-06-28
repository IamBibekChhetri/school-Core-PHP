<?php

require_once "../connection.php";
$updatefaculty = $_POST['selectfaculty'];
$updateclass = $_POST['selectclass'];
$updatesubject = $_POST['selectsubject'];
$updateauthor = $_POST['authorname'];
$updatepublish = $_POST['publishdate'];
$updatepdf = $_POST['pdf'];



$id = $_GET['id'];
$sql = "UPDATE books SET  facultyname='$updatefaculty', classname='$updateclass', subjectname='$updatesubject', authorname='$updateauthor', publish_date='$updatepublish', pdf='$updatepdf' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewbooks.php'</script>";
}
// header("Location: viewbooks.php");


?>