<?php
require_once "../../connection.php";
$status = "Deactive";
$id = $_GET['id'];
echo $id;
$sql = "UPDATE attendence SET status = '$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
    header("Location: ../viewstudentattendence.php");
}
else{
    echo "<script> alert('Error!)'</script>";
}

?>