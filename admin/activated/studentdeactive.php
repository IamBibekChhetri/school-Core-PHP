<?php
require_once "../../connection.php";
$status = "Deactive";
$id = $_GET['id'];

$sql = "UPDATE students SET status = '$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
    header("Location: ../viewstudent.php");
}
else{
    echo "<script> alert('Error!)'</script>";
}

?>