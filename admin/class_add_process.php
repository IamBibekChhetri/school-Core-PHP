<?php
require_once "../connection.php";
$facultyID = $_POST['selectfaculty'];
$classname = $_POST['classname'];
$status = $_POST['status'];

$sql = "insert into class (faculty_id, class, status) values('$facultyID', '$classname','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('class add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewclass.php");
?>
