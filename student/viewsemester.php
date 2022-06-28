<?php
include "include/header.php";
require_once "../connection.php";
$sql = "SELECT * FROM semester";
$result = mysqli_query($conn,$sql);
?>  


 <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Semester Details </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Semester Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Semester Name</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($result)>0){ ?> 

                                                  <?php while ($row=mysqli_fetch_array($result)){ ?>
                                                    <tr class="odd gradeX">
                                            <td><?php echo $row["semestername"]; ?></td>
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
      




 