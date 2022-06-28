<?php
require_once "../connection.php";
$sectionname = $_POST['sectionname'];
$status = $_POST['status'];

$sql = "insert into section (sectionname,status) values('$sectionname','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewsection.php");
}
else{
    echo "<script>alert('Error')</script>";
}


?>
