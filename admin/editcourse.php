
<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$coursesql = "SELECT * FROM course where id = '$id'";
$courseresult = mysqli_query($conn,$coursesql);
$courserow=mysqli_fetch_assoc($courseresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Course Regestration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;  Edit Class 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_course_process.php?id=<?php echo $courserow['id']; ?>" method="Post">
                                    <div class="form-group">
                                            <label>Select Class</label>
                                            <select class="form-control" name="editclass">


                                            <?php
                                            
                                            $sql = "SELECT * FROM class";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $courserow['class_id']?'selected':''; ?>><?php echo $row['class'];?></option>
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
                           2 .  &nbsp;   Add Course 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                    <div class="form-group">
                                            <label>Enter Course</label>
                                            <input class="form-control"  value="<?php echo $courserow['coursename']; ?>" name="editcoursename" required>
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