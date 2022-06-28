<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM teacher where id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Teacher Form </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;   NCT Teachers Details 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="teacher_update_process.php?id=<?php echo $row['id']; ?>" method="Post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Teacher Full Name:</label>
                                            <input class="form-control" value="<?php echo $row['teachername']; ?>" name="teachername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" value="<?php echo $row['teacheraddress']; ?>" name="address" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Teacher Picture</label>
                                            <input type="file" value="<?php echo $row['teacherphoto']; ?>" name="teacherphoto" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                            <input class="form-control" type="number" value="<?php echo $row['teacherphone']; ?>" name="teacherphone" maxlength="10">
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" value="<?php echo $row['email']; ?>" type="email" name="email" required>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

                                       
                                

<?php
include "include/footer.php";

?>