<?php

require_once "../connection.php";
$updateauthor = $_POST['editauthorname'];

$id = $_GET['id'];
$sql = "UPDATE author SET  authorname = '$updateauthor' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewauthor.php'</script>";
}



?>