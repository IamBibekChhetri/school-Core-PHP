<?php

require_once "../connection.php";



$id = $_GET['id'];
echo $id;
$sql =  "DELETE FROM faculty  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewfaculty.php'</script>";
}
// header("Location: viewfaculty.php");


?>
