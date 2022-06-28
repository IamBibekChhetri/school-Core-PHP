<?php

require_once "../connection.php";




$id = $_GET['id'];
$sql =  "DELETE FROM subject  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewsubject.php'</script>";
}
// header("Location: viewsubject.php");


?>
