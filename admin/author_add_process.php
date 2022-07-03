<?php
require_once "../connection.php";
$authorname = $_POST['authorname'];
$status = $_POST['status'];
$sql = "INSERT INTO author (authorname, status) values('$authorname','$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewauthor.php");
}
else{
    echo "<script>alert('Error')</script>";
}

?>
