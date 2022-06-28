<?php
include "include/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$studentsql = "SELECT * FROM students where id = '$id'";
$studentresult = mysqli_query($conn,$studentsql);
$studentrow=mysqli_fetch_assoc($studentresult);
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Students Regestration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">

<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp; Edit  NCT Students Details 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_student_process.php?id=<?php echo $studentrow['id']; ?>" method = "Post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Students Full Name:</label>
                                            <input class="form-control"  value="<?php echo $studentrow['studentName']; ?>" name="studentname" placeholder="Edit Students Name"  required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" value="<?php echo $studentrow['address']; ?>" placeholder="Enter address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" value="<?php echo $studentrow['email']; ?>" placeholder="Enter address" name="email" type="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Students Picture</label>
                                            <input type="file"  value="<?php echo $studentrow['studentpic']; ?>" name="studentpic">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input class="form-control" value="<?php echo $studentrow['dob']; ?>" name="dob" type="date" placeholder="Edit DOB" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Place Of Birth:</label>
                                            <input class="form-control" value="<?php echo $studentrow['birthplace']; ?>" name="placedob" placeholder="Edit Birth Place" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input class="form-control" value="<?php echo $studentrow['age']; ?>" name="age" type="number" placeholder="" required>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <label class="radio-inline">
                                                <input type="radio" value="male" name="gender"  id="optionsRadiosInline1">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="female" name="gender"  id="optionsRadiosInline2">Female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="others" name="gender"  id="optionsRadiosInline3">Others
                                            </label>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 <!-- ---------------------------- Parents Information --------------------------------- -->
                                     <div class="col-lg-6">
                                          <div class="panel panel-default">

                                             <div class="panel-heading">
                                                   2 .  &nbsp; Edit Father Details 
                                           </div>
                                         <div class="panel-body">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label>Fathers Name:</label>
                                                            <input class="form-control" value="<?php echo $studentrow['fathername']; ?>" name="fathername" placeholder="" >
                                                        </div>

                                                 <div class="form-group">
                                            <label>Profession:</label>
                                            <input class="form-control" value="<?php echo $studentrow['fatherprofession']; ?>" name="fatherprofession" placeholder="">
                                                 </div>

                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                            <input class="form-control" value="<?php echo $studentrow['fathermob']; ?>" name="fathermob" type="number" placeholder="" maxlength="10">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    
<!-- ------------------------Mother's Details ------------------------------------- -->
                                       
                                          <div class="col-lg-6">
                                            <div class="panel panel-default">

                                                 <div class="panel-heading">
                                                    3 .  &nbsp; Edit Mother Details 
                                                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Mother Name Name:</label>
                                            <input class="form-control" value="<?php echo $studentrow['mothername']; ?>" name="mothername" placeholder="">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Profession:</label>
                                            <input class="form-control" value="<?php echo $studentrow['motherprofession']; ?>" name="motherprofession" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                            <input class="form-control"  value="<?php echo $studentrow['mothermob']; ?>" name="mobileno" type="number" placeholder="" maxlength="10">
                                        </div>
                                    
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