<?php

require_once "../connection.php";
$editclass = $_POST['editclass'];
$editcoursename = $_POST['editcoursename'];
$id = $_GET['id'];

$sql = "UPDATE course SET  class_id = '$editclass', coursename = '$editcoursename' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewcourse.php'</script>";
}


?>