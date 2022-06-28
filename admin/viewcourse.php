
<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM course";
$result = mysqli_query($conn,$sql);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Course Details<a href="addcourse.php"><button class="btn btn-primary" style="float:right; ">Add Course</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Course Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Class Name</th>
                                            <th>Course Name</th>
                                            <th>Course Status</th>
                                            <th>action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php if (mysqli_num_rows($result)>0){ ?> 

                                                  <?php while ($row=mysqli_fetch_array($result)){
                                                      $classsql = "SELECT * FROM class WHERE id = '$row[class_id]'";
                                                      $classquery = mysqli_query($conn, $classsql);
                                                      $classrow=mysqli_fetch_array($classquery);

                                                    ?>
                                                   
                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $classrow['class']; ?></td> 
                                    <td><?php echo $row["coursename"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>


                                            <td class="center"><a href="editcourse.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_course.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            

                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/coursedeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/courseactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
                                                </td>
                                        
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
include "include/footer.php"
?>

        
