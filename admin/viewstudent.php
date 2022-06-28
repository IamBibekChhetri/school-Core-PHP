<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Students Details<a href="addstudent.php"><button class="btn btn-primary" style="float:right; ">Add Student</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Students Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Student pic</th>
                                            <th>Student Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                         <?php if (mysqli_num_rows($result)>0){ ?> 

                                            <?php while ($row=mysqli_fetch_array($result)){ ?>
                                        <tr class="odd gradeX">                                        
                                        <td><img src="../images/<?php echo $row['studentpic']; ?>"height="50px"></td>
                                        <td><?php echo $row["studentName"]; ?></td>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["dob"]; ?></td>
                                        <td><?php echo $row["age"]; ?></td>
                                        <td><?php echo $row["gender"]; ?></td>
                                        <td><?php echo $row["status"]; ?></td>
                                          
                                        

                                            <td class="center"><a href="editstudent.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_student.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
                                            <a href="resetstudentpswd.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Reset Password</button></a>
                                        <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/studentdeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/studentactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
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
    include "include/footer.php";

?>


