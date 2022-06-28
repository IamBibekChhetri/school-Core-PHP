<?php

require_once "../connection.php";




$id = $_GET['id'];
$sql =  "DELETE FROM students  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewstudent.php'</script>";
}
// header("Location: viewstudent.php");


?>
