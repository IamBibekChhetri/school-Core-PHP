
<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$attendencesql = "SELECT * FROM sattendence where id = '$id'";
$attendenceresult = mysqli_query($conn,$attendencesql);
$attendencerow=mysqli_fetch_assoc($attendenceresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Student Attendence</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;  Edit Student Attendence
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_student_attendence_process.php?id=<?php echo $attendencerow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Student Name</label>
                                            <select class="form-control" name="selectstudent">
                                            <?php
                                            
                                            $sql = "SELECT * FROM students";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $attendencerow['student_id']?'selected':''; ?>><?php echo $row['studentName'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Roll Number:</label>
                                            <input class="form-control" value="<?php echo $studentrow['roll']; ?>" name="rollno" type="number" required>
                                        </div>
                                            <label>Take Attendence:</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" value="Present" name="attendence"  id="optionsRadiosInline1">Present
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Absent" name="attendence"  id="optionsRadiosInline2">Absent
                                            </label>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>


<?php
include "include/footer.php";

?>