<?php

require_once "../connection.php";




$id = $_GET['id'];
$sql =  "DELETE FROM teacher  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='teacherview.php'</script>";
}
// header("Location: viewsubject.php");


?>
