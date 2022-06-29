<?php

require_once "../connection.php";
$studentname = $_POST['studentname'];
$studentaddress = $_POST['address'];
$studentemail = $_POST['email'];
$studentphoto = $_FILES['studentpic']['name'];
$studentdob = $_POST['dob'];
$studentbirthplace = $_POST['placedob'];
$studentage = $_POST['age'];
$studentgender = $_POST['gender'];
$fathername = $_POST['fathername'];
$fatherprofession = $_POST['fatherprofession'];
$fathermobile = $_POST['fathermob'];
$mothername = $_POST['mothername'];
$motherprofession = $_POST['motherprofession'];
$mothermobile = $_POST['mobileno'];
$id = $_GET['id'];

if($studentphoto){
    $studentphotoTmp = $_FILES['studentpic']['tmp_name'];
    $directory = "images/".$studentphoto;

$sql = "UPDATE students SET  studentName = '$studentname', address = '$studentaddress', email = '$studentemail', studentpic = '$studentphoto', dob = '$studentdob', birthplace = '$studentbirthplace', age = '$studentage', gender = '$studentgender', fathername = '$fathername', fatherprofession = '$fatherprofession', fathermob = '$fathermobile', mothername = '$mothername', motherprofession = '$motherprofession', mothermob = '$mothermobile' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if($result){
    move_uploaded_file($studentphotoTmp, $directory);
    header("Location: viewstudent.php");
}
}
else{
    $sql = "UPDATE students SET  studentName = '$studentname', address = '$studentaddress', email = '$studentemail', dob = '$studentdob', birthplace = '$studentbirthplace', age = '$studentage', gender = '$studentgender', fathername = '$fathername', fatherprofession = '$fatherprofession', fathermob = '$fathermobile', mothername = '$mothername', motherprofession = '$motherprofession', mothermob = '$mothermobile' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header("Location: viewstudent.php");

    }
}
// header("Location: viewstudnet.php");


?>