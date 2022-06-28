<?php

require_once "../connection.php";
$updatefaculty = $_POST['selectfaculty'];
$updateclass = $_POST['editclass'];


$id = $_GET['id'];
$sql = "UPDATE class SET  faculty_id = '$updatefaculty', class = '$updateclass' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewclass.php'</script>";
}
// header("Location: viewclass.php");


?>