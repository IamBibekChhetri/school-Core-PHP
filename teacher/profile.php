<?php
include "include/header.php";
require_once "../connection.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM teacher where id = '$id'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teacher Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                    <div class="form-group">
                                        <!-- <label>User Picture</label> -->
                                       
                                        <img src="../images/<?php echo $row['teacherphoto']; ?>"height="100px" id="circle"><br>
                                        
                                        
                                    </div>

                                    <div class="form-group">
                                    <h2> <label ><?php echo $row['teachername']; ?> </label></h2>
                                   
                                    </div>
                                    <div class="form-group">
                                            <h4><label><?php echo $row['email']; ?></label></h4>
                                          
                                        </div>
                                        <a href="profile_edit.php"  class="btn btn-success" >Edit</a>
                                    </form>
                                </div>



<?php
include "include/footer.php"
?>