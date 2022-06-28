<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM subject";
$result = mysqli_query($conn,$sql);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Subject Details </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Subject Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Faculty Name</th>
                                            <th>Class Name</th>
                                            <th>Subject Name</th>
                                           
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php if(mysqli_num_rows($result)>0){ ?>
                                                <?php while($row=mysqli_fetch_array($result)){ ?>

                                    
                                    <tr class="odd gradeX">
                                    <?php
                                        $facultysql = "SELECT * FROM faculty WHERE id = '$row[faculty_id]'";
                                        $facultyquery = mysqli_query($conn, $facultysql);
                                        $facultyrow=mysqli_fetch_array($facultyquery);

                                    ?>
                                    <td><?php echo $facultyrow["name"]; ?></td>
                                    <?php
                                        $classsql = "SELECT * FROM class WHERE id = '$row[class_id]'";
                                        $classquery = mysqli_query($conn, $classsql);
                                        $classrow=mysqli_fetch_array($classquery);

                                    ?>
                                    <td><?php echo $classrow["class"]; ?></td>
                                    <td><?php echo $row["subjectName"]; ?></td>
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
</div>






<?php 
include "include/footer.php"
?>