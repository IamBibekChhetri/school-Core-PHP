<?php

require_once "../connection.php";
$editsemester = $_POST['editsemester'];


$id = $_GET['id'];
$sql = "UPDATE semester SET  semestername = '$editsemester' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewsemester.php'</script>";
}



?>