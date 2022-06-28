<?php
include "include/header.php";


?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Books Regestration Form</h1>
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
                                    <form role="form" action="book_add_process.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Faculty</label>
                                            <select class="form-control" name="selectfaculty" value="<?php echo $row['id']; ?>">

                                            <?php
                                            
                                            $sql = "SELECT * FROM faculty WHERE status = 'Active'";
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
                           2 .  &nbsp;  Add Class 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="book_add_process.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Class</label>
                                            <select class="form-control" name="selectclass">
                                            <?php
                                            
                                            $sql = "SELECT * FROM class where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['class'];?></option>
                                                <?php } ?> 
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ------------------------------------  Select Subject ------------------------------- -->
                                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                           3 .  &nbsp; Select Subject 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="book_add_process.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Subject</label>
                                            <select class="form-control" name="selectsubject">
                                            <?php
                                            
                                            $sql = "SELECT * FROM subject where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['subjectName'];?></option>
                                                <?php } ?> 
                                                
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- -------------------------------------- Creating Auther Here --------------------------  -->

<div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           4 .  &nbsp;   Auther Name 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label>Enter Auther Name</label>
                                            <select class="form-control" name="authorname">
                                            <?php
                                            
                                            $sql = "SELECT * FROM author where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['authorname'];?></option>
                                                <?php } ?> 
                                                
                                            </select>                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ----------------------------------- Creating Published date -------------------------  -->

<div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           5 .  &nbsp;   Published In 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label>Published Date</label>
                                            <input class="form-control" name="publishdate" placeholder="Enter published date here" type="date" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- ---------------------------------------------  pdf file --------------------------------- -->
<div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           6 .  &nbsp;   PDF File
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label>Choose PDF File</label>
                                            <input class="form-control" type="file" name="pdf" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- ------------------- Status -------------------------  -->

            <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           7 .  &nbsp;   Status
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






<?php
    include "include/footer.php";

?>