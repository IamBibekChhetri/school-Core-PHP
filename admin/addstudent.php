<?php
include "include/header.php";


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
                           1 .  &nbsp;   NCT Students Details 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="student_add_process.php" method="Post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Students Full Name:</label>
                                            <input class="form-control" placeholder="Enter Full Name" name="studentname" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" placeholder="Enter address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input class="form-control" type="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Students Picture</label>
                                            <input type="file"  name="studentpic" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input class="form-control" type="date" placeholder="Enter DOB" name="dob" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Place Of Birth:</label>
                                            <input class="form-control" placeholder="Enter Birth Place" name="dobplace" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input class="form-control" type="number" name="age" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Roll Number:</label>
                                            <input class="form-control" type="number" name="roll" required>
                                        </div>
                                       
                                    
                                        <div class="form-group"> 
                                            <label>Gender</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline1" value="male" required>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline2" value="female"required>Female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline3" value="others" required>Others
                                            </label>
                                        </div>

                                        <div class="form-group"> 
                                            <label>Status:</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline1" value="Active" required>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline2" value="Deactive"required>Deactive
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
                                                   2 .  &nbsp;  Father Details 
                                           </div>
                                         <div class="panel-body">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label>Fathers Name:</label>
                                                            <input class="form-control" name="fathername" placeholder="" >
                                                        </div>

                                                 <div class="form-group">
                                            <label>Profession:</label>
                                            <input class="form-control" name="fatherprofession" placeholder="">
                                                 </div>

                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                            <input class="form-control" type="number" name="fathermob" placeholder="" maxlength="10">
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
                                                    3 .  &nbsp;  Mother Details 
                                                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Mother Name Name:</label>
                                            <input class="form-control" name="mothername" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Profession:</label>
                                            <input class="form-control" name="motherprofession" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                            <input class="form-control" type="number" name="mothermob" placeholder="" maxlength="10">
                                        </div>
                                    
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