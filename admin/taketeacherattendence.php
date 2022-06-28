
<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn,$sql);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teacher Attendence Take:</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;  Teacher Attendence 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="teacher_attendence_process.php" method = "Post">
                                    <div class="form-group">
                                            <label>Teacher Name:</label>
                                            <select class="form-control" name="teachername">
                                            <?php if (mysqli_num_rows($result)>0){ ?>
                                            <?php while ($row=mysqli_fetch_array($result)){
                                                      
                                                    ?>
                                                <option value=" <?php echo $row['id']; ?>">  <?php echo $row['teachername'];?> </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group"> 
                                            <label>Take Attendence:</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="attendence" id="optionsRadiosInline1" value="Present" required>Present
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="attendence" id="optionsRadiosInline2" value="Absent"required>Absent
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