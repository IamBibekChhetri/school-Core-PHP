<?php

require_once "../connection.php";



$id = $_GET['id'];
echo $id;
$sql =  "DELETE FROM section  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>alert('Deleted Successful!');
    window.location='viewsection.php'</script>";
}
// header("Location: viewfaculty.php");


?>
