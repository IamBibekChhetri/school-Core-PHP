
<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student Attendence:</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<!-- ----------------------Students details -------------------------------------------------- -->
                        <div class="panel-heading">
                           1 .  &nbsp;  Attendence 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="student_attendence_process.php" method = "Post">
                                    
<!-- ----------------------Class details -------------------------------------------------- -->
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label>Class:</label>
                                            <select class="form-control" name="selectclass">


                                            <?php
                                            
                                            $sql = "SELECT * FROM class where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['class'];?></option>
                                                <?php } ?>                                                
                                            </select>
                                        </div>

                                    <div class="form-group">
                                            <label>Section:</label>
                                            <select class="form-control" name="selectclass">


                                            <?php
                                            
                                            $sql = "SELECT * FROM section where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['sectionname'];?></option>
                                                <?php } ?>                                                
                                            </select>
                                        </div>
                               </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    </div>
    <?php
$sql = "SELECT * FROM sattendence";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            Semester Details 
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Students Name</th>
                                <th>Roll No</th>
                                <th>action</th>
                            </tr>

                        </thead>
                        <tbody>

                            <?php if (mysqli_num_rows($result)>0){ ?> 

                                      <?php while ($row=mysqli_fetch_array($result)){ ?>
                                        <tr class="odd gradeX">
                                <?php
                                $studentsql = "SELECT * FROM students WHERE id = '$row[student_id]'";
                                $studentquery = mysqli_query($conn, $studentsql);
                                $studentrow=mysqli_fetch_array($studentquery);

                                ?>
                                <td><?php echo $studentrow["studentName"]; ?></td>

                                <?php
                                $studentsql = "SELECT * FROM students WHERE id = '$row[roll_id]'";
                                $studentquery = mysqli_query($conn, $studentsql);
                                $studentrow=mysqli_fetch_array($studentquery);
                                ?>
                                <td><?php echo $studentrow["roll"]; ?></td>

     
                                <td class="center"><div class="form-group"> 
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
                                    </tr>
                                        
                                      <?php } ?>
                               <?php } ?>
                            </tbody>
                    </table>
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