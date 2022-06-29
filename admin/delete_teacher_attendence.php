<?php

require_once "../connection.php";



$id = $_GET['id'];
echo $id;
$sql =  "DELETE FROM tattendence  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewteacherattendence.php'</script>";
}
// header("Location: viewfaculty.php");


?>
