<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM faculty";
$result = mysqli_query($conn,$sql);
?>  


 <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Faculty Details<a href="addfaculty.php"><button class="btn btn-primary" style="float:right; ">Add Faculty</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Faculty Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Faculty Name</th>
                                            <th>Faculty Status</th>
                                            <th>action</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($result)>0){ ?> 

                                                  <?php while ($row=mysqli_fetch_array($result)){ ?>
                                                    <tr class="odd gradeX">
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["status"]; ?> </td>
                                            
                                            <td class="center"><a href="editfaculty.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_faculty.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/facultydeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/facultyactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
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
      




