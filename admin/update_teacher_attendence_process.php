<?php

require_once "../connection.php";
$selectteacher = $_POST['selectteacher'];
$attendence = $_POST['attendence'];


$id = $_GET['id'];
$sql = "UPDATE attendence SET  teacher_id = '$selectteacher', tstatus = '$attendence' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewteacherattendence.php'</script>";
}
// header("Location: viewclass.php");


?>