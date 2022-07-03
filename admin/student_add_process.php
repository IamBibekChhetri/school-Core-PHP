<?php
require_once "../connection.php";
$studentname = $_POST['studentname'];
$address = $_POST['address'];
$studentemail = $_POST['email'];
$studentpassword = $_POST['password'];
$mdstudentpassword = md5($studentpassword);
$studentpic = $_FILES['studentpic']['name'];
$studentpicTmp = $_FILES['studentpic']['tmp_name'];
$directory = "images/".$studentpic;
$dob = $_POST['dob'];
$dobplace = $_POST['dobplace'];
$age = $_POST['age'];
$rollno = $_POST['roll'];
$gender = $_POST['gender'];
$fathername = $_POST['fathername'];
$fatherprofession = $_POST['fatherprofession'];
$fathermob = $_POST['fathermob'];
$mothername = $_POST['mothername'];
$motherprofession = $_POST['motherprofession'];
$mothermob = $_POST['mothermob'];
$status = $_POST['status'];



$sql = "INSERT INTO students (studentName, address, email, password, studentpic, dob, birthplace, age, roll, gender, fathername, fatherprofession, fathermob, mothername, motherprofession, mothermob, status) values('$studentname','$address', '$studentemail', '$mdstudentpassword', '$studentpic', '$dob', '$dobplace', '$age', '$rollno', '$gender', '$fathername', '$fatherprofession', '$fathermob', '$mothername', '$motherprofession', '$mothermob','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    move_uploaded_file($studentpicTmp, $directory);
    echo "<script>alert('student add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewstudent.php");
?>