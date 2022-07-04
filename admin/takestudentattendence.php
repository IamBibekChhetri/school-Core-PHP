
<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM sattendence";
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
                                            
                                            $classsql = "SELECT * FROM class where status = 'Active'";
                                            $classresult = mysqli_query($conn,$classsql);
                                            while($classrow=mysqli_fetch_assoc($classresult)){?>
                                                <option value="<?php echo $row['class_id']; ?>"><?php echo $classrow['class'];?></option>
                                                <?php } ?>                                                
                                            </select>
                                        </div>

                                    <div class="form-group">
                                            <label>Section:</label>
                                            <select class="form-control" name="selectsection">


                                            <?php
                                            
                                            $sectionsql = "SELECT * FROM section where status = 'Active'";
                                            $sectionresult = mysqli_query($conn,$sectionsql);
                                            while($sectionrow=mysqli_fetch_assoc($sectionresult)){?>
                                                <option value="<?php echo $row['section_id']; ?>"><?php echo $sectionrow['sectionname'];?></option>
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
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn,$sql);
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
                                
                                <td><input type="hidden" value="<?php echo $row["id"]; ?>" name="studentname"><?php echo $row["studentName"]; ?></td>
                                

                               
                                <td><?php echo $row["roll"]; ?><input type="hidden" value="<?php echo $row["id"]; ?>" name="roll"></td>

     
                                <td class="center">
                                    <div class="form-group"> 
                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="attendence" id="optionsRadiosInline1" value="Present" required>Present
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="attendence" id="optionsRadiosInline2" value="Absent"required>Absent
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="attendence" id="optionsRadiosInline3" value="Leave" required>Leave
                                            </label>
                                        </div>
                                </td>
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