<?php
require_once "../connection.php";
$authorname = $_POST['authorname'];
$status = $_POST['status'];
$sql = "insert into author (authorname) values('$authorname')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewauthor.php");
}
else{
    echo "<script>alert('Error')</script>";
}


?>
