<?php
include "include/header.php";
require_once "../connection.php";

?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teachers Regestration Form</h1>
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
                                    <form role="form" action="teacher_add_process.php" method="Post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Teacher Full Name:</label>
                                            <input class="form-control" placeholder="Enter Full Name" name="teachername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" placeholder="Enter address" name="address" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Teacher Picture</label>
                                            <input type="file"  name="teacherphoto" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                            <input class="form-control" type="number" name="teacherphone" maxlength="10">
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" placeholder="Email" type="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input class="form-control" placeholder="Password" type="password" name="password" required>
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
                                        <button type="submit" class="btn btn-primary">Save</button>
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