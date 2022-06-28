<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$subjectsql = "SELECT * FROM subject where id = '$id'";
$subjectresult = mysqli_query($conn,$subjectsql);
$subjectrow=mysqli_fetch_assoc($subjectresult);

?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit </h1>
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
                                    <form role="form" action="edit_subject_process.php?id=<?php echo $subjectrow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Faculty</label>
                                            <select class="form-control" name="selectfaculty">
                                            <?php
                                            
                                            $sql = "SELECT * FROM faculty";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $subjectrow['faculty_id']?'selected':''; ?>><?php echo $row['name'];?></option>
                                                <?php } ?>  
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Class Edit -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                           2 .  &nbsp;  Edit Class 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Select Class</label>
                                            <select class="form-control" name= "selectclass">
                                            <?php
                                            
                                            $sql = "SELECT * FROM class";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $subjectrow['class_id']?'selected':''; ?>><?php echo $row['class'];?></option>
                                                <?php } ?> 
                                                
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- --------------------------- Subject Edit -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           3 .  &nbsp;   Edit Subject 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Edit Your Subject</label>
                                            <input class="form-control" value="<?php echo $subjectrow['subjectName']; ?>" name = "addsubject" placeholder="Edit Subject here">
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