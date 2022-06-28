
<?php
include "include/header.php";


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
                           1 .  &nbsp;  Add Faculty 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="class_add_process.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Faculty</label>
                                            <select class="form-control" name="selectfaculty">


                                            <?php
                                            
                                            $sql = "SELECT * FROM faculty where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
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
                           2 .  &nbsp;   Add Class 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Enter Your Class</label>
                                            <input class="form-control" name="classname" placeholder="Enter Class here" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- -------------------------------- Status Checked -------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           2 .  &nbsp;   Status Check 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
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


                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                    </div>
                                    </div>


<?php
include "include/footer.php";

?>