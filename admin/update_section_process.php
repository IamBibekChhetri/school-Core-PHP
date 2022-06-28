<?php

require_once "../connection.php";
$updatesection = $_POST['editsectionname'];


$id = $_GET['id'];
$sql = "UPDATE section SET  sectionname = '$updatesection' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewsection.php'</script>";
}



?>