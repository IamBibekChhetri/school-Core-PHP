<?php
require_once "../connection.php";
$facultyname = $_POST['facultyname'];
$sql = "insert into faculty (name) values('$facultyname')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewfaculty.php");
}
else{
    echo "<script>alert('Error')</script>";
}


?>
