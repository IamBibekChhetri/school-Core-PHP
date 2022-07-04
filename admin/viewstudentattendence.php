<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM sattendence";
$result = mysqli_query($conn,$sql);
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Student Attendence Details<a href="takestudentattendence.php"><button class="btn btn-primary" style="float:right; ">Add Student Attendence</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Student Attendence Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           <th>Student Name</th>
                                          <th>class</th>
                                          <th>Section</th>
                                          <th>Roll No</th>
                                          <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php if (mysqli_num_rows($result)>0){ ?> 

                                            <?php while ($row=mysqli_fetch_array($result)){ ?>
                                        <tr class="odd gradeX">
                                        <?php $studentsql = "SELECT * FROM students WHERE id = '$row[student_id]'";
                                            $studentquery = mysqli_query($conn, $studentsql);
                                            $studentrow=mysqli_fetch_array($studentquery);
                                        ?>                                        
                                        <td><?php echo $studentrow['studentName']; ?></td>

                                        <?php $classsql = "SELECT * FROM class WHERE id = '$row[class_id]'";
                                            $classquery = mysqli_query($conn, $classsql);
                                            $classrow=mysqli_fetch_array($classquery);
                                        ?>
                                        <td><?php echo $classrow['class']; ?></td>

                                        <?php $sectionsql = "SELECT * FROM section WHERE id = '$row[section_id]'";
                                            $sectionquery = mysqli_query($conn, $sectionsql);
                                            $sectionrow=mysqli_fetch_array($sectionquery);
                                        ?>
                                        <td><?php echo $sectionrow['sectionname']; ?></td>
                                        
                                        <?php $studentsql = "SELECT * FROM students WHERE id = '$row[roll_id]'";
                                            $studentquery = mysqli_query($conn, $studentsql);
                                            $studentrow=mysqli_fetch_array($studentquery);

                                        ?> 
                                        <td><?php echo $studentrow['roll']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                          
                                        

                                            <td class="center"><a href="edit_student_attendence.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_student_attendence.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
                                            <?php
                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/viewstudentdeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/viewstudentactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
                                                <?php } ?>
                                        
                                        </tr>

                                         <?php } ?>
                                <?php } ?>
                                                                
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>


<?php
    include "include/footer.php";

?>


