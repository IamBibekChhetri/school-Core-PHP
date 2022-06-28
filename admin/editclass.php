
<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$classsql = "SELECT * FROM class where id = '$id'";
$classresult = mysqli_query($conn,$classsql);
$classrow=mysqli_fetch_assoc($classresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Class Regestration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;  Edit Faculty 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_class_process.php?id=<?php echo $classrow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Faculty</label>
                                            <select class="form-control" name="selectfaculty">
                                            <?php
                                            
                                            $sql = "SELECT * FROM faculty";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $classrow['faculty_id']?'selected':''; ?>><?php echo $row['name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Class Add -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           2 .  &nbsp;   Edit Class 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <label>Edit Your Class</label>
                                            <input class="form-control" value="<?php echo $classrow['class']; ?>" name="editclass" placeholder="Edit Class here">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>


<?php
include "include/footer.php";

?>