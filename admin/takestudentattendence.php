
<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM sattendence";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div id="page-wrapper">
  
 <form method="POST" action="student_attendence_process.php">
   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student Attendence:</h1>
                </div>
            
    </div>
    <div class="row">
            <div class="panel panel-default">
                        <div class="panel-heading">
                           1 .  &nbsp;  Attendence 
                        </div>
            </div>
    
    <div class="form-group">
                                            <label>Class:</label>
                                            <select class="form-control" name="selectclass">


                                            <?php
                                            
                                            $classsql = "SELECT * FROM class where status = 'Active'";
                                            $classresult = mysqli_query($conn,$classsql);
                                            while($classrow=mysqli_fetch_assoc($classresult)){?>
                                                <option value="<?php echo $classrow['id']; ?>"><?php echo $classrow['class'];?></option>
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
                                                <option value="<?php echo $sectionrow['id']; ?>"><?php echo $sectionrow['sectionname'];?></option>
                                                <?php } ?>                                                
                                            </select>
                                        </div>

                                        </div> 
                                        
                                        <div class="row">

                                       
                      <div class="panel panel-default">
            <div class="panel-heading">
            Semester Details 
            </div>
            </div>
            <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <?php
                                        $sql = "SELECT * FROM students";
                                        $result = mysqli_query($conn,$sql);
                                        ?>
                <thead>
                    <tr>
                    <th>Students Name</th>
                    <th>Roll No</th>
                    <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($result)) { ?>
                       <?php  $i = 1;
                            while ($row=mysqli_fetch_array($result)){ ?>
                    
                    <tr>

                        <td><input type="hidden" value="<?php echo $row['id']; ?>" name="studentid[]" ><?php echo $row['studentName'] ?></td>
                        <td><input type="hidden" value="<?php echo $row['roll']; ?>" name="rollno[]"><?php echo $row['roll'] ?></td>
                        <td>
                                <label class="radio-inline">
                                    <input type="radio" name="att<?php echo $i; ?>" value="Absent" checked="checked">Absent 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="att<?php echo $i; ?>" value="Present">Present 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="att<?php echo $i; ?>" value="Leave">Leave 
                                </label>
                        </td>
                        
                    </tr>
                    <?php $i++;
                     } 
                    
                    ?>
                <?php } ?>
                </tbody>
            </table>

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