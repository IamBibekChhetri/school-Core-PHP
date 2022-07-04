<?php

require_once "../connection.php";

$id = $_GET['id'];
$sql =  "DELETE FROM level  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewlevel.php'</script>";
}

?>
