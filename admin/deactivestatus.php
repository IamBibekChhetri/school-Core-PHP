<?php
require_once "../connection.php";
$status = "Deactive";
$id = $_GET['id'];

$sql = "UPDATE teacher SET status = '$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);


if($query){
    header("Location: teacherview.php");
}
else{
    echo "<script> alert('Error!)'</script>";
}

?>