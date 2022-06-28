<?php
require_once "../../connection.php";
$status = "Active";
$id = $_GET['id'];

$sql = "UPDATE author SET status = '$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
    header("Location: ../viewauthor.php");
}
else{
    echo "<script> alert('Error!)'</script>";
}

?>