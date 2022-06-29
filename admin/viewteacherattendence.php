<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM tattendence";
$result = mysqli_query($conn,$sql);
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Teacher Attendence Details<a href="taketeacherattendence.php"><button class="btn btn-primary" style="float:right; ">Add Teacher Attendence</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Teacher Attendence Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           <th>Teacher Name</th>
                                           <th>Teacher Attendence Status</th>
                                           <th>Teacher Status</th>
                                            <th>action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                         <?php if (mysqli_num_rows($result)>0){ ?> 

                                            <?php while ($row=mysqli_fetch_array($result)){ ?>
                                        <tr class="odd gradeX">
                                                <?php $teachersql = "SELECT * FROM teacher WHERE id = '$row[teacher_id]'";
                                                      $teacherquery = mysqli_query($conn, $teachersql);
                                                      $teacherrow=mysqli_fetch_array($teacherquery);

                                                    ?>                                        
                                        <td><?php echo $teacherrow['teachername']; ?></td>
                                        <td><?php echo $row['tstatus']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                      
                         

                                            <td class="center"><a href="edit_teacher_attendence.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_teacher_attendence.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
                                                <?php
                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/teacherviewdeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/teacherviewactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
                                                <?php } ?>
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
                            </div>


<?php
    include "include/footer.php";

?>


