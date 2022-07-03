<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn,$sql);
?>  


 <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Teachers Details<a href="teacherview.php"><button class="btn btn-primary" style="float:right; ">Add Teacher</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Teachers Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Tacher Photo</th>
                                            <th>Tacher Name</th>
                                            <th>Tacher Address</th>
                                            <th>Tacher Email</th>
                                            <th>Tacher Phone</th>
                                            <th>Teacher Status</th>
                                            <th>action</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($result)>0){ ?> 

                                                  <?php while ($row=mysqli_fetch_array($result)){ ?>
                                                    <tr class="odd gradeX">
                                            <td><img src="../images/<?php echo $row['teacherphoto']; ?>"height="50px"></td>
                                            <td><?php echo $row["teachername"]; ?></td>
                                            <td><?php echo $row["teacheraddress"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["teacherphone"]; ?></td>
                                            <td><?php echo $row["status"]; ?> </td>
                                            <td class="center"><a href="teacheredit.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-primary">Edit</button></a>
                                            <a href="teacherdelete.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="deactivestatus.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activestatus.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
                                                <?php } ?>
                                            <a href="reset_teacher_password.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info">Reset Password</button></a></td>
                                        
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
      




