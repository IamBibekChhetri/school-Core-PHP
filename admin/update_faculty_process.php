<?php

require_once "../connection.php";
$updatefaculty = $_POST['editfacultyname'];


$id = $_GET['id'];
$sql = "UPDATE faculty SET  name = '$updatefaculty' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewfaculty.php'</script>";
}



?>